var mysql = require('mysql');
var bodyParser = require('body-parser');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "labshare"
});

const express = require('express');
const app = express();
const port = 3000; // Port 3000 -> localhost:3000

app.use(express.static(__dirname));
app.use(bodyParser.urlencoded({extended: false}));

app.post('/login', function (req, res) {
    console.log('POST request received at /login');

    con.query(`SELECT * FROM users WHERE email = '${req.body.email}' AND password = '${req.body.password}'`,
        function (err, result, fields) {
            if (err) throw err;

            if (result.length === 0) {
                res.status(406).redirect('/pages/?login=fail');
            } else {
                res.status(200).redirect('/pages/user/');
            }
        });
});

app.listen(port, () => console.log(`Example app listening on port ${port}!`));