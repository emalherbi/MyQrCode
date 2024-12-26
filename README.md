# MyQrCode

My QrCode

# Install

```
composer require emalherbi/myqrcode
```

# Usage

```php
require_once 'vendor/autoload.php';

try {
    $myQrCode = new MyQrCode\MyQrCode();

    $qrCode = 'Juca Bala';
    $qrCodeLabel = 'Test';
    $qrCodeLogoPath = TEST.DS.'logo.png';

    $result = $myQrCode->base64($qrCode, $qrCodeLabel, $qrCodeLogoPath);

    echo $result;
} catch (Exception $e) {
    exit(print_r($e->getMessage()));
}
```

# Result

```
data:image/png;base64,iVBORw0KGgoAAAA...
```

# Imagem

![QrCode](./test/qrcode.png)
