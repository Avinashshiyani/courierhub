
let profilePop = document.getElementById("profile");
let logoutPopUp = document.getElementById("logoutpopup");
profilePop.addEventListener("click",()=>{
    logoutPopUp.classList.toggle("activelogout");
});

let profileString = document.getElementById("profilestring");
profileString.addEventListener("click",()=>{
    logoutPopUp.classList.toggle("activelogout");
});

let hamburger = document.querySelector(".hamburger");
let hamburgerOrg = document.querySelector(".hamburgerorg");
hamburger.addEventListener("click",()=>{
    hamburgerOrg.classList.toggle("hamburgerout");
});

