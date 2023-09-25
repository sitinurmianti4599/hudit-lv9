<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Status Changed</title>
</head>
<body>
    <div>
        Registration: {{ $submission->customer->registration }}
    </div>
    <div>
        Submission: {{ $submission->file->name }}
    </div>
    <div>
        Status: {{ $submission->status }}
    </div>
    <div>
        You can check <a href="{{ route('web.track.check') }}">here</a>
    </div>
</body>
</html>
