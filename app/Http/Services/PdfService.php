<?php

namespace App\Http\Services;

use App\Models\Kepindahan;
use App\Models\LetterPerpindahan;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use setasign\Fpdi\Fpdi;

class PdfService
{
    public function generate($modelClass, $view, $filenamePrefix, $id, $paperSize = [0, 0, 612, 1008])
    {
        $dataPdf = $modelClass::findOrFail($id);
        // return view($view, ["data" => $dataPdf]);

        $pdf = Pdf::loadView($view, ['data' => $dataPdf])->setPaper($paperSize);
        return $pdf->download($filenamePrefix . "_" . $dataPdf['name'] . '.pdf');
    }

    public function generateFilledPdf($id)
    {
        // Retrieve data from database
        $dataPdf = LetterPerpindahan::findOrFail($id);

        // Initialize PDF with FPDI
        $pdf = new Fpdi();
        $templatePath = public_path('assets/pdf/skpwni.pdf');

        // Import form template
        $pageCount = $pdf->setSourceFile($templatePath);
        $templateId = $pdf->importPage(1);
        $pdf->AddPage('L');
        $pdf->useTemplate($templateId);

        // Set font setting
        $pdf->SetFont('helvetica', '', 10);
        $pdf->SetTextColor(0, 0, 0);

        // Prepare data array
        $data = [
            'no_kk' => $dataPdf->no_kk,
            'nama_lengkap' => $dataPdf->nama_lengkap,
            'nik' => $dataPdf->nik,
            'no_wa' => $dataPdf->no_wa,
            'alamat_asal' => $dataPdf->alamat_asal,
            'rt_asal' => $this->formatPaddedNumberWithSpacing($dataPdf->rt_asal),
            'rw_asal' => $this->formatPaddedNumberWithSpacing($dataPdf->rw_asal),
            'kode_pos_asal' => $this->formatPaddedNumberWithSpacing($dataPdf->kode_pos_asal),
            'klasifikasi_kepindahan' => $dataPdf->klasifikasi_kepindahan,
            'alamat_pindah' => $dataPdf->alamat_pindah,
            'rt_pindah' => $this->formatPaddedNumberWithSpacing($dataPdf->rt_pindah),
            'rw_pindah' => $this->formatPaddedNumberWithSpacing($dataPdf->rw_pindah),
            'desa' => $dataPdf->desa,
            'kecamatan' => $dataPdf->kecamatan,
            'kabupaten' => $dataPdf->kabupaten,
            'provinsi' => $dataPdf->provinsi,
            'kode_pos_pindah' => $this->formatPaddedNumberWithSpacing($dataPdf->kode_pos_pindah),
            'no_telp' => $dataPdf->no_telp,
            'alasan_pindah' => $dataPdf->alasan_pindah,
            'jenis_kepindahan' => $dataPdf->jenis_kepindahan,
            'anggota_tidak_pindah' => $dataPdf->anggota_tidak_pindah,
            'anggota_pindah' => $dataPdf->anggota_pindah,
            'daftar_anggota_pindah' => $dataPdf->anggotaPindah,
            'tempat_surat' => 'Ponorogo',
            'updated_now' => Carbon::parse($dataPdf->updated_at)->locale('id')->translatedFormat('d F'),
            'petugas' => 'Jalu Sena P.',
            'nama_pemohon' => $dataPdf->nama_lengkap
        ];

        // Define field positions
        $fieldMapping = $this->getFieldMappings();

        // Fill form fields with data
        $this->fillFormFields($pdf, $fieldMapping, $data);


        // Return PDF as download response
        return response($pdf->Output('S'), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="filled-form-F-1.03.pdf"'
        ]);
    }

    /**
     * Format number with leading zeros
     */
    private function formatPaddedNumberWithSpacing($value, $padded = 3, $spacingCount = 3)
    {
        // Format the number to always have 3 digits with leading zeros
        $paddedValue = str_pad($value, $padded, "0", STR_PAD_LEFT);

        // Split the string into individual characters
        $chars = str_split($paddedValue);

        // Join with the specified number of spaces
        return implode(str_repeat(' ', $spacingCount), $chars);
    }

    /**
     * Get all field mappings with coordinates
     */
    private function getFieldMappings()
    {
        return [
            'no_kk' => ['x' => 60, 'y' => 27.3],
            'nama_lengkap' => ['x' => 60, 'y' => 32.3],
            'nik' => ['x' => 60, 'y' => 37.7],
            'no_wa' => ['x' => 215, 'y' => 37.7],
            'alamat_asal' => ['x' => 63.5, 'y' => 48.2],
            'rt_asal' => ['x' => 224.5, 'y' => 48.5],
            'rw_asal' => ['x' => 250.5, 'y' => 48.5],
            'kode_pos_asal' => ['x' => 76.8, 'y' => 64],
            'klasifikasi_kepindahan' => [
                '1' => ['x' => 64, 'y' => 69.5],
                '2' => ['x' => 64, 'y' => 74.5],
                '3' => ['x' => 64, 'y' => 80],
                '4' => ['x' => 206.3, 'y' => 69.5],
                '5' => ['x' => 206.3, 'y' => 74.5],
            ],
            'alamat_pindah' => ['x' => 64, 'y' => 85.7],
            'rt_pindah' => ['x' => 224.5, 'y' => 86],
            'rw_pindah' => ['x' => 250.5, 'y' => 86],
            'desa' => ['x' => 91, 'y' => 90.7],
            'kecamatan' => ['x' => 210, 'y' => 90.7],
            'kabupaten' => ['x' => 91, 'y' => 95.5],
            'provinsi' => ['x' => 210, 'y' => 95.5],
            'kode_pos_pindah' => ['x' => 76.8, 'y' => 100.5],
            'no_telp' => ['x' => 210, 'y' => 100.5],
            'alasan_pindah' => [
                '1' => ['x' => 64, 'y' => 105.5],
                '2' => ['x' => 64, 'y' => 110.7],
                '3' => ['x' => 118.5, 'y' => 105.5],
                '4' => ['x' => 118.5, 'y' => 110.7],
                '5' => ['x' => 180, 'y' => 105.5],
                '6' => ['x' => 180, 'y' => 110.7],
                '7' => ['x' => 225, 'y' => 105.5],
            ],
            'jenis_kepindahan' => [
                '1' => ['x' => 64, 'y' => 115.5],
                '2' => ['x' => 64, 'y' => 120],
                '3' => ['x' => 148, 'y' => 115.5],
                '4' => ['x' => 148, 'y' => 120],
            ],
            'anggota_tidak_pindah' => [
                '1' => ['x' => 64, 'y' => 125],
                '2' => ['x' => 113.8, 'y' => 125],
                '3' => ['x' => 180, 'y' => 125],
            ],
            'anggota_pindah' => [
                '1' => ['x' => 64, 'y' => 133.7],
                '2' => ['x' => 113.8, 'y' => 133.7],
            ],
            'daftar_anggota_pindah' => [
                'start_y' => 154.7,
                'y_increment' => 4.7,
                'columns' => [
                    'no' => ['x' => 18],
                    'nik' => ['x' => 34.5],
                    'nama' => ['x' => 100],
                    'status' => ['x' => 224.5],
                ]
            ],
            'tempat_surat' => ['x' => 205, 'y' => 178],
            'updated_now' => ['x' => 232, 'y' => 178],
            'petugas' => ['x' => 64, 'y' => 189.9],
            'nama_pemohon' => ['x' => 205, 'y' => 189.9],
        ];
    }

    /**
     * Fill all form fields on the PDF
     */
    private function fillFormFields($pdf, $fieldMapping, $data)
    {
        foreach ($fieldMapping as $field => $position) {
            // Handle checkbox-style fields
            $checkboxFields = [
                'klasifikasi_kepindahan',
                'alasan_pindah',
                'jenis_kepindahan',
                'anggota_tidak_pindah',
                'anggota_pindah'
            ];

            if (in_array($field, $checkboxFields)) {
                $value = $data[$field];
                if (isset($position[$value])) {
                    $pdf->SetXY($position[$value]['x'], $position[$value]['y']);
                    $pdf->Write(0, 'X');
                }
            }
            // Handle table of family members
            elseif ($field === 'daftar_anggota_pindah') {
                $this->fillFamilyMembersTable($pdf, $position, $data[$field]);
            }
            // Handle standard text fields
            else {
                $pdf->SetXY($position['x'], $position['y']);
                $pdf->Write(0, $data[$field]);
            }
        }
    }

    /**
     * Fill the table with family members data
     */
    private function fillFamilyMembersTable($pdf, $position, $members)
    {
        $currentY = $position['start_y'];

        foreach ($members as $index => $member) {
            // Number column
            $pdf->SetXY($position['columns']['no']['x'], $currentY);
            $pdf->Write(0, $this->formatPaddedNumberWithSpacing($index + 1, 2, 4));

            // NIK column
            $pdf->SetXY($position['columns']['nik']['x'], $currentY);
            $pdf->Write(0, $member['nik']);

            // Name column
            $pdf->SetXY($position['columns']['nama']['x'], $currentY);
            $pdf->Write(0, $member['nama']);

            // Status column
            $pdf->SetXY($position['columns']['status']['x'], $currentY);
            $pdf->Write(0, $member['status']);

            // Move to next row
            $currentY += $position['y_increment'];
        }
    }
}
