<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Pelanggan</title>
</head>

<body>
    <div>
        Kepada Pelanggan Terhormat, <b>{{ $customer->name }}.</b><br>
        Mohon maaf, Permohonan permintaan untuk :  <br> 
        Layanan jasa : <b>{{ $customer->service->name }} </b> <br>
        Jenis Layanan : <b>{{ $customer->service->type->name }}</b> <br><br>
        
        Yang anda ajukan pada PT. Hukum Digital <h3>DITOLAK</h3>
        Setelah dilakukan pengecekan ada beberapa informasi  yang  tidak  valid. Untuk informasi selanjutnya, silahkan hubungi admin kami melalui WhatsApp <a href="https://api.whatsapp.com/send?phone=082399535262">Admin</a>  <br><br>
        
        Salam hangat, <br>
        [PT. Hukum Digital Indonesia]
        
    </div>
</body>

</html>
