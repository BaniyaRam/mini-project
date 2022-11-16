let BMbtn = document.querySelector('.show-bookings');
let BMbox = document.querySelector('.bookings-made');

let BMboxshow = false;

BMbtn.onclick = ()=> {
    if (!BMboxshow) {
        BMbox.style.visibility = "visible";
        BMboxshow = true;
    } else {
        BMbox.style.visibility = "hidden";
        BMboxshow = false;
    }
};