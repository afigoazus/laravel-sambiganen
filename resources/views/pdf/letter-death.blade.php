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
        <p style="font-weight: bold;">KECAMATAN </p>
        <p style="font-weight: bold; font-size:1.5rem;">DESA SAMBIGANEN</p>
        <p style="font-style: italic">Alamat : Jalan Tirta Argo No.15 Kode Pos 63463</p>
        <p style="font-weight: bold; font-size:1.2rem;">SAMBIGANEN</p>
    </div>
    <p style="position:absolute; right:0; font-family: Time 'Times New Roman', Times, serif;">Kode Pos 63474</p>
    <div style="position:absolute; left:0; top:0; width: 140px; height: 140px;">
        <img style="width: 100%;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo.png'))) }}" alt="Logo">
    </div>
    <div style="margin-top: 2rem; border: 1px solid black;"></div>
    <div style="margin-top: 4px; border: 2px solid black;"></div>

    <div style="margin-top: 1.5rem; text-align:center">
        <p style="text-decoration: underline; letter-spacing: 1px; font-size:1.1rem; font-weight: bold; margin-bottom: 0;">
            SURAT KETERANGAN KEMATIAN
        </p>
        <p style="margin-top: 0">
            Nomor : 470/<span class="{{ empty($data['no_letter']) ? 'min-width-23' : '' }}">
                {{ isset($data['no_letter']) ? str_pad($data['no_letter'], 3, '0', STR_PAD_LEFT) : '' }}
            </span>/405.29.04.02/{{ date('Y') }}
        </p>
    </div>
    <div style="margin-top: 1rem;">
        <p style="margin-left:0rem;">Yang bertanda tangan di bawah ini :</p>
        <table>
            <tr>
                <td></td>
                <td></td>
                <td>Nama Lengkap</td>
                <td></td>
                <td>:</td>
                <td>A.T.THEODOROS M.</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>NIK/NIP*</td>
                <td></td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Jabatan</td>
                <td></td>
                <td>:</td>
                <td>Kepala Desa</td>
            </tr>
        </table>
    </div>

    <p style="margin-left:0rem; margin-top:1rem">Dengan ini menerangkan bahwa telah terjadi peristiwa kematian pada penduduk dengan identitas sebagai berikut :</p>

    <table>
        <tr>
            <td></td>
            <td></td>
            <td>NIK jenazah</td>
            <td></td>
            <td>:</td>
            <td>{{ $data['nik'] }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Nama Lengkap</td>
            <td></td>
            <td>:</td>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>TTL</td>
            <td></td>
            <td>:</td>
            <td>{{$data['place_birth']}}, {{\Carbon\Carbon::parse($data['date_birth'])->locale('id')->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Tanggal Kematian</td>
            <td></td>
            <td>:</td>
            <td>{{\Carbon\Carbon::parse($data['date_death'])->locale('id')->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Pukul</td>
            <td></td>
            <td>:</td>
            <td>{{$data['hour_death']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Sebab Kematian</td>
            <td></td>
            <td>:</td>
            <td>{{$data['cause_death']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Tempat Kematian</td>
            <td></td>
            <td>:</td>
            <td>KABUPATEN PONOROGO</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Urutan anak</td>
            <td></td>
            <td>:</td>
            <td>{{$data['order_child']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Yang menerangkan</td>
            <td></td>
            <td>:</td>
            <td>{{$data['witness']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Nama Ibu</td>
            <td></td>
            <td>:</td>
            <td>{{$data['mom_name']}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Nama Ayah</td>
            <td></td>
            <td>:</td>
            <td>{{$data['dad_name']}}</td>
        </tr>
    </table>

    <div style="margin-top: 0.5rem;">
        <p>Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya</p>
    </div>

    <div style="margin-top:2rem; position: relative">
        <div style="position: absolute; right: 4rem; text-align: center;">
            <p style="text-align: center">Ponorogo, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
            <div style="text-align: center;">
                <p style="margin-bottom: 5rem">Kepala Desa Sambiganen</p>
                <p style="text-align: center; font-weight:bold;">A.E.THEODOROS M.</p>
            </div>
        </div>
    </div>
</body>

</html>