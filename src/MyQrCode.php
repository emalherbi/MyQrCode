<?php

/*
 * Eduardo Malherbi Martins
 * Copyright @emalherbi
 */

namespace MyQrCode;

use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Exception;

class MyQrCode
{
    public function __construct()
    {
    }

    public function base64($qrCode, $qrCodeLabel = '', $qrCodeLogoPath = '', $qrCodeLogoWidth = 50, $qrCodeLogoHeight = 50, $qrCodeLogoPunchoutBg = false)
    {
        if (empty($qrCode)) {
            throw new Exception('Oops. QrCode not provided.');
        }

        $writer = new PngWriter();

        $qr = new QrCode($qrCode);

        $label = null;
        if (!empty($qrCodeLabel)) {
            $label = new Label($qrCodeLabel);
        }

        $logo = null;
        if (!empty($qrCodeLogoPath)) {
            $logo = new Logo($qrCodeLogoPath, $qrCodeLogoWidth, $qrCodeLogoHeight, $qrCodeLogoPunchoutBg);
        }

        $result = $writer->write($qr, $logo, $label);

        return $result->getDataUri();
    }
}
