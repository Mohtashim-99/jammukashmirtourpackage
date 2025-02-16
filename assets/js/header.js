let logoA= document.querySelector('.logo-a');
window.addEventListener('scroll', function () { 
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 45) {
        navbar.classList.add('sticky-top', 'shadow-sm');
    } else {
        navbar.classList.remove('sticky-top', 'shadow-sm');
    }

    if(screen.width>="991"){
        if(navbar.classList.contains('sticky-top')){
            logoA.innerHTML='<img src="/assets/img/jammu-kashmir-tour-package-logo.png" alt="Logo">';
        }
        else{
            logoA.innerHTML='<img src="/assets/img/jammu-kashmir-tour-package-logo-light.png" alt="Logo">';
        }
    }
   else{
    logoA.innerHTML='<img src="/assets/img/jammu-kashmir-tour-package-logo.png" alt="Logo">';
    
    }
    
});
if(screen.width<="991"){
    logoA.innerHTML='<img src="/assets/img/jammu-kashmir-tour-package-logo.png" alt="Logo">';
}



