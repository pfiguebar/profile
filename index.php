<?php 
    include __DIR__ . '/src/config/constantes.php'; 
    include __DIR__ . '/src/lang/functions.php';
    $lang = require __DIR__ . '/src/lang/' . get_current_language() . '.php';
    
    switch (get_current_language()) {
        case 'es':
            $experiences = require __DIR__ . '/src/lang/es_exp.php'; 
            $portfolio = require __DIR__ . '/src/lang/es_por.php';
            $contacto = require __DIR__ . '/src/lang/es_con.php';
            break;
        case 'en':
            $experiences = require __DIR__ . '/src/lang/en_exp.php'; 
            $portfolio = require __DIR__ . '/src/lang/en_por.php';
            $contacto = require __DIR__ . '/src/lang/en_con.php';
            break;
    }

?>

<!DOCTYPE html>
<html lang="<?= get_current_language() ?>">
<?php include __DIR__ . '/src/components/head.php'; ?>

<body>
    
    <?php include __DIR__ . '/src/components/header.php'; ?>

    <main>   
        <?php include __DIR__ . '/src/inc/sections/home.php'; ?>
        <?php include __DIR__ . '/src/inc/sections/experiencie.php'; ?>
        <?php include __DIR__ . '/src/inc/sections/portfolio.php'; ?>       
        <?php include __DIR__ . '/src/inc/sections/skill.php'; ?>      
        <?php include __DIR__ . '/src/inc/sections/lang.php'; ?>        
    </main>

    <footer>
        <?php include __DIR__ . '/src/components/lang.php'; ?>
        <?php include __DIR__ . '/src/components/contact.php'; ?>
    </footer>
    
</body>
</html>