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
});
