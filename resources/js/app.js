import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialize AOS
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 50,
    });

    // Red de seguridad para AOS: cuando la página salta de golpe (tecla Fin/AvPág,
    // barra de scroll o enlace interno) AOS puede no procesar los elementos que quedan
    // en pantalla y las secciones se ven en blanco hasta mover la rueda del mouse.
    // IntersectionObserver detecta cualquier elemento visible sin depender del evento
    // de scroll y le aplica la animación.
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aos-animate');
                    observer.unobserve(entry.target);
                }
            });
        });
        document.querySelectorAll('[data-aos]').forEach((el) => observer.observe(el));
    }
});
