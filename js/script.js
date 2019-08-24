

// Function applies responsive navigation CSS to navigation
function responsiveNav() {
    let navChange = document.getElementById("menu");
    console.log("catch");

    if (navChange.className === "respMenu") {
        navChange.classList.add('responsive');
    }
    else {
        navChange.classList.remove('responsive');
    }

    // if (navChange.className === "respMenu") {
    //     navChange.classList += 'responsive';
    // }
    // else {
    //     navChange.classList = 'responsive';
    // }
}


