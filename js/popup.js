let slideCount = 0;

function changeSlide(n) {
    document.querySelector('.img' + ((n+1) % 5 + 1)).style.zIndex = 5;
    document.querySelector('.img' + ((n+2) % 5 + 1)).style.zIndex = 4;
    document.querySelector('.img' + ((n+3) % 5 + 1)).style.zIndex = 3;
    document.querySelector('.img' + ((n+4) % 5 + 1)).style.zIndex = 2;
    document.querySelector('.img' + ((n+5) % 5 + 1)).style.zIndex = 1;

    slideCount %= 5;
    slideCount++;
}

setInterval(() => {
    changeSlide(slideCount);    
}, 5000);


document.querySelector("#login-btn").addEventListener('click', () => {
    document.querySelector('.login').style.display = "block";
    document.querySelector('.register').style.display = "none";
    document.querySelector('body').style.filter = "blur(10)";
});

document.querySelector(".login-close").addEventListener('click', () => {
    document.querySelector('.login').style.display = "none";
});

document.querySelector("#register-btn").addEventListener('click', () => {
    document.querySelector('.register').style.display = "block";
    document.querySelector('.login').style.display = "none";
});

document.querySelector(".reg-close").addEventListener('click', () => {
    document.querySelector('.register').style.display = "none";
});
