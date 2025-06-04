<!-- Botón de modo oscuro -->
<button class="dark-mode-toggle" aria-label="Cambiar modo de visualización">
    <svg class="sun-icon" viewBox="0 0 24 24" width="24" height="24">
        <circle cx="12" cy="12" r="4" fill="currentColor"/>
        <circle cx="12" cy="2" r="1" fill="currentColor"/>
        <circle cx="2" cy="12" r="1" fill="currentColor"/>
        <circle cx="22" cy="12" r="1" fill="currentColor"/>
        <circle cx="12" cy="22" r="1" fill="currentColor"/>
        <circle cx="7" cy="7" r="1" fill="currentColor"/>
        <circle cx="17" cy="7" r="1" fill="currentColor"/>
        <circle cx="7" cy="17" r="1" fill="currentColor"/>
        <circle cx="17" cy="17" r="1" fill="currentColor"/>
    </svg>
    <svg class="moon-icon" viewBox="0 0 24 24" width="24" height="24">
        <path d="M12 2C15.3137 2 18 4.68629 18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8C6 4.68629 8.68629 2 12 2Z" fill="currentColor"/>
        <path d="M12 22C15.3137 22 18 19.3137 18 16C18 12.6863 15.3137 10 12 10C8.68629 10 6 12.6863 6 16C6 19.3137 8.68629 22 12 22Z" fill="currentColor"/>
    </svg>
</button>

<!-- selector idiomas -->
<a href="<?= get_current_language() == 'es' ? URL_EN : URL_ES; ?>" 
    class="lang"
    aria-label="Change language"
    title="Change language">
    <?= get_current_language() == 'es' ? 'EN' : 'ES'; ?>
</a>

<header class="header">
    <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>     
   
    <nav class="nav">
        <ul class="nav-links">
            <li>
                <a href="#home" 
                class="nav-link" 
                aria-label="Home section" 
                title="Go to home">
                    <?= get_translation('home') ?>
                </a>
            </li>
            <li>
                <a href="#experience" 
                class="nav-link" 
                aria-label="Experience section" 
                title="View my experience">
                    <?= get_translation('experience') ?>
                </a>
            </li>
            <li>
                <a href="#portfolio" 
                class="nav-link" 
                aria-label="Portfolio section" 
                title="View my portfolio">
                    <?= get_translation('portfolio') ?>
                </a>
            </li>
            <li>
                <a href="#skills" 
                class="nav-link" 
                aria-label="Skills section" 
                title="View my skills">
                    <?= get_translation('skills') ?>
                </a>
            </li>
        </ul>
    </nav>
</header>