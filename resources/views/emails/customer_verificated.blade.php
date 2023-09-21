<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Verificated</title>
</head>
<body>
    <div>
        Registration: {{ $customer->registration }}
    </div>
    <div>
        You can check <a href="{{ route('web.track.check') }}">here</a>
    </div>
</body>
</html>
