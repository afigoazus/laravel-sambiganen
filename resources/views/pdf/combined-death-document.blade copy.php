<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kematian</title>

    <style>
    /* Mengatur font default untuk keseluruhan dokumen */
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Aturan untuk memaksa pindah halaman */
        .page-break {
            page-break-after: always;
        }

        /* --- STYLES KHUSUS UNTUK HALAMAN SATU --- */
        #page-one p {
            margin: 0.2rem;
        }

        #page-one pre {
            margin: 0.2rem;
        }

        #page-one .min-width-23 {
            display: inline-block;
            min-width: 23px;
        }

        #page-one table {
            width: 100%;
            margin-top: 2rem;
            font-family: 'Times New Roman', Times, serif;
            border-collapse: collapse;
            border-spacing: 0; /* Menambahkan ini untuk konsistensi */
            font-size: 1rem; /* Menambahkan ini untuk konsistensi */
        }

        #page-one table tr td {
            padding: 3px 5px;
            vertical-align: top;
            line-height: 1.5; /* Menambahkan ini untuk konsistensi */
        }

        #page-one table tr td:nth-child(2) {
            text-align: center;
            width: 30px;
        }

        #page-one table tr td:nth-child(3) {
            width: 160px;
        }

        #page-one table tr td:nth-child(4) {
            width: 30px;
        }

        #page-one table tr td:nth-child(5) {
            text-align: center;
            width: 20px;
        }

        #page-one table tr td:nth-child(6) {
            width: auto;
        }


        /* --- STYLES KHUSUS UNTUK HALAMAN DUA --- */
        #page-two {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        #page-two p {
            margin: 0;
            padding: 0;
        }

        #page-two table {
            border-collapse: collapse;
            font-size: 0.7rem;
            border-spacing: 0;
            width: 100%; /* Menambahkan ini untuk konsistensi */
            margin-top: 0; /* Menambahkan ini untuk konsistensi */
        }
        
        #page-two tr {
            margin: 0;
            padding: 0;
        }

        #page-two td {
            margin: 0;
            padding: 0;
            line-height: 1;
        }

        #page-two table tr td {
            padding: 2px 5px;
            vertical-align: top;
        }

        #page-two .form-container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 20px;
        }

        #page-two .form-section {
            margin-bottom: 20px;
            font-size: 0.7rem;
        }

        #page-two .form-section label {
            margin-bottom: 0.4em;
            display: inline-block;
        }

        #page-two .form-section h3 {
            margin-bottom: 10px;
            text-align: center;
            font-size: 0.7rem;
            font-weight: bolder;
        }

        #page-two .form-group {
            margin-bottom: 10px;
            border: 1px solid black;
            padding: 2px;
        }

        #page-two .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        #page-two .table-form {
            font-size: 0.6rem;
        }

        #page-two .input-grid {
            text-transform: uppercase;
            font-size: 0;
            padding: 1px 5px;
        }

        #page-two .input-grid span {
            text-align: center;
            border: 1px solid #000;
            font-weight: bold;
            padding: 1px 5px;
            font-size: 0.6rem;
            width: 14px;
            display: inline-block;
        }

        #page-two .radio-group {
            display: flex;
            gap: 10px;
        }

        #page-two .footer {
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="page-one">
        
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
    </div>

    <div class="page-break"></div>
        
    <div id="page-two">
        
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
                            @php
                            $nameArray = str_split($data['name']); // Convert name into an array of characters
                            $totalSpans = 44; // Fixed span count
                            @endphp

                            @for ($i = 0; $i < $totalSpans; $i++)
                                @if (isset($nameArray[$i]))
                                @if ($nameArray[$i]===' ' )
                                <span>&nbsp;</span>
                                @else
                                <span>{{ $nameArray[$i] }}</span>
                                @endif
                                @else
                                <span>&nbsp;</span> <!-- Fill remaining spans with spaces -->
                                @endif
                                @endfor
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
                        <td style="width: 90px;">No. Dok. Perjalanan</td>
                        <td>:</td>
                        <td></td>
                        <td class="input-grid">
                            @for($i = 0; $i < 15; $i++)
                                <span>&nbsp;</span>
                                @endfor
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
                        <td style="width: 90px;">Nama</td>
                        <td>:</td>
                        <td></td>
                        <td class="input-grid">
                            @php
                            $nameArray = str_split($data['name_saksi']); // Convert name into an array of characters
                            $totalSpans = 44; // Fixed span count
                            @endphp

                            @for ($i = 0; $i < $totalSpans; $i++)
                                @if (isset($nameArray[$i]))
                                @if ($nameArray[$i]===' ' )
                                <span>&nbsp;</span>
                                @else
                                <span>{{ $nameArray[$i] }}</span>
                                @endif
                                @else
                                <span>&nbsp;</span> <!-- Fill remaining spans with spaces -->
                                @endif
                                @endfor
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
                        <td style="width: 90px;">Nama</td>
                        <td>:</td>
                        <td></td>
                        <td class="input-grid">
                            @php
                            $nameArray = str_split($data['name_saksi2']); // Convert name into an array of characters
                            $totalSpans = 44; // Fixed span count
                            @endphp

                            @for ($i = 0; $i < $totalSpans; $i++)
                                @if (isset($nameArray[$i]))
                                @if ($nameArray[$i]===' ' )
                                <span>&nbsp;</span>
                                @else
                                <span>{{ $nameArray[$i] }}</span>
                                @endif
                                @else
                                <span>&nbsp;</span> <!-- Fill remaining spans with spaces -->
                                @endif
                                @endfor
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
                        <td style="width: 90px;">Nama Ayah</td>
                        <td>:</td>
                        <td></td>
                        <td class="input-grid">
                            @php
                            $nameArray = str_split($data['name_dad']); // Convert name into an array of characters
                            $totalSpans = 44; // Fixed span count
                            @endphp

                            @for ($i = 0; $i < $totalSpans; $i++)
                                @if (isset($nameArray[$i]))
                                @if ($nameArray[$i]===' ' )
                                <span>&nbsp;</span>
                                @else
                                <span>{{ $nameArray[$i] }}</span>
                                @endif
                                @else
                                <span>&nbsp;</span> <!-- Fill remaining spans with spaces -->
                                @endif
                                @endfor
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
                        <td style="width: 90px;">Nama Ibu</td>
                        <td>:</td>
                        <td></td>
                        <td class="input-grid">
                            @php
                            $nameArray = str_split($data['name_mom']); // Convert name into an array of characters
                            $totalSpans = 44; // Fixed span count
                            @endphp

                            @for ($i = 0; $i < $totalSpans; $i++)
                                @if (isset($nameArray[$i]))
                                @if ($nameArray[$i]===' ' )
                                <span>&nbsp;</span>
                                @else
                                <span>{{ $nameArray[$i] }}</span>
                                @endif
                                @else
                                <span>&nbsp;</span> <!-- Fill remaining spans with spaces -->
                                @endif
                                @endfor
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
                        <td style="width: 90px;">Nama Lengkap</td>
                        <td>:</td>
                        <td></td>
                        <td class="input-grid">
                            @php
                            $nameArray = str_split($data['name_death']); // Convert name into an array of characters
                            $totalSpans = 44; // Fixed span count
                            @endphp

                            @for ($i = 0; $i < $totalSpans; $i++)
                                @if (isset($nameArray[$i]))
                                @if ($nameArray[$i]===' ' )
                                <span>&nbsp;</span>
                                @else
                                <span>{{ $nameArray[$i] }}</span>
                                @endif
                                @else
                                <span>&nbsp;</span> <!-- Fill remaining spans with spaces -->
                                @endif
                                @endfor
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
    </div>
</body>
</html>