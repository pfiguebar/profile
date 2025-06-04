// Código para manejar el modo oscuro
document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.querySelector('.dark-mode-toggle');
    
    if (!darkModeToggle) {
        console.error('Botón de modo oscuro no encontrado');
        return;
    }

    // Función para cambiar el modo
    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', newTheme);
        updateToggleIcon(newTheme);
        saveThemePreference(newTheme);
    }

    // Función para actualizar los iconos
    function updateToggleIcon(theme) {
        // Mostrar el icono apropiado
        darkModeToggle.querySelector('.sun-icon').style.display = theme === 'light' ? 'block' : 'none';
        darkModeToggle.querySelector('.moon-icon').style.display = theme === 'dark' ? 'block' : 'none';
    }

    // Función para guardar la preferencia
    function saveThemePreference(theme) {
        localStorage.setItem('theme', theme);
    }

    // Función para cargar la preferencia guardada
    function loadThemePreference() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
            updateToggleIcon(savedTheme);
        } else {
            // Usar el tema del sistema por defecto
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const theme = prefersDark ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', theme);
            updateToggleIcon(theme);
        }
    }

    // Añadir evento click al botón
    darkModeToggle.addEventListener('click', toggleTheme);

    // Inicializar el tema
    loadThemePreference();
});