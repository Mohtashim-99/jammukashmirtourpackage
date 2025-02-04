window.addEventListener('scroll', function () {
    var logoA= document.querySelector('.logo-a');
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 45) {
        navbar.classList.add('sticky-top', 'shadow-sm');
    } else {
        navbar.classList.remove('sticky-top', 'shadow-sm');
    }

    if(navbar.classList.contains('sticky-top')){
        logoA.innerHTML='<img src="/assets/img/jammu-kashmir-tour-package-logo.png" alt="Logo">';
    }
    else{
        logoA.innerHTML='<img src="/assets/img/jammu-kashmir-tour-package-logo-light.png" alt="Logo">';

    }
});

