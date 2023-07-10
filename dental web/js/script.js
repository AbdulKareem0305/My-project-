let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
const enquiryBtn = document.getElementById("enquiry-btn");
const modal = document.getElementById("enquiry-modal");
const closeBtn = document.getElementsByClassName("close")[0];
const form = document.getElementById("enquiry-form");

enquiryBtn.addEventListener("click", function() {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

form.addEventListener("submit", function(event) {
  event.preventDefault();
  // Add code here to handle form submission
  // For example, you could use the FormData API to get the values of the form inputs
  // and send an HTTP request to a server to process the enquiry
});

