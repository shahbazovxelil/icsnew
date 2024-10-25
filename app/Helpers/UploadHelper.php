<?php
namespace App\Helpers;
use Illuminate\Support\Facades\File;
use Request;
class UploadHelper
{
    //POSTMAN from-datadan  melumat gelende
    //            $icon = UploadHelper::upload('icon', $request->file('icon'), 'uploads/socials/' . time(), 'uploads/socials/');
    public static function upload($f, $file, $name, $target_location)
    {
        if (Request::hasFile($f)) {
            $filename = $name . '.' . $file->getClientOriginalExtension();
            $file->move($target_location, $filename);
            return $filename;
        } else {
            return null;
        }
    }


    public static function uploads($f, $files, $name, $target_location)
    {
        $filenames = [];

        if (Request::hasFile($f)) {
            foreach ($files as $key => $file) {
                $filename = $name . '-' . $key . '.' . $file->getClientOriginalExtension();
                $file->move($target_location, $filename);
                $filenames[] = $filename;
            }
            return $filenames;
        } else {
            return null;
        }
    }





//    POSTMAN da image update edende Data FORM_DATAdan gelirse
//$icon = UploadHelper::update(public_path('/'.$social->icon),$request->file('icon'), 'uploads/socials/');

    public static function update($path, $req_file, $location_file_folder)
    {
        if ($req_file == null) {
            return null;
        }

        if(File::exists($path))
        {
            File::delete($path);
        }
        $name = $location_file_folder .time() . '_.' . $req_file->getClientOriginalExtension();
        $req_file->move(public_path() . '/'.$location_file_folder, $name);
        return $name;
    }





    public static function deleteFile($location)
    {
        if (File::exists($location)) {
            File::delete($location);
        }
    }


}

