//DOM SELECTIONS
let request_card = document.querySelector(".requests");
let card_body = document.querySelector(".card-body");
let request_modal = document.querySelector("#requestModal");
let request_form = document.querySelector(".request-form");

//FUNCTIONS
let retrieve_inputs = function(e){
  e.preventDefault();
  console.log(e.target.value);
}

//EVENT LISTENERS
request_form.addEventListener("change", retrieve_inputs);
