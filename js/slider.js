$(document).ready(function () {
    changePhoto();
});

var sliders = ['#slide1','#slide2','#slide3','#slide4'];
var count = 0;

function changePhoto() {
    $(sliders[count]).hide('blind',1000);
    count++;
    if(count===4){
        count=0;
    }
    setTimeout(function () {
        $(sliders[count]).show('blind',1000);
    },1000);
    setTimeout(function () {
        changePhoto();
    },7000);
}