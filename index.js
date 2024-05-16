let currentSlide = 0;

function showSlide(index) {
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

if (index >= totalSlides) {
    currentSlide = 0;
} else if (index < 0) {
    currentSlide = totalSlides - 1;
} else {
    currentSlide = index;
}

const newTransform = -currentSlide * 100 + '%';
document.querySelector('.slides').style.transform = `translateX(${newTransform})`;
}

function changeSlide(direction) {
showSlide(currentSlide + direction);
}

showSlide(currentSlide);

//calendar

function checkDate() {

var checkinDateValue = document.getElementById("ckin").value;
var checkoutDateValue = document.getElementById("ckout").value;
var error = document.getElementById("error");


var checkinDate = new Date(checkinDateValue);
var checkoutDate = new Date(checkoutDateValue);
var today = new Date();

if (!checkinDateValue || !checkoutDateValue) {
    error.innerHTML = "plase fill out date";
    return;}

if (checkinDate < today) {

    error.innerHTML = "Please select a check-in date starting from today or in the future.";
    return;
}

if (checkoutDate <= checkinDate) {

    error.innerHTML = "Check-out date must be after the check-in date.";
    return; 
}

    //booking();
    error.innerHTML = "Success";
    if (isNaN(checkinDate) || isNaN(checkoutDate)) {
        error.innerText = 'Please enter valid dates.';
        return;
    }

    var timeDifference = checkoutDate - checkinDate;
    var daysDifference = timeDifference / (1000 * 60 * 60 * 24);
    var result = daysDifference * 300000;
    document.getElementById('total').innerHTML = result;

}

