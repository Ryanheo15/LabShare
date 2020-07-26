const mysql = require('mysql');
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser')
const fs = require('fs');

const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "lab_share"
});

const admin_email = 'admin@labshare.net';
const admin_pass = 'hunter2';

const bcrypt = require('bcrypt');
const salt = '$2b$09$Du5MEP3D993b/zbXcYR8og';

function encrypt(input) {
    return bcrypt.hashSync(input, salt).substring(salt.length);
}

const express = require('express');
const app = express();
const port = 3000; // Port 3000 -> localhost:3000

app.use(express.static(__dirname + "/public")); // url path begins at /public
app.use(bodyParser.urlencoded({extended: false}));
app.use(cookieParser())

// Login Request
app.post('/login', function (req, res) {
    console.log('Login request received at ' + new Date(Date.now()).toString());
    const passHash = encrypt(req.body.email);

    con.query(`SELECT * FROM users WHERE email = '${req.body.email}' AND password = '${req.body.password}'`,
        function (err, result, fields) {
            if (err) throw err;

            let cookies = {};

            cookies.firstName = result[0].first_name;
            cookies.lastName = result[0].last_name;
            cookies.email = result[0].email;
            cookies.institution = result[0].institution;
            cookies.department = result[0].department;
            cookies.division = result[0].division;
            cookies.building = result[0].building;
            cookies.notificationLimit = result[0].notification_limit;

            cookies.admin = req.body.email === 'avo@ucsd.edu';

            fs.writeFile(__dirname + '/public/assets/cookies.json', JSON.stringify(cookies), function (err) {
                if (err) throw err;
                console.log('Cookies saved')
            })

            if (result.length === 0) {
                res.status(406).redirect('/pages/?login=fail');
            } else if (req.body.email === admin_email && req.body.password === admin_pass) {
                res.status(200).redirect('/pages/admin/');
            } else {
                res.cookie('loggedIn', 'true');
                res.status(200).redirect('/pages/user/');
            }
        });
});

// Signup Requests
app.post('/signup', function (req, res) {
    console.log('Signup request received at ' + new Date(Date.now()).toString());

    if (req.body.pageFrom === 'signup') {
        res.sendFile(__dirname + '/public/pages/signup/research.html');
        res.cookie('firstName', req.body.firstName);
        res.cookie('lastName', req.body.lastName);
        res.cookie('email', req.body.email);
        res.cookie('password', encrypt(req.body.password));
    } else {
        res.sendFile(__dirname + '/public/pages/signup/index.html');
    }
});

// User Requests
app.post('/user', function (req, res) {
    let cookies = {};

    // Account Just Created
    if (req.body.pageFrom === 'signup') {
        con.query(`INSERT INTO users(first_name, last_name, email, password, institution, department, division, building, notification_limit) 
       VALUES ('${req.cookies.firstName}', '${req.cookies.lastName}', '${req.cookies.email}', '${req.cookies.password}', '${req.body.institution}', 
       '${req.body.department}', '${req.body.division}', '${req.body.building}', '${req.body.notificationLimit}')`,
            function (err, result, fields) {
                if (err) throw err;
            });

        res.cookie('institution', req.body.institution);
        res.cookie('department', req.body.department);
        res.cookie('division', req.body.division);
        res.cookie('building', req.body.building);
        res.cookie('loggedIn', 'true');

        cookies.firstName = req.cookies.firstName;
        cookies.lastName = req.cookies.lastName;
        cookies.email = req.cookies.email;
        cookies.password = req.cookies.password;
        cookies.institution = req.body.institution;
        cookies.department = req.body.department;
        cookies.division = req.body.division;
        cookies.building = req.body.building;
        cookies.notificationLimit = req.body.notificationLimit;
        cookies.admin = 'false';

        fs.writeFile(__dirname + '/public/assets/cookies.json', JSON.stringify(cookies), function (err) {
            if (err) throw err;
            console.log('Cookies saved')
        })

        res.clearCookie('password');
        res.status(200).redirect('/pages/user/');
    }
});

app.get('/', function (req, res) {
    console.log('Home page request received at ' + new Date(Date.now()).toString());
    if (req.cookies.loggedIn === true) {
        res.status(200).redirect('/pages/user/');
    } else {
        console.log(req.cookies);
        res.status(200).redirect('/pages/');
    }
});

app.listen(port, () => console.log(`Website listening on port ${port}!`));