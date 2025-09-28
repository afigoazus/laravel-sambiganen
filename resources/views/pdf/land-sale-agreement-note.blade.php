@php
use Carbon\Carbon;

$date = $data['updated_at'];
$dayOfWeek = Carbon::parse($date)->locale('id')->isoFormat('dddd');
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Surat Perjanjian Jual Beli Tanah {{$data['buyer_name']}}</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
        }
        p {
            margin: 0;
            padding: 0;
            text-align: justify;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Menghilangkan spasi antar border */
        }
        /* Mengatur alignment vertikal untuk semua sel tabel */
        td, th {
            vertical-align: top;
            text-align: left;
        }
        .header {
            text-align: center;
            font-weight: bold;
            font-size: 14pt;
            text-decoration: underline;
            margin-bottom: 30px;
        }
        /* Tabel utama untuk data penjual & pembeli */
        .table-pihak {
            margin-bottom: 15px;
        }
        .table-pihak .nomor {
            width: 5%;
        }
        .table-pihak .label {
            width: 20%;
            padding-left: 10px;
        }
        .table-pihak .colon {
            width: 5%;
            text-align: center;
        }
        /* Tabel untuk batas tanah */
        .table-batas {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        /* Tabel untuk saksi */
        .table-saksi {
            margin-top: 15px;
        }
        .table-saksi th, .table-saksi td {
            padding: 5px;
        }
        .table-saksi th {
            font-weight: bold;
        }
        /* Mencegah paragraf atau tabel terpotong antar halaman */
        .no-break {
            page-break-inside: avoid;
        }
        .signature-table {
            margin-top: 40px;
        }
        .signature-table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <p class="header">SURAT PERJANJIAN JUAL BELI TANAH</p>

    <p style="margin-bottom: 15px;">Yang bertanda tangan di bawah ini:</p>

    <table class="table-pihak">
        <tr>
            <td class="nomor">1.</td>
            <td class="label">Nama</td>
            <td class="colon">:</td>
            <td><strong>{{$data['buyer_name']}}</strong></td>
        </tr>
        <tr>
            <td></td>
            <td class="label">Tempat, Tgl Lahir</td>
            <td class="colon">:</td>
            <td>{{$data['buyer_place_born']}}, {{\Carbon\Carbon::parse($data['buyer_date_born'])->locale('id')->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td></td>
            <td class="label">Alamat</td>
            <td class="colon">:</td>
            <td>{{$data['buyer_address']}}</td>
        </tr>
    </table>
    <p>Selanjutnya disebut <strong>Pihak Pertama (Penjual)</strong></p>

    <table class="table-pihak" style="margin-top: 15px;">
        <tr>
            <td class="nomor">2.</td>
            <td class="label">Nama</td>
            <td class="colon">:</td>
            <td><strong>{{$data['seller_name']}}</strong></td>
        </tr>
        <tr>
            <td></td>
            <td class="label">Tempat, Tgl Lahir</td>
            <td class="colon">:</td>
            <td>{{$data['seller_place_born']}}, {{\Carbon\Carbon::parse($data['seller_date_born'])->locale('id')->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td></td>
            <td class="label">Alamat</td>
            <td class="colon">:</td>
            <td>{{$data['seller_address']}}</td>
        </tr>
    </table>
    <p style="margin-bottom: 1rem;">Selanjutnya disebut <strong>Pihak Kedua (Pembeli)</strong></p>

    <p style="margin-bottom: 10px;">Kedua belah pihak mengadakan kesepakatan sebagai berikut:</p>

    <table style="padding-left: 20px;">
        <tr>
            <td style="width: 5%; vertical-align: top;">1.</td>
            <td>Pada hari ini {{$dayOfWeek}} Tanggal {{$date->format('d')}} Bulan {{$date->translatedFormat('F')}} Tahun {{$date->format('Y')}}. Pihak Pertama benar-benar menjual sebidang tanah miliknya kepada Pihak Kedua.</td>
        </tr>
        <tr>
            <td style="width: 5%; vertical-align: top;">2.</td>
            <td>Tanah dimaksud adalah dengan luas : {{$data['land_area']}} m<sup>2</sup>, Persil Nomor: {{$data['no_persil']}}, SPPT Nomor: {{$data['no_sppt']}}, pada Sertifikat Tanah Hak Milik Nomor {{$data['no_certificate']}}.</td>
        </tr>
        <tr>
            <td style="width: 5%; vertical-align: top;">3.</td>
            <td>
                Batas tanah dimaksud telah ditunjukkan oleh pihak Pertama yang disaksikan oleh Perangkat Desa dan Pemilik tanah perbatasan sebagai berikut:
                <table class="table-batas">
                    <tr>
                        <td style="width: 15%;">Utara</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 30%;">{{$data['north_boundary']}}</td>
                        <td style="width: 15%;">Selatan</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 30%;">{{$data['south_boundary']}}</td>
                    </tr>
                    <tr>
                        <td>Timur</td>
                        <td>:</td>
                        <td>{{$data['east_boundary']}}</td>
                        <td>Barat</td>
                        <td>:</td>
                        <td>{{$data['west_boundary']}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="width: 5%; vertical-align: top;">4.</td>
            <td>Harga disepakati oleh kedua belah pihak adalah sebesar Rp. {{number_format($data['land_price'], 0, ',', '.')}} <span style="text-transform: capitalize;">( {{terbilang($data['land_price'])}} )</span>  dan sudah dibayar lunas oleh Pihak Kedua kepada Pihak Pertama disaksikan oleh Para saksi yang tersebut di bawah.</td>
        </tr>
        <tr>
            <td style="width: 5%; vertical-align: top;">5.</td>
            <td>Surat perjanjian ini dibuat sebagai bukti atas pemindahan hak atas tanah tersebut dari Pihak Pertama kepada Pihak Kedua.</td>
        </tr>
        <tr>
            <td style="width: 5%; vertical-align: top;">6.</td>
            <td>Surat perjanjian ini dibuat atas dasar keikhlasan hati dan tidak ada paksaan dari pihak manapun.</td>
        </tr>
    </table>

    <table class="signature-table no-break">
        <tr>
            <td style="width: 50%; padding-top: 1rem;">
                <p style="text-align: center;">Pihak Kedua (Pembeli)</p>
                <p style="padding-top: 80px; text-decoration: underline; font-weight: bold; text-align:center">{{$data['buyer_name']}}</p>
            </td>
            <td style="width: 50%;">
                <p style="text-align: center;">Ngrayun, {{\Carbon\Carbon::parse($data['updated_at'])->locale('id')->translatedFormat('d F Y')}}</p>
                <p style="text-align: center;">Pihak Pertama (Penjual)</p>
                <p style="padding-top: 80px; text-decoration: underline; font-weight: bold; text-align: center;">{{$data['seller_name']}}</p>
            </td>
        </tr>
    </table>

    <p style="text-align: center; margin-top: 1rem;">
        Rg. Nomor : 470/<span class="{{empty($data['no_letter']) ? 'min-width-23' : ''}}">{{isset($data['no_letter']) ? str_pad($data['no_letter'], 3, '0', STR_PAD_LEFT) : ''}}</span>/405.29.03.09.{{ date('Y') }}
    </p>

    <div class="no-break" style="margin-top: 40px;">
        <p style="text-align: center;">Mengetahui,</p>
        <p style="text-align: center; padding-bottom: 80px;">Kepala Desa Sambiganen</p>
        <p style="text-align: center; font-weight: bold; text-decoration: underline;">A.E.THODOROS M.</p>
    </div>

    <div class="no-break" style="margin-top: 40px;">
        <p style="font-weight: bold; text-decoration: underline;">Para Saksi:</p>
        <table class="table-saksi">
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th>Nama</th>
                    <th>Keterangan Jabatan</th>
                    <th style="width: 25%;">Tanda Tangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>{{$data['witness1_name']}}</td>
                    <td>{{$data['witness1_job_position']}}</td>
                    <td>1. .......................</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>{{$data['witness2_name']}}</td>
                    <td>{{$data['witness2_job_position']}}</td>
                    <td>2. .......................</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>{{$data['witness3_name']}}</td>
                    <td>{{$data['witness3_job_position']}}</td>
                    <td>3. .......................</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>