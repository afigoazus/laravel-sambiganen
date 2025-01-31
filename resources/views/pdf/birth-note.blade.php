@php
use Carbon\Carbon;

$date = $data['date_birth_child']; // Example: '2025-01-27'
$dayOfWeek = Carbon::parse($date)->locale('id')->isoFormat('dddd'); // Outputs full day name like "Monday"
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Registration Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            font-size: 0.7rem;
            border-spacing: 0;
        }

        tr {
            margin: 0;
            padding: 0;
        }

        td {
            margin: 0;
            padding: 0;
            line-height: 1;
        }

        table tr td {
            padding: 2px 5px;
            vertical-align: top;
            /* Aligns all content to the top */
        }

        .form-container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .form-section {
            margin-bottom: 20px;
            font-size: 0.7rem;
        }

        .form-section label {
            margin-bottom: 0.4em;
            display: inline-block;
        }

        .form-section h3 {
            margin-bottom: 10px;
            text-align: center;
            font-size: 0.7rem;
            font-weight: bolder;
        }

        .form-group {
            margin-bottom: 10px;
            border: 1px solid black;
            padding: 2px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .table-form {
            font-size: 0.6rem;
        }

        .input-grid {
            text-transform: uppercase;
            font-size: 0;
            padding: 1px 5px;
        }

        .input-grid span {
            text-align: center;
            border: 1px solid #000;
            font-weight: bold;
            padding: 1px 6px;
            font-size: 0.6rem;
            width: 14px;
            display: inline-block;
        }

        .radio-group {
            display: flex;
            gap: 10px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Provinsi</td>
            <td></td>
            <td>:</td>
            <td>Jawa Timur</td>
        </tr>
        <tr>
            <td>Kabupaten / Kota</td>
            <td></td>
            <td>:</td>
            <td>Ponorogo</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td></td>
            <td>:</td>
            <td>Sambit</td>
        </tr>
        <tr>
            <td>Desa / Kelurahan</td>
            <td></td>
            <td>:</td>
            <td>Wringinanom</td>
        </tr>
        <tr>
            <td>Kode Wilayah</td>
            <td></td>
            <td>:</td>
            <td class="input-grid">
                <span>3</span><span>5</span><span>0</span><span>2</span><span>2</span><span>0</span><span>0</span><span>2</span>
            </td>
        </tr>
    </table>

    <div style="border: 1px solid black; position: absolute; top: 0; right:0; padding: 0 1.5em;">
        <strong style="font-size: 0.6rem; font-weight: bold;">F-2.01</strong>
    </div>

    <div class="form-section">
        <h3>FORMULIR PELAPORAN PENCATATAN SIPIL DI DALAM WILAYAH NKRI</h3>
        <label>Jenis Pelaporan Pencatatan Sipil : <strong>KELAHIRAN</strong></label>

        <!-- Tabel 1 -->
        <div class="form-group">
            <p style="font-weight: bolder; margin-left: 0.4em">DATA PELAPOR</p>
            <table class="table-form">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nik']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>No. Dok. Perjalanan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['no_dok_journey']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nationality']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. WNI</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">2. WNA</label>
                    </td>
                </tr>
                <tr style="margin-top:1px">
                    <td>Nomor HP/WA</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['no_wa']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
        <!-- Tabel 2 -->
        <div class="form-group">
            <p style="font-weight: bolder; margin-left: 0.4em">SAKSI I</p>
            <table class="table-form">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name_saksi']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nik_saksi']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nationality_saksi']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. WNI</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">2. WNA</label>
                    </td>
                </tr>
            </table>
            <p style="font-weight: bolder; margin-left: 0.4em; margin-top: 1em">SAKSI II</p>
            <table class="table-form">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name_saksi2']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nik_saksi2']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nationality_saksi2']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. WNI</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">2. WNA</label>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Tabel 3 -->
        <div class="form-group">
            <p style="font-weight: bolder; margin-left: 0.4em">DATA ORANG TUA</p>
            <table class="table-form">
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name_dad']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>NIK Ayah</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nik_dad']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Tempat lahir Ayah</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['place_born_dad']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Tanggal lahir Ayah</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 2.8em; vertical-align: bottom; padding-bottom: 2px">Tgl :</label>
                        @foreach (str_split(explode('-', $data['date_born_dad'])[2]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 2.8em; vertical-align: bottom; padding-bottom: 2px">Bln :</label>
                        @foreach (str_split(explode('-', $data['date_born_dad'])[1]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 2.8em; vertical-align: bottom; padding-bottom: 2px">Thn :</label>
                        @foreach (str_split(explode('-', $data['date_born_dad'])[0]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nationality_dad']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. WNI</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">2. WNA</label>
                    </td>
                </tr>
                <tr style="margin-top:1px">
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name_mom']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr style="margin-top:1px">
                    <td>NIK Ibu</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nik_mom']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr style="margin-top:1px">
                    <td>Tempat lahir Ibu</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['place_born_mom']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr style="margin-top:1px">
                    <td>Tanggal lahir Ibu</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 2.8em; vertical-align: bottom; padding-bottom: 2px">Tgl :</label>
                        @foreach (str_split(explode('-', $data['date_born_mom'])[2]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 2.8em; vertical-align: bottom; padding-bottom: 2px">Bln :</label>
                        @foreach (str_split(explode('-', $data['date_born_mom'])[1]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 2.8em; vertical-align: bottom; padding-bottom: 2px">Thn :</label>
                        @foreach (str_split(explode('-', $data['date_born_mom'])[0]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nationality_mom']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. WNI</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">2. WNA</label>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Tabel 4 -->
        <div class="form-group">
            <p style="font-weight: bolder; margin-left: 0.4em">DATA ANAK</p>
            <table class="table-form">
                <tr>
                    <td>No. Kartu keluarga</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['no_kk_anak']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Hubungan keluarga</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['hub_keluarga']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">1. Anak</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">2. Cucu</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">3. Famili Lain</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">4. Lainnya</label>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['gender_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">1. Laki-laki</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">2. Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Tempat dilahirkan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['place_birth_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">1. RS/RB</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">2. Puskesmas</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">3. Polindes</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">4. Rumah</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">5. Lainnya</label>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Kelahiran</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['place_birth_child2']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Hari dan tanggal lahir</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">Hari :</label>
                        @foreach (str_split($dayOfWeek) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">Tgl :</label>
                        @foreach (str_split(explode('-', $data['date_birth_child'])[2]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">Bln :</label>
                        @foreach (str_split(explode('-', $data['date_birth_child'])[1]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">Thn :</label>
                        @foreach (str_split(explode('-', $data['date_birth_child'])[0]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Pukul</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split(str_replace(':', '', $data['hour_birth_child'])) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelahiran</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['type_birth_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">1. Tunggal</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">2. Kembar 2</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">3. Kembar 3</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">4. Kembar 4</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">5. Lainnya</label>
                    </td>
                </tr>
                <tr>
                    <td>Kelahiran Ke</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['no_birth_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1.</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 3em; vertical-align: bottom; padding-bottom: 2px">2.</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 3em; vertical-align: bottom; padding-bottom: 2px">3.</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 3em; vertical-align: bottom; padding-bottom: 2px">4.</label>
                    </td>
                </tr>
                <tr>
                    <td>Penolong kelahiran</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['helper_birth']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. Dokter</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">2. Bidan/Perawat</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">3. Dukun</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px; text-transform:capitalize">4. Lainnya</label>
                    </td>
                </tr>
                <tr>
                    <td>Berat bayi</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['weight_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px; text-transform: lowercase;">kg</label>
                    </td>
                </tr>
                <tr>
                    <td>Panjang bayi</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['height_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px; text-transform: lowercase;">cm</label>
                    </td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['blood_type_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['religion_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 0.5em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">1. Islam</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">2. Kristen</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">3. Katholik</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">4. Hindu</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">5. Buddha</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">6. Khonghucu</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">7. Kepercayaan terhadap Tuhan YME</label>
                    </td>
                </tr>
                <tr>
                    <td>Kecacatan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['disability']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 0.5em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">1. Fisik</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">2. Netra</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">3. Rungu / Wicara</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">4. Fisik dan mental</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">5. Lainnya</label>
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nationality_child']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 0.5em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">1. WNI</label>
                        <label style="display: inline-block; font-size: 0.6rem; margin-left: 1.7em; vertical-align: bottom; padding-bottom: 2px; text-transform: capitalize;">2. WNA</label>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div style="margin-top:1rem; position: relative; font-size: 0.8rem">
        <div style="position: absolute; left: 5rem; text-align: center">
            <p>Mengetahui</p>
            <div style="text-align: left;">
                <p style="margin-bottom: 4rem">Petugas Pendaftaran</p>
                <p style="text-align: center;">BANDI</p>
            </div>
        </div>
    </div>

    <div style="position: relative; font-size: 0.8rem">
        <div style="position: absolute; right: 5rem; text-align: center">
            <p>Wringinanom, 20 April 2025</p>
            <div style="text-align: left;">
                <p style="margin-bottom: 4rem; text-align: center">Pelapor</p>
                <p style="text-align: center;">Patrick Star</p>
            </div>
        </div>
    </div>
</body>

</html>