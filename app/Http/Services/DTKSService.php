<?php

namespace App\Http\Services;

use App\Models\Dtks;

class DTKSService
{
    public function store($data)
    {
        $images = [
            'image-ktp',
            'image-kk',
            'image-rumah',
            'image-lantai'
        ];

        $filePaths = [];

        foreach ($images as $inputName) {
            if ($data->hasFile($inputName)) {
                // Generate unique filename with timestamp and random string
                $filename = time() . '-' . uniqid() . '.' . $data->file($inputName)->getClientOriginalExtension();

                // Store the image in the appropriate folder
                $data->file($inputName)->storeAs("", $filename, 'public');

                // Get the file name so we can save it to db
                $filePaths[$inputName] = $filename;
            }
        }

        // Store in the database
        return Dtks::create([
            'name' => $data['name'],
            'rt/rw' => $data['rt/rw'],
            'foto_ktp' => $filePaths['image-ktp'],
            'foto_kk' => $filePaths['image-kk'],
            'foto_rumah' => $filePaths['image-rumah'],
            'foto_lantai_rumah' => $filePaths['image-lantai'],
        ]);
    }
}
