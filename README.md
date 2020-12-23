###Step
1. Connecting App to Database (.env)
2. Install simple-QRcode Package (composer require simplesoftwareio/simple-qrcode)
3. Configure Simple QR Code Package (config/app.php ) 
   - providers => SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class
   - aliases =>  'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class
4. Add Routes
    - ex. Route::get('qrcode', function () {
                return QrCode::size(300)->generate('A basic example of QR code!');
            });
    - basic => QrCode::size(500)->generate('A basic example of QR code!')
    - with color =>  QrCode::size(500)->backgroundColor(255,55,0)->generate('A simple example of QR code')
    - phone number => QrCode::phoneNumber('111-222-6666')
    - email  => QrCode::size(500)->email('info@tutsmake.com', 'Welcome to Tutsmake!', 'This is !.')
    - text message => QrCode::SMS('111-222-6666', 'Body of the message')
