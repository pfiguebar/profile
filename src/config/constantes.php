<?php

// Determinar el protocolo basado en la configuración del servidor
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
// Obtener el host actual
$host = $_SERVER['HTTP_HOST'];
// Definir URL basada en el entorno
define('URL', $protocol . '://' . $host . '/');

define('URL_ES', URL.'?lang=es');
define('URL_EN', URL.'?lang=en');

define ('ASSETS', URL.'assets/');
define ('IMAGES', ASSETS.'img/');
define ('CSS', ASSETS.'css/');
define ('JS', ASSETS.'js/');
define ('FONT', ASSETS.'font/');

define ('EMAIL', 'info@infodto.es');
define ('PHONE', '+34657408078');
define ('WHATSAPP', '+34657408078');

define ('LOG_FILE', __DIR__.'/app.log');

require_once __DIR__ . '/../vendor/autoload.php';

// Configurar el logger de Monolog
$logger = new Monolog\Logger('app');
$logger->pushHandler(new Monolog\Handler\StreamHandler(LOG_FILE, Monolog\Logger::INFO));

$detect = new Detection\MobileDetect();
$detect->setUserAgent($_SERVER['HTTP_USER_AGENT']);

// Verificar si es móvil
$mobile = $detect->isMobile() ? 'Sí' : 'No';

// Verificar si es tablet
$tablet = $detect->isTablet() ? 'Sí' : 'No';

// Si no es móvil ni tablet, asumimos que es desktop
$desktop = 'Sí';