<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Berkas</title>
</head>
<body>
    <div>
        Kepada Pelanggan Terhormat, <b>{{ $submission->customer->name }}.</b><br>
        Kami ingin memberitahu Anda tentang perkembangan terbaru terkait layanan jasa <b>{{ $submission->customer->service->name }} </b> 
        pada PT. Hukum Digital yang Anda gunakan, sebagai berikut : <br><br>
        Kode Registration : <b>{{ $submission->customer->registration }}</b><br>
        Nama Berkas : <b>{{ $submission->file->name }}</b><br>
        Status Berkas: <b>{{ $submission->status }} </b> <br><br>
       
        Untuk informasi lainnya, <br>
        Silahkan Check Detail dan Progress layanan anda <a href="http://hudit.bladerlaiga.my.id/check">Disini.</a><br>
        Masukkan kode Registration: <b>{{ $submission->customer->registration }}</b> <br>
        Jangan teruskan atau berikan kode ini kepada siapa pun.<br><br>

        Salam hangat, <br>
        [PT. Hukum Digital Indonesia]
    </div>
</body>
</html>
