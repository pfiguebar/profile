<section id="home">

<ul>
    <!-- terminal -->
    <li>        
        <div class="text-container">
            <div class="text">
                <p id="tt">pefiguer@infodto:~$ &nbsp;<div class="type-indicator">&nbsp;▌</div></p>
            </div>
        </div>
    </li>

    <!-- enlaces redes sociales -->
    <li>
        <ul>
            <li>
                <img src="<?= IMAGES; ?>pefiguer.webp" alt="pefiguer" title="pefiguer">   
            </li>
            <li>
                <a href="https://www.linkedin.com/in/pedro-figueroa-barcel%C3%B3-93609a2b4/" 
                target="_blank" 
                class="icono"
                aria-label="LinkedIn profile"
                title="LinkedIn profile"> 
                    <img src="<?= IMAGES; ?>/skills/linkedin.svg" alt="linkedin" title="linkedin" class="w_h_icon_small">
                    <span>LinkedIn</span> 
                </a>
            </li>
            <li>
                <a href="https://github.com/pfiguebar" 
                target="_blank"
                aria-label="GitHub profile"
                title="GitHub profile"> 
                    <img src="<?= IMAGES; ?>/skills/github.svg" alt="github" title="github" class="w_h_icon_small icono">
                    <span>GitHub</span> 
                </a>
            </li>            
        </ul>
    </li>            
    <li> 
        <span><?= get_translation('description_intro'); ?></span>
    </li>

   

</ul>  
   
<!-- Terminal Modal -->
<div id="terminal-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-body">
            <p id="modal-message"></p>
        </div>
    </div>
</div>
</section>