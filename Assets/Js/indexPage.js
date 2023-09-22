let parentDown = document.querySelector('#parentDown');
let summery = document.getElementById('summery');
// parent down script
parentDown.addEventListener("click", ()=>{
    summery.click();
    summery.classList.toggle('downcolorchange');
    parentDown.classList.toggle('rotatedown');
});
// summery down script
summery.addEventListener("click",()=>{
    if(summery.click() != true){
        parentDown.click();
        parentDown.classList.toggle('rotatedown');
        summery.classList.toggle('downcolorchange');
    }

});
// 2nd frequently asked questions
let parentDownTwo = document.querySelector('#parentDownTwo');
let summeryTwo = document.getElementById('summeryTwo');
// parent down script
parentDownTwo.addEventListener("click", ()=>{
    summeryTwo.click();
    summeryTwo.classList.toggle('downcolorchange');
    parentDownTwo.classList.toggle('rotatedown');
});
// summery down script
summeryTwo.addEventListener("click",()=>{
    if(summeryTwo.click() != true){
        parentDownTwo.click();
        parentDownTwo.classList.toggle('rotatedown');
        summeryTwo.classList.toggle('downcolorchange');
    }
});

// 3rd frequently asked questions
let parentDownThree = document.querySelector('#parentDownThree');
let summeryThree = document.getElementById('summeryThree');
// parent down script
parentDownThree.addEventListener("click", ()=>{
    summeryThree.click();
    summeryThree.classList.toggle('downcolorchange');
    parentDownThree.classList.toggle('rotatedown');
});
// summery down script
summeryThree.addEventListener("click",()=>{
    if(summeryThree.click() != true){
        parentDownThree.click();
        parentDownThree.classList.toggle('rotatedown');
        summeryThree.classList.toggle('downcolorchange');
    }
});

// 4rd frequently asked questions
let parentDownFour = document.querySelector('#parentDownFour');
let summeryFour = document.getElementById('summeryFour');
// parent down script
parentDownFour.addEventListener("click", ()=>{
    summeryFour.click();
    summeryFour.classList.toggle('downcolorchange');
    parentDownFour.classList.toggle('rotatedown');
});
// summery down script
summeryFour.addEventListener("click",()=>{
    if(summeryFour.click() != true){
        parentDownFour.click();
        parentDownFour.classList.toggle('rotatedown');
        summeryFour.classList.toggle('downcolorchange');
    }
});

// 5rd frequently asked questions
let parentDownFive = document.querySelector('#parentDownFive');
let summeryFive = document.getElementById('summeryFive');
// parent down script
parentDownFive.addEventListener("click", ()=>{
    summeryFive.click();
    summeryFive.classList.toggle('downcolorchange');
    parentDownFive.classList.toggle('rotatedown');
});
// summery down script
summeryFive.addEventListener("click",()=>{
    if(summeryFive.click() != true){
        parentDownFive.click();
        parentDownFive.classList.toggle('rotatedown');
        summeryFive.classList.toggle('downcolorchange');
    }
});

let scrollToTop = document.querySelector("#scrollToTop");

document.addEventListener("scroll",()=>{
    let yScroll = scrollY;
    if(yScroll > 150){
        scrollToTop.classList.add('showscroll');
    }
    else{
        scrollToTop.classList.remove('showscroll');
    }
});

// hamburger

let hamBurger = document.getElementById('hamBurger');
let hamBurgerOrg = document.querySelector('.hamburger');
let closehamburger = document.querySelector('.closehamburger');
hamBurger.addEventListener("click",()=>{
    hamBurgerOrg.classList.toggle('hamburgercome');
});
closehamburger.addEventListener("click",()=>{
    hamBurgerOrg.classList.toggle('hamburgercome');
});

// scroll js starts
let scrollHome = document.querySelector('.scrollhome');
let scrollAbout = document.querySelector('.scrollabout');
let scrollServices = document.querySelector('.scrollservices');
let scrollTeam = document.querySelector('.scrollteam');
let scrollFaqs = document.querySelector('.scrollfaqs');
let scrollContact = document.querySelector('.scrollcontact');

document.addEventListener("scroll" , ()=>{
    if(scrollY < 800 ){
        scrollHome.classList.add('scrollfocus');
    }
    else{
        scrollHome.classList.remove('scrollfocus');
    }
    if(scrollY < 2460 && scrollY > 800){
        scrollAbout.classList.add('scrollfocus');
    }
    else{
        scrollAbout.classList.remove('scrollfocus');
    }
    if(scrollY < 4000 && scrollY > 2467){
        scrollServices.classList.add('scrollfocus');
    }
    else{
        scrollServices.classList.remove('scrollfocus');
    }
    if(scrollY < 4618 && scrollY > 3999){
        scrollTeam.classList.add('scrollfocus');
    }
    else{
        scrollTeam.classList.remove('scrollfocus');
    }
    if(scrollY < 5200 && scrollY > 4618 ){
        scrollFaqs.classList.add('scrollfocus');
    }
    else{
        scrollFaqs.classList.remove('scrollfocus');
    }
    if(scrollY > 5219){
        scrollContact.classList.add('scrollfocus');
    }
    else{
        scrollContact.classList.remove('scrollfocus');
    }
})

scrollHome.addEventListener('click',()=>{
    window.scrollTo(0,0);
});
scrollAbout.addEventListener("click",()=>{
    window.scrollTo(0,810);
});
scrollServices.addEventListener("click",()=>{
    window.scrollTo(0,2468);
});
scrollTeam.addEventListener("click",()=>{
    window.scrollTo(0,4000);
});
scrollFaqs.addEventListener("click",()=>{
    window.scrollTo(0,4620);
});
scrollContact.addEventListener("click",()=>{
    window.scrollTo(0,5220);
});
// scroll js ends

// small device scroll device javascript starts
let smallScrollHome = document.querySelector(".smallscrollhome");
let smallScrollAbout = document.querySelector(".smallscrollAbout");
let smallScrollServices = document.querySelector(".smallscrollServices");
let smallScrollTeam = document.querySelector(".smallscrollTeam");
let smallScrollFaqs = document.querySelector(".smallscrollFaqs");
let smallScrollContact = document.querySelector(".smallscrollContact");

smallScrollHome.addEventListener("click",()=>{
    hamBurger.click();
    window.scrollTo(0,0);
});
smallScrollAbout.addEventListener("click",()=>{
    hamBurger.click();
});
smallScrollServices.addEventListener("click",()=>{
    hamBurger.click();
});
smallScrollTeam.addEventListener("click",()=>{
    hamBurger.click();
});
smallScrollFaqs.addEventListener("click",()=>{
    hamBurger.click();
});
smallScrollContact.addEventListener("click",()=>{
    hamBurger.click();
});

let loginPop = document.querySelector(".loginpop");
let loginPopUp = document.querySelector(".loginpopup");

loginPop.addEventListener("click",()=>{
    loginPop.classList.toggle("loginpopul");
    loginPopUp.classList.toggle("showloginpop");
    
});
let loginPopMob = document.querySelector(".loginpopmob");
let loginPopUpMob = document.querySelector(".loginpopup");

loginPopMob.addEventListener("click",()=>{
    loginPop.click();
});