document.addEventListener('DOMContentLoaded', function() {
    var check = document.getElementById("check");
    var check2 = document.getElementById("check2");
    var check3 = document.getElementById("check3");
    var card = document.querySelector(".card");
    var card2 = document.querySelector(".card2");
    var card3 = document.querySelector(".card3");
    var mask =document.querySelector(".mask");

    check.addEventListener("change", function() {
        if (check.checked) {
            card.style.visibility = "visible";
            // Uncheck check2 and check3
            check2.checked = false;
            check3.checked = false;
            card2.style.visibility = "hidden";
            card3.style.visibility = "hidden";
            mask.style.display="none";
        } else {
            card.style.visibility = "hidden";
            mask.style.display="block";
        }
    });

    check2.addEventListener("change", function() {
        if (check2.checked) {
            card2.style.visibility = "visible";
            // Uncheck check and check3
            check.checked = false;
            check3.checked = false;
            card.style.visibility = "hidden";
            card3.style.visibility = "hidden";
            mask.style.display="none";
        } else {
            card2.style.visibility = "hidden";
            mask.style.display="block";
        }
    });

    check3.addEventListener("change", function() {
        if (check3.checked) {
            card3.style.visibility = "visible";
            // Uncheck check and check2
            check.checked = false;
            check2.checked = false;
            card.style.visibility = "hidden";
            card2.style.visibility = "hidden";
            mask.style.display="none";
        } else {
            card3.style.visibility = "hidden";
            mask.style.display="block";
        }
    });
});
