<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Verificated</title>
</head>
<body>
    <!-- <div>
        Registration: {{ $customer->registration }}
    </div>
    <div>
        You can check <a href="{{ route('web.track.check') }}">here</a>
    </div> -->

    <div>
        Kepada Pelanggan Terhormat, <b>{{ $customer->name }}.</b><br>
        Data pemesanan layanan jasa <b>{{ $customer->service->name }} </b> pada PT. Hukum Digital Anda telah berhasil diverifikasi. <br>
        Semua informasi yang Anda berikan telah kami cek dan valid. <br>
        Silahkan Check Detail dan Progress layanan anda <a href="http://hudit.bladerlaiga.my.id/check">Disini.</a><br>
        Masukkan kode Registration: <b>{{ $customer->registration }}</b> <br><br>
        
        Jika ada pertanyaan tambahan atau perubahan yang perlu Anda sampaikan, jangan ragu untuk menghubungi admin kami melalui WhatsApp 082399535262.<br>
        <br>Terima kasih atas kepercayaan Anda kepada kami. Kami berharap dapat memberikan layanan terbaik kepada Anda.<br><br>
        
        Salam hangat, <br>
        [PT. Hukum Digital Indonesia]
    </div>
    
</body>
</html>
