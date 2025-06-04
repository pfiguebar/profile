document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const nav = document.querySelector('.nav');
    
    menuToggle?.addEventListener('click', function() {
        nav.classList.toggle('active');
        this.classList.toggle('active');
    });

    // Agregar evento click a los enlaces
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remover la clase active de todos los enlaces
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            // Agregar la clase active al enlace clickeado
            this.classList.add('active');
            
            // Si estamos en móvil, cerrar el menú
            if (window.innerWidth <= 768) {
                nav.classList.remove('active');
                menuToggle?.classList.remove('active');
            }
            
            // Obtener el ID de la sección a la que vamos
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                // Hacer scroll suave
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Función para manejar el scroll y cambiar el link activo
    function handleScroll() {
        // Obtener todas las secciones
        const sections = Array.from(document.querySelectorAll('section[id]'));
        
        if (sections.length === 0) return;

        // Obtener la posición actual del scroll
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        // Encontrar la sección actual
        let currentSection = sections[0];
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100; // Offset para activar un poco antes
            if (scrollPosition >= sectionTop) {
                currentSection = section;
            }
        });

        // Actualizar el link activo
        const currentSectionId = currentSection.getAttribute('id');
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + currentSectionId) {
                link.classList.add('active');
            }
        });
    }
    
    // Actualizar el link activo al cargar la página
    handleScroll();

    // Usar Intersection Observer para detectar secciones visibles
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                handleScroll();
            }
        });
    }, {
        threshold: 0.2
    });

    // Observar todas las secciones
    document.querySelectorAll('section[id]').forEach(section => {
        observer.observe(section);
    });

    // Actualizar también con el evento scroll tradicional
    window.addEventListener('scroll', () => {
        handleScroll();
    }, { passive: true });
});