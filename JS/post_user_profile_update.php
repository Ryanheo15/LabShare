<?php include 'session_variables_js.php'; ?>

<script>

//DOM SELECTION
let profile_card = document.querySelector(".profile-card");
let name = document.querySelector(".name");
let email_dom = document.querySelector(".email");
let institution_dom = document.querySelector(".institution");
let building_dom = document.querySelector(".building");
let department_dom = document.querySelector(".department");
let division_dom = document.querySelector(".division");

//Dynamic uploading
name.textContent = first_name + " " + last_name;
email_dom.textContent = email;

institution_dom.textContent = institution;
building_dom.textContent = building;
department_dom.textContent = department;
division_dom.textContent = division;

</script>
