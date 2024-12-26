<?php

/*
 * Eduardo Malherbi Martins
 * Copyright @emalherbi
 */

defined('PS') || define('PS', \PATH_SEPARATOR);
defined('DS') || define('DS', \DIRECTORY_SEPARATOR);
defined('ROOT') || define('ROOT', realpath(dirname(__FILE__, 2)));
defined('SRC') || define('SRC', ROOT.DS.'src');
defined('TEST') || define('TEST', ROOT.DS.'test');

require_once SRC.DS.'MyQrCode.php';

try {
    $myQrCode = new MyQrCode\MyQrCode();

    $qrCode = 'Test';
    $qrCodeLabel = 'Test';
    $qrCodeLogoPath = TEST.DS.'logo.png';

    $result = $myQrCode->base64($qrCode, $qrCodeLabel, $qrCodeLogoPath);

    echo $result;
} catch (Exception $e) {
    exit(print_r($e->getMessage()));
}
