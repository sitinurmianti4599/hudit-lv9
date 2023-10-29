<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelayanan Selesai</title>
</head>
<body>
    <div>
        Kepada Pelanggan Terhormat, <b>{{ $customer->name }}.</b><br>
        Kami senang memberitahu Anda bahwa layanan jasa <b>{{ $customer->service->name }} </b>
        pada PT. Hukum Digital yang Anda gunakan telah <b>SELESAI</b>, silahkan datang ke kantor untuk proses penyerahan dan peneyelesaian layanan.
        Tim kami telah bekerja keras untuk memastikan bahwa Anda mendapatkan hasil terbaik dan kami yakin Anda akan puas dengan hasilnya.<br>
        Berikut adalah beberapa detail terkait selesainya layanan Anda : <br><br>

        Nama Pelanggan : <b>{{ $customer->name }} </b><br>
        Nama Layanan : <b>{{ $customer->service->name }}</b> <br>
        Kode Registration : <b>{{ $customer->registration }}</b><br>
        Jenis Layanan : <b>{{ $customer->service->type->name }}</b> <br>
        Tgl Order : <b>{{$customer->order_date}}</b> <br>
        Tgl Selesai : <b>{{$customer->done_date}}</b> <br><br>

        Kami ingin mengucapkan terima kasih atas kepercayaan Anda kepada kami. Kami berharap Anda merasa puas dengan layanan kami. <br><br>

        Silahkan Check Detail dan Progress layanan anda <a href="http://hudit.bladerlaiga.my.id/check">Disini.</a><br>
        Masukkan kode Registration: <b>{{ $customer->registration }}</b> <br><br>
        Untuk informasi lengkapnya, Silahkan Kunjungi Kantor PT. Hukum Digital Indonesia.<br><br>
        Salam hangat, <br>
        [PT. Hukum Digital Indonesia]

    </div>

</body>
</html>
