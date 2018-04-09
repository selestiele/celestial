function menuToggle() {
    var menuButton = document.getElementById('menuToggle');
    if (menuButton.className == "toggled-off") {
            menuButton.className = "toggled-on";
            document.querySelector('.main-nav-home').display = "block";
    } else {
        menuButton.className = "toggled-off";
        document.querySelector('.main-nav-home').display = "none";
    }    
    
}

