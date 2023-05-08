let mobileNav = document.getElementById("navigationBarForSmallScreen");
let desktopNav = document.getElementsByClassName("navigationBarForLargeScreen");
let width = document.documentElement.clientWidth;

function navForDevice() {

    if (width < 900) {

        for(let i = 0; i < desktopNav.length; i++){
            desktopNav[i].classList.add("displayNone");
        }

        mobileNav.classList.remove("displayNone");

    } else {

        for(let i = 0; i < desktopNav.length; i++){
            desktopNav[i].classList.remove("displayNone");
        }

        mobileNav.classList.add("displayNone");

    }

    setTimeout(() => {

        width = document.documentElement.clientWidth;
        console.log(width);
        navForDevice();

    }, 500);

}

navForDevice();






// -------------------------NAVIGATION BAR TOGGLE SYSTEM---------------------------


    let nav = document.getElementById("sideNavBarParent");

    function toggleNavBar(navValue) {

        if(navValue) {
            nav.classList.add("NavBarActive");
        } else {
            nav.classList.remove("NavBarActive");
        }
    }


// -------------------------NAVIGATION BAR TOGGLE SYSTEM---------------------------