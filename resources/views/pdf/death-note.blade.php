<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Kematian</title>
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
        <label>Jenis Pelaporan Pencatatan Sipil : <strong>KEMATIAN</strong></label>

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
            <p style="font-weight: bolder; margin-left: 0.4em">DATA KEMATIAN</p>
            <table class="table-form">
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['nik_death']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['name_death']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kematian</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">Tgl :</label>
                        @foreach (str_split(explode('-', $data['date_death'])[2]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">bln :</label>
                        @foreach (str_split(explode('-', $data['date_death'])[1]) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="font-size: 0.6rem; text-transform: capitalize; display: inline-block; margin-left: 1em; margin-right: 1.3em; vertical-align: bottom; padding-bottom: 2px">Thn :</label>
                        @foreach (str_split(explode('-', $data['date_death'])[0]) as $char)
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
                        @foreach (str_split(str_replace(':', '', $data['hour_death'])) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Sebab Kematian</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['caused_death']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; text-transform: capitalize; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. Sakit biasa/tua</label>
                        <label style="display: inline-block; text-transform: capitalize; font-size: 0.6rem; margin-left: 3.3em; vertical-align: bottom; padding-bottom: 2px">2. Wabah penyakit</label>
                        <label style="display: inline-block; text-transform: capitalize; font-size: 0.6rem; margin-left: 2.5em; vertical-align: bottom; padding-bottom: 2px">3. Kecelakaan</label>
                        <div>
                            <label style="display: inline-block; text-transform: capitalize; font-size: 0.6rem; margin-left: 4em; vertical-align: bottom; padding-bottom: 2px">4. Kriminalitas</label>
                            <label style="display: inline-block; text-transform: capitalize; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">5. Bunuh diri</label>
                            <label style="display: inline-block; text-transform: capitalize; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">6. Lainnya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Kematian</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['place_death']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Yang menerangkan</td>
                    <td>:</td>
                    <td></td>
                    <td class="input-grid">
                        @foreach (str_split($data['info_death']) as $char)
                        @if ($char === ' ')
                        <span>&nbsp;</span>@else<span>{{ $char }}</span>
                        @endif
                        @endforeach
                        <label style="display: inline-block; text-transform:capitalize; font-size: 0.6rem; margin-left: 1em; vertical-align: bottom; padding-bottom: 2px">1. Dokter</label>
                        <label style="display: inline-block; text-transform:capitalize; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">2. Tenaga Kesehatan</label>
                        <label style="display: inline-block; text-transform:capitalize; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">3. Kepolisian</label>
                        <label style="display: inline-block; text-transform:capitalize; font-size: 0.6rem; margin-left: 5em; vertical-align: bottom; padding-bottom: 2px">4. Lainnya</label>
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
            <p>Wringinanom, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
            <div style="text-align: left;">
                <p style="margin-bottom: 4rem; text-align: center">Pelapor</p>
                <p style="text-align: center;">Patrick Star</p>
            </div>
        </div>
    </div>
</body>

</html>