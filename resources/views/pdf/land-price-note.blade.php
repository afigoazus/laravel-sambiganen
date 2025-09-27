<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Taksiran Tanah {{$data['name']}}</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        p {
            margin: 0.2rem 0; /* Mengatur margin atas dan bawah */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0.5rem; 
        }
        table tr td {
            padding: 1px 5px; /* Mengatur padding agar tidak terlalu renggang */
            vertical-align: top;
       }
        /* Kelas untuk kolom label (misal: "Nama Lengkap") */
        td.label {
            width: 180px; /* Lebar tetap agar semua ':' sejajar */
        }
        /* Kelas untuk kolom titik dua (:) */
        td.colon {
            width: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div style="text-align:center;">
        <p style="font-weight: bold;">PEMERINTAH KABUPATEN PONOROGO</p>
        <p style="font-weight: bold;">KECAMATAN </p>
        <p style="font-weight: bold; font-size:1.5rem;">DESA SAMBIGANEN</p>
        <p style="font-style: italic">Alamat : Jalan Tirta Argo No.15 Kode Pos 63463</p>
        <p style="font-weight: bold; font-size:1.2rem;">SAMBIGANEN</p>
    </div>
    <p style="position:absolute; right:0; top: 40px;">Kode Pos 63474</p>
    <div style="position:absolute; left:0; top:0; width: 100px; height: 100px;">
        <img style="width: 100%;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo.png'))) }}" alt="Logo">
    </div>
    <div style="margin-top: 1rem; border-top: 1px solid black;"></div>
    <div style="margin-top: 2px; border-top: 3px solid black;"></div>

    <div style="margin-top: 1.5rem; text-align:center">
        <p style="text-decoration: underline; letter-spacing: 1px; font-size:1.1rem; font-weight: bold; margin-bottom: 0;">
            SURAT KETERANGAN TAKSIRAN HARGA TANAH
        </p>
        <p style="margin-top: 0;">
            Nomor : 470/<span class="{{ empty($data['no_letter']) ? 'min-width-23' : '' }}">
                {{ isset($data['no_letter']) ? str_pad($data['no_letter'], 3, '0', STR_PAD_LEFT) : ''}} 
            </span>/405.29.02.09/{{ date('Y') }}
        </p>
    </div>

    <div style="margin-top: 1.5rem;">
        <p>Yang bertanda tangan di bawah ini :</p>
        <table style="margin-left: 1rem;">
            <tr>
                <td class="label">Nama Lengkap</td>
                <td class="colon">:</td>
                <td>A.T.THEODOROS M.</td>
            </tr>
            <tr>
                <td class="label">Jabatan</td>
                <td class="colon">:</td>
                <td>Kepala Desa</td>
            </tr>
            <tr>
                <td class="label">Jabatan</td>
                <td class="colon">:</td>
                <td>Kepala Desa</td>
            </tr>
        </table>
    </div>

    <p style="margin-top:1rem">Menerangkan dengan sebenarnya bahwa:</p>

    <div style="margin-left: 1rem; margin-top: 0.5rem;">
        <table>
            <tr>
                <td class="label">Nama</td>
                <td class="colon">:</td>
                <td>{{$data['name']}}</td>
            </tr>
            <tr>
                <td class="label">Tempat Tanggal Lahir</td>
                <td class="colon">:</td>
                <td>{{$data['place_born']}}, {{\Carbon\Carbon::parse($data['date_born'])->locale('id')->translatedFormat('d F Y')}} </td>
            </tr>
            <tr>
                <td class="label">Pekerjaan</td>
                <td class="colon">:</td>
                <td>{{$data['job']}}</td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td class="colon">:</td>
                <td>{{$data['address']}}</td>
            </tr>
        </table>
    </div>

    <p style="margin-top: 1rem;">Adalah pemilik sebidan tanah tercatat di Sertifikat :</p>

    <div style="margin-left: 1rem; margin-top: 0.5rem;">
        <table>
            <tr>
                <td class="label">Nama</td>
                <td class="colon">:</td>
                <td>{{$data['name']}}</td>
            </tr>
            <tr>
                <td class="label">Nomor Sertifikat</td>
                <td class="colon">:</td>
                <td>{{$data['certificate_number']}}</td>
            </tr>
            <tr>
                <td class="label">Luas</td>
                <td class="colon">:</td>
                <td>{{$data['land_area']}} m<sup>2</sup></td>
            </tr>
        </table>
    </div>

    <p style="margin-top: 1rem;">Dan berbatasan dengan tanah-tanah milik :</p>

    <div style="margin-top: 1rem; margin-left: 1rem;">
        <table>
            <tr>
                <td style="width: 10%;">Utara</td>
                <td style="width: 5%;">:</td>
                <td>{{$data['north_boundary']}}</td>
                <td style="width: 10%;">Timur</td>
                <td style="width: 5%;">:</td>
                <td>{{$data['east_boundary']}}</td>
            </tr>
            <tr>
                <td style="width: 10%">Selatan</td>
                <td style="width: 5%">:</td>
                <td>{{$data['south_boundary']}}</td>
                <td style="width: 10%;">Barat</td>
                <td style="width: 5%;">:</td>
                <td>{{$data['west_boundary']}}</td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 1rem; margin-left: 0rem;">
        <ol style="padding: 1rem;">
            <li>Tanah tersebut saat ini sudah bersertifikan atas Nama : {{$data['name']}}</li>
            <li>Tanah tersebut pada saat ini tidak sengan dalam sengketa.</li>
            <li>Taksiran harga tanah tersebut pem m<sup>2</sup> Rp.{{$data['land_price']}}</li>
        </ol>
    </div>


    <div style="margin-top: 1.5rem;">
        <p>Demikian Surat Keterangan ini dibuat dengan sebenar-benarnya dan agar digunakan sebagaimana mestinya.</p>
    </div>

    <div style="margin-top:2rem; position: relative;">
        <div style="position: absolute; right: 4rem; text-align: center;">
            <p>Ponorogo, {{\Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y')}}</p>
            <p style="margin-bottom: 5rem">Kepala Desa Sambiganen</p>
            <p style="font-weight:bold; text-decoration: underline;">A.E.THEODOROS M.</p>
        </div>
    </div>
</body>
</html>