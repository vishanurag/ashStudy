
let laserLoading = document.getElementById("ASH");
let home = document.getElementById("homePage");
let about = document.getElementById("aboutPage");
let projects = document.getElementById("projectsPage");
let oldASHPage = document.getElementById("oldASH");
let ASHbody = document.getElementById("bodyBackgroundMain");
let currentPage = 1;

function pageChange(pageValue) {


    if (pageValue != currentPage ) {
        laserLoading.style.animation = "laserLoadingAnimate";


        if (pageValue == 1) {

            home.classList.remove("displayNone");
            about.classList.add("displayNone");
            projects.classList.add("displayNone");

            currentPage = 1;
        } else if (pageValue == 2) {

            about.classList.remove("displayNone");
            home.classList.add("displayNone");
            projects.classList.add("displayNone");

            currentPage = 2;
        } else if (pageValue == 3) {

            projects.classList.remove("displayNone");
            home.classList.add("displayNone");
            about.classList.add("displayNone");

            currentPage = 3;
        } else {

            ASHbody.classList.add("displayNone");
            oldASHPage.classList.remove("displayNone");
        }
        toggleNavBar(0);
    }
}