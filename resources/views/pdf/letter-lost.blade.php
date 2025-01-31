<!DOCTYPE html>
<html>

<head>
    <title>{{$data['name']}}_{{$data['nik']}}</title>
</head>
<style>
    p {
        margin: 0.2rem;
    }

    pre {
        margin: 0.2rem;
    }

    .min-width-23 {
        display: inline-block;
        min-width: 23px;
        /* Minimum width of 23 pixels */
    }

    table {
        width: 100%;
        margin-top: 2rem;
        font-family: 'Times New Roman', Times, serif;
        border-collapse: collapse;
    }

    table tr td {
        padding: 3px 5px;
        vertical-align: top;
        /* Aligns all content to the top */
    }

    /* Serial Number Column */
    table tr td:nth-child(2) {
        text-align: center;
        width: 30px;
        vertical-align: top;
        /* Ensures number aligns with the top */
    }

    /* Label Column */
    table tr td:nth-child(3) {
        width: 160px;
        /* Adjust for longer labels */
        vertical-align: top;
    }

    /* Spacer Column */
    table tr td:nth-child(4) {
        width: 30px;
        /* Space between label and colon */
    }

    /* Colon Column */
    table tr td:nth-child(5) {
        text-align: center;
        width: 20px;
        vertical-align: top;
    }

    /* Value Column */
    table tr td:nth-child(6) {
        width: auto;
        vertical-align: top;
    }
</style>

<body>
    <div style="text-align:center; font-family: Time 'Times New Roman', Times, serif;">
        <p style="font-weight: bold;">PEMERINTAH KABUPATEN PONOROGO</p>
        <p style="font-weight: bold;">KECAMATAN SAMBIT</p>
        <p style="font-weight: bold; font-size:1.5rem;">DESA WRINGINANOM</p>
        <p>Jalan Kresno Nomor 41 Telephon ( 0352 ) 312896</p>
        <p style="font-weight: bold; font-size:1.2rem;">WRINGINANOM</p>
    </div>
    <p style="position:absolute; right:0; font-family: Time 'Times New Roman', Times, serif;">Kode Pos 63474</p>
    <div style="position:absolute; left:0; top:0; width: 140px; height: 140px;">
        <img style="width: 100%;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo.png'))) }}" alt="Logo">
    </div>
    <div style="margin-top: 2rem; border: 1px solid black;"></div>
    <div style="margin-top: 4px; border: 2px solid black;"></div>

    <div style="margin-top: 1.5rem; text-align:center">
        <p style="text-decoration: underline; letter-spacing: 1px; font-size:1.1rem; font-weight: bold; margin-bottom: 0;">
            SURAT KETERANGAN
        </p>
        <p style="margin-top: 0">
            Nomor : 470/<span class="{{ empty($data['no_letter']) ? 'min-width-23' : '' }}">
                {{ isset($data['no_letter']) ? str_pad($data['no_letter'], 3, '0', STR_PAD_LEFT) : '' }}
            </span>/405.29.04.02/{{ date('Y') }}
        </p>
    </div>

    <div style="margin-top: 2rem;">
        <p style="margin-left:1rem;">Yang bertanda tangan di bawah ini Kepala Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo,</p>
        <p>menerangkan dengan sebenarnya bahwa :</p>
    </div>

    <table>
        <tr>
            <td></td>
            <td>1.</td>
            <td>Nama</td>
            <td></td>
            <td>:</td>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>2.</td>
            <td>Tempat Tanggal Lahir</td>
            <td></td>
            <td>:</td>
            <td>{{$data['tempat_lahir']}}, {{ \Carbon\Carbon::parse($data['tgl_lahir'])->locale('id')->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td></td>
            <td>3.</td>
            <td>Jenis Kelamin</td>
            <td></td>
            <td>:</td>
            <td>{{$data['gender']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>4.</td>
            <td>Kewarganegaraan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['nationality']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>5.</td>
            <td>Agama</td>
            <td></td>
            <td>:</td>
            <td>{{$data['religion']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>6.</td>
            <td>Status Perkawinan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['marriage']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>7.</td>
            <td>Pekerjaan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['job']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>8.</td>
            <td>Pendidikan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['education']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>9.</td>
            <td>NIK</td>
            <td></td>
            <td>:</td>
            <td>{{$data['nik']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>10.</td>
            <td>Nomor KK</td>
            <td></td>
            <td>:</td>
            <td>{{$data['no_kk']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>11.</td>
            <td>Alamat</td>
            <td></td>
            <td>:</td>
            <td>{{$data['address']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>12.</td>
            <td>Keterangan</td>
            <td></td>
            <td>:</td>
            <td class="description">
                Orang tersebut benar-benar warga Desa Wringinanom dan yang bersangkutan saat ini kehilangan
                {{$data['information']}}
            </td>
        </tr>
        <tr>
            <td></td>
            <td>13.</td>
            <td>Surat Keterangan ini digunakan untuk</td>
            <td></td>
            <td>:</td>
            <td>Laporan Kehilangan kepolisian</td>
        </tr>
    </table>

    <div style="margin-top: 1.5rem;">
        <p>Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
    </div>

    <div style="margin-top:3rem; position: relative">
        <div style="position: absolute; right: 5rem">
            <p>Wringinanom, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
            <div style="text-align: left;">
                <p style="margin-bottom: 4rem">Kepala Desa Wringinanom</p>
                <p style="text-align: center; font-weight:bold; text-decoration: underline">SUTINI</p>
            </div>
        </div>
    </div>
</body>

</html>