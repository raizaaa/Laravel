<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan view</title>
</head>
<body>
    <center>Daftar Trainee Abadi</center>
    @foreach ($data as $value)
        Nama : {{ $value['nama']}}<br>
        Kelas : {{ $value['kelas']}}<hr>
    @endforeach
</body>
</html>
