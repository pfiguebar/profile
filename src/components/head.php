<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_translation('title') ?></title>
    <meta name="description" content="<?= get_translation('description') ?>">
    <meta name="keywords" content="<?= get_translation('keywords') ?>">
    <meta name="robots" content="index,follow">
    <meta name="author" content="<?= get_translation('author') ?>">
    <link rel="canonical" href="<?= get_current_language() == 'es' ? URL_ES : URL_EN; ?>" />
    <meta name="theme-color" content="#ffffff">       
    <link rel="icon" href="<?= IMAGES; ?>logo/favicon.svg" type="image/svg+xml">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS; ?>root.css">
    <link rel="stylesheet" href="<?= CSS; ?>nav.css">
    <link rel="stylesheet" href="<?= CSS; ?>home.css"> 
    <link rel="stylesheet" href="<?= CSS; ?>experience.css"> 
    <link rel="stylesheet" href="<?= CSS; ?>portfolio.css">
    <link rel="stylesheet" href="<?= CSS; ?>skill.css">
    <link rel="stylesheet" href="<?= CSS; ?>contact.css">
    <script src="<?= JS; ?>dark.js"></script>
    <script src="<?= JS; ?>nav.js"></script>
    <script src="<?= JS; ?>terminal.js"></script>
    <script>
        window.portfolioData = <?= json_encode($portfolio); ?>;
        window.lang = <?= json_encode($lang); ?>;
    </script>
    <?php if ($detect->isMobile() || $detect->isTablet()) { ?>  
    <!-- Mobile -->
    <?php } else { ?>
    <!-- Desktop -->
    <?php } ?>  
</head>
