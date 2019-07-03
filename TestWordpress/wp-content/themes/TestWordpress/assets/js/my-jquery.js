//Esta función se 

function init() {
    $(function() {
        $(".dial").knob();
        first();

    });

}
init();

function knobfunction(value1) {
    $('.dial')
        .val(value1)
        .trigger('change');
}

function first() {

    document.getElementById("cepillo").src = tplurl + "/assets/img/cepillo-normal.png";
    animateImage();
    document.getElementById("btn-2").style = "opacity: 0.5";
    document.getElementById("btn-1").style = "opacity: 1";
    knobfunction(50);
}

function Second() {
    document.getElementById("cepillo").src = tplurl + "/assets/img/cepillo-twister.png";
    animateImage();
    document.getElementById("btn-1").style = "opacity: 0.5";
    document.getElementById("btn-2").style = "opacity: 1";
    knobfunction(65);
}

function animateImage() {

    const element = document.querySelector("img.imagen-cepillo");
    element.classList.add('animated', 'bounceIn');

    function handleAnimationEnd() {
        element.classList.remove('animated', 'bounceIn')
        element.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }
    element.addEventListener('animationend', handleAnimationEnd)
}