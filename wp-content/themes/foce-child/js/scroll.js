// Déclenchement du fadeInUp des titres au scroll 
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, { threshold: 0.5 }); 

    document.querySelectorAll('.fade-in-title').forEach(title => {
        observer.observe(title);
    });
});


//Parallax du logo au scroll 
window.addEventListener('scroll', function() {
    const parallaxContainer = document.querySelector('.logoContainer');
    const scrollPosition = window.scrollY;

    // Vitesse de défilement au scroll
    let parallaxValue = scrollPosition * 0.25;

    // Limite de la valeur pour le dépassement banner
    const maxParallaxValue = 165;
    parallaxValue = Math.min(parallaxValue, maxParallaxValue);

    // transformation css
    parallaxContainer.style.transform = 'translate(-50%, -50%) translateY(' + parallaxValue + 'px)';
});