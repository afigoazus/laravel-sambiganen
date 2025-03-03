<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="width: 100%; text-align: center;">Data Terpadu Kesejahteraan Sosial</h1>
    <div>
        <h1>Nama Lengkap :</h1>
        <p>Patrick Star</p>
    </div>
    <div>
        <h1>RT / RW</h1>
        <p>003 / 004</p>
    </div>
    <div>
        <h1>Foto KTP</h1>
        <img style="width: 250px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage/' . $data['foto_ktp']))) }}" alt="Logo">
    </div>
    <div>
        <h1>Foto KK</h1>
        <img style="width: 500px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage/' . $data['foto_kk']))) }}" alt="Logo">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="margin-top: 5rem;">
        <h1>Foto Rumah</h1>
        <img style="width: 500px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage/' . $data['foto_rumah']))) }}" alt="Logo">
    </div>
    <div>
        <h1>Foto Lantai Rumah</h1>
        <img style="width: 500px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage/' . $data['foto_lantai_rumah']))) }}" alt="Logo">
    </div>
</body>

</html>