<?php


namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadFileService
{
    public static function uploadFile($file, $path)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs($path, $fileName, 'public');
        return $filePath;
    }

    public static function deleteFile($path)
    {
        if (Storage::disk('public')->exists($path))
            Storage::disk('public')->delete($path);
        else
            return false;
        return true;
    }

}
