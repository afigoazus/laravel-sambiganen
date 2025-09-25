<!DOCTYPE html>
<html>

<head>
    <title></title>
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

    .border {
        border: 1px solid black;
        text-align: center;
    }

    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    /* HTML5 display-role reset for older browsers */

    td {
        padding: 0 8px;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    td[colspan="8"] {
        text-align: left;
        font-weight: bold;
    }

    .hanging-indent {
        margin: 0;
        font-size: 0.9rem;
        text-indent: -2.3em;
        padding-left: 2.3em;
    }

    .hanging-indent span {
        margin-right: 1em;
    }
</style>

<body>
    <div style="text-align:center; font-family: 'Times New Roman', Times, serif; font-weight:bold; font-size: 1rem; position: relative;">
        <p style="margin: 0px">PEMERINTAH KABUPATEN PONOROGO</p>
        <p style="margin: 0px">KECAMATAN SAMBIT</p>
        <p style="font-size: 1rem; margin: 0px">DESA WRINGINANOM</p>
        <p style="margin-top: 0; font-weight: normal">Jalan Kresno Nomor 41 Telephon ( 0352 ) 312896</p>
        <p style="font-weight: bold;">WRINGINANOM</p>
        <p style="position:absolute; right:0; top: 90px; font-weight:normal">Kode Pos 63474</p>
    </div>
    <div style="position:absolute; left:0; top:0; width: 110px; height: 110px;">
        <img style="width: 100%;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo.png'))) }}" alt="Logo">
    </div>
    <div style="margin-top: 1rem; border: 1px solid black;"></div>
    <div style="margin-top: 1px; border: 2px solid black;"></div>

    <div style="margin-top: 0.5rem; text-align:center">
        <p style="text-decoration: underline; font-size:1rem; font-weight: bold; margin-bottom: 0;">
            SURAT REKOMENDASI
        </p>
        <p style="margin: 0">
            Nomor : {{ isset($data['no_letter']) ? str_pad($data['no_letter'], 3, '0', STR_PAD_LEFT) : "____"}}/DESA/35/405.29.04.02/TANI/{{ $data['nomor_jbt'] ?? "JBT" }}/I/2025
        </p>
    </div>

    <div style="position: relative">
        <p style="margin: 0; font-size: 0.9rem">Dasar Hukum :</p>
        <div style="margin-left: 2rem">
            <table style="width: 100%; border-collapse: collapse; border-spacing: 0; font-size: 0.9rem" cellspacing="0">
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">1. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Undang-Undang nomor 22 tahun 2001 tentang minyak dan gas bumi sebagaimana telah diubah dengan undang-undang nomor 6 tahun 2023 tentang penetapan peraturan pemerintah pengganti undang- undang nomor 2 tahun 2022 tentang cipta kerja menjadi undang-undang.
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">2.</td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Undang-Undang nomor 23 tahun 2014 tentang pemerintah daerah sebagaimana telah beberapa kali diubah terakhir dengan undang-undang nomor 6 tahun 2023 tentang penetapan peraturan pemerintah pengganti undang-undang nomor 2 tahun 2022 tentang cipta kerja menjadi undang-undang
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">3. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Peraturan presiden nomor 191 tahun 2014 tentang penyediaan, pendistribusian dan harga jual eceran bahan bakar minyak sebagaimana telah beberapa kali diubah terakir dengan peraturan presiden nomor 117 tahun 2021 tentang perubahan ketiga atas peraturan presiden nomor 191 tahun 2014 tentang penyediaan, pendistribusian dan harga jual eceran bahan bakar minyak.
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block;">4. </td>
                    <td style="text-align: justify; padding-left: 8px">
                        Peraturan Badan Pengatur Hilir Minyak dan Gas Bumi Nomor 2 Tahun 2023 tentang Penerbitan Surat Rekomendasi Untuk Pembelian Jenis Bahan Bakar Minyak Tertentu Dan Jenis Bahan Bakar Minyak Khusus Penugasan
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <p style="margin: 0; font-size: 0.9rem">Dengan ini memberikan rekomendasi kepada :</p>
    <table style="font-family:'Times New Roman', Times, serif; border-collapse: collapse; border-spacing: 0; font-size: 0.9rem" cellspacing="0">
        <tr>
            <td style="margin-right: 5px">1.</td>
            <td style="padding: 0; font-size: 0.9rem; vertical-align: baseline;">Nama</td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="font-size: 0.9rem; padding-left: 3px; font-weight: bold;">{{ $data['name'] ?? "" }}</td>
        </tr>
        <tr>
            <td style="margin-right: 5px">2.</td>
            <td style="padding: 0; vertical-align: baseline;">NIK</td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="font-size: 0.9rem; padding-left: 3px;">{{ $data['nik'] ?? "" }}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Alamat</td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="font-size: 0.9rem; padding-left: 3px;">{{ $data['address'] ?? "" }}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Nama Usaha (jikaada)</td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="padding-left: 3px; font-size: 0.9rem">Pertanian</td>
        </tr>
        <tr>
            <td>5.</td>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Sektor Konsumen Pengguna</td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="padding-left: 3px; font-size: 0.9rem">Usaha Pertanian</td>
        </tr>
        <tr>
            <td>6.</td>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Jenis Usaha</td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="padding-left: 3px; font-size: 0.9rem">Pertanian</td>
        </tr>
    </table>
    <p style="margin: 0; font-size: 0.9rem"> Berdasarkan hasil Verifikasi dan Evaluasi Perhitungan :</p>
    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">1.</span> Kebutuhan jenis BBM tertentu yang digunakan untuk sarana sebagai berikut :</p>

    <table style="font-family:'Times New Roman', Times, serif; font-size: 0.9rem">
        <tr>
            <th style="width: max-content;" class="border">No.</th>
            <th class="border" style="text-align:left">Jenis Alat / Mesin</th>
            <th class="border" style="text-align:left">Jumlah Alat / Mesin</th>
            <th class="border" style="text-align:left">Fungsi Alat / Mesin</th>
            <th class="border" style="text-align:left">Jumlah Alat / Mesin</th>
            <th class="border" style="text-align:left">Daya Alat / Mesin</th>
            <th class="border" style="text-align:left">Lama Penggunaan Alat / Mesin (jam per hari)</th>
            <th class="border" style="text-align:left">Lama Operasional Alat / Mesin (hari/minggu/bulan)</th>
            <th class="border" style="text-align:left">Konsumsi JBT/JBKP Alat / Mesin (Liter per minggu / bulan)</th>
        </tr>
        <tr>
            <td class="border">1</td>
            <td class="border">{{$data['tool_type']}}</td>
            <td class="border">{{$data['tool_sum']}}</td>
            <td class="border">{{$data['tool_use']}}</td>
            <td class="border">{{$data['tool_sum']}}</td>
            <td class="border">{{$data['tool_power']}}Pk</td>
            <td class="border">{{$data['tool_time_used_hour']}}</td>
            <td class="border">{{$data['tool_time_used_daily']}}</td>
            <td class="border">{{$data['jbt_consumption']}}</td>
        </tr>
        <tr>
            <td colspan="8" class="border">Jumlah</td>
            <td class="border">{{$data['jbt_consumption']}}</td>
        </tr>
    </table>

    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">2.</span>Diberikan jenis BBM Tertentu (JBT) Jenis Minyak Solar (Gas Oil)</p>
    <div style="margin-left: 1.5rem; font-size: 0.9rem">
        <table cellspacing="0">
            <tr style="border-spacing: 0;">
                <td style="display: block">a.</td>
                <td style="padding-left: 2px">
                    Alokasi Volume
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">{{$data['volume_allocation']}} Liter</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">b.</td>
                <td style="padding-left: 2px">
                    Tempat Pengambilan
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">{{$data['pick_up_place']}}</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">c.</td>
                <td style="padding-left: 2px">
                    Nomor Penyalur
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">{{ $data['no_distributor'] ?? "" }}</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">d.</td>
                <td style="padding-left: 2px">
                    Alamat Penyalur
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">{{ $data['address_distributor'] ?? "" }}</td>
            </tr>
        </table>
    </div>

    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">3.</span>Alat Pembelian yang Digunakan : {{$data['purchasing_tools_used']}}</p>
    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">4.</span>Jangka waktu pemberlakuan Surat Rekomendasi sampai dengan tanggal : {{ \Carbon\Carbon::parse($data->updated_at)->addDays(90)->locale('id')->translatedFormat('d F Y') }}</p>
    <p style="margin: 0; font-size: 0.9rem; display: table">
        <span style="margin-right: 1em; display: table-cell; padding-right: 1em; white-space: nowrap;">5.</span>
        <span style="display: table-cell">Penyalur SPBU/SPBKB/SPBN/SPBUN wajib mencatat riwayat pembelian Konsumen Penggunaan dalam format Terlampir.</span>
    </p>
    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">6.</span>Surat Rekomendasi ini hanya berlaku untuk perseorangan sesuai dengan identitas pemohon Surat Rekomendasi</p>
    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">7.</span>Surat Rekomendasi ini dilarang untuk diberikan, dipindahtangankan, atau dialihkan kepada pihak lain</p>
    <p style="margin: 0; font-size: 0.9rem"><span style="margin-right: 1em">8.</span>Jenis BBM Tertentu atau Jenis BBM Khusus Penugasan yang diperoleh tidak untuk diperjual belikan kembali.</p>
    <p style="margin: 0; font-size: 0.9rem; display: table">
        <span style="margin-right: 1em; display: table-cell; padding-right: 1em; white-space: nowrap;">9.</span>
        <span style="display: table-cell">Apabila Surat Rekomendasi tidak penggunaan sebagaimana mestinya dan tidak sesuai dengan ketentuan Peraturan Perundang-undangan, Surat Rekomendasi akan dicabut dan diproses secara hukum sesuai dengan ketentuan dan Peraturan Perundang- undangan .</span>
    </p>
    <p style="margin: 0; font-size: 0.9rem; display: table">
        <span style="display: table-cell; padding-right: 0.5em; white-space: nowrap;">10.</span>
        <span style="display: table-cell">Surat Rekomendasi ini beserta lampirannya harus dilampirkan kembali saat perpanjangan atau pengajuan ulang permohonan Surat Rekomendasi.</span>
    </p>
    <div style="font-size: 0.9rem; width: max-content; position: absolute; right: 0;">
        <div style="text-align: left">
            <p>Wringinanom, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
            <p style="margin-bottom: 5rem">Kepala Desa Wringinanom</p>
            <p style="text-decoration: underline; font-weight:bold; text-align: center">SUTINI</p>
        </div>
    </div>
</body>

</html>
