<!DOCTYPE html>
<html>

<head>
    <title>{{$data['name']}}_{{$data['no_ktp']}}</title>
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
        <p style="text-decoration: underline; letter-spacing: 1px; font-size:1.1rem; font-weight: bold; margin-bottom: 0;">SURAT KETERANGAN USAHA</p>
        <p style="margin-top: 0">
            Nomor : 470/<span class="{{ empty($data['no_letter']) ? 'min-width-23' : '' }}">
                {{ isset($data['no_letter']) ? str_pad($data['no_letter'], 3, '0', STR_PAD_LEFT) : '' }}
            </span>/405.29.04.02/{{ date('Y') }}
        </p>
    </div>

    <div style="margin-top: 2rem; text-align: justify">
        <p style="margin-left:3rem;">Yang bertanda tangan di bawah ini Kepala Desa Wringinanom Kecamatan Sambit Kabupaten</p>
        <p>Ponorogo, menerangkan dengan sebenarnya bahwa :</p>
    </div>

    <table>
        <tr>
            <td></td>
            <td></td>
            <td>Nama</td>
            <td></td>
            <td>:</td>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Alamat</td>
            <td></td>
            <td>:</td>
            <td>{{$data['address']}}</td>
        </tr>
        <tr>
            <td style="width: 6px;"></td>
            <td></td>
            <td>NIK</td>
            <td></td>
            <td>:</td>
            <td>{{$data['no_ktp']}}</td>
        </tr>
    </table>

    <div style="margin-top: 1.5rem; ">
        <p>Orang tersebut benar-benar mempunyai kegiatan wiraswasta Di Desa Wringinanom dibidang :</p>
    </div>

    <table>
        <tr>
            <td></td>
            <td>1.</td>
            <td>Pertanian</td>
            <td></td>
            <td>:</td>
            <td>{{$data['agriculture']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>2.</td>
            <td>Perindustrian</td>
            <td></td>
            <td>:</td>
            <td>{{$data['industry']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>3.</td>
            <td>Perdagangan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['trading']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>4.</td>
            <td>Peternakan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['stock_breeding']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>5.</td>
            <td>Kerajinan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['handicraft']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>6.</td>
            <td>Jasa</td>
            <td></td>
            <td>:</td>
            <td>{{$data['service']}}</td>
        </tr>
        <tr>
            <td></td>
            <td>7.</td>
            <td>Lainnya</td>
            <td></td>
            <td>:</td>
            <td>{{$data['other']}}</td>
        </tr>
    </table>

    <div style="margin-top: 1.5rem;">
        <p>Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
    </div>

    <div style="margin-top:3rem; position: relative">
        <div style="position: absolute; left: 5rem">
            <div style="text-align: center;">
                <p style="margin-bottom: 4rem">Pemohon</p>
                <p style="text-align: center; font-weight:bold; ">{{$data['name']}}</p>
            </div>
        </div>
    </div>

    <div style="position: relative">
        <div style="position: absolute; right: 5rem; top: -1.5rem">
            <p>Wringinanom, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
            <div style="text-align: center;">
                <p style="margin-bottom: 4rem">Kepala Desa Wringinanom</p>
                <p style="font-weight:bold; ">SUTINI</p>
            </div>
        </div>
    </div>
</body>

</html>