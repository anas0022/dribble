document.addEventListener('DOMContentLoaded', function() {
    
    var login = document.getElementById("login");
    var register = document.getElementById("register");
    var home = document.querySelector(".home");
    var signup_login = document.querySelector(".singup-login");
    var login_page = document.querySelector(".login");
    var register_page = document.querySelector(".singnup");

    login.onclick = function() {
        if (window.innerWidth <= 1050 && window.innerHeight >= 1000) {
            signup_login.style.width = "100%";
            signup_login.style.position = " absolute";
            login_page.style.position = "relative";
            login_page.style.display = "block";
        } else if (window.innerWidth <= 950) {
            signup_login.style.position = " absolute";
            signup_login.style.width = "100%";
            login_page.style.position = "relative";
            login_page.style.display = "block";
        } else if (window.innerWidth >= 1000) {
            login_page.style.display = "block";
            signup_login.style.width = "60%";
            home.style.width = "40%";
            signup_login.style.position = "relative";
            login.style.display = "none";
            register.style.display = "none";
        }
    };

    register.onclick = function() {
        if (window.innerWidth <= 1050 && window.innerHeight >= 1000) {
            signup_login.style.width = "100%";
            signup_login.style.position = " absolute";
            register_page.style.display = "block";
            register_page.style.position = "relative";
        } else if (window.innerWidth <= 950) {
            signup_login.style.position = " absolute";
            signup_login.style.width = "100%";
            register_page.style.position = "relative";
            register_page.style.display = "block";
        } else if (window.innerWidth >= 1000) {
            register_page.style.display = "block";
            signup_login.style.width = "60%";
            home.style.width = "40%";
            signup_login.style.position = "relative";
            register.style.display = "none";
            login.style.display = "none";
        }
    };
    
});
function signup() {
   
}