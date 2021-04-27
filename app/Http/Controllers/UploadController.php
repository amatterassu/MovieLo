<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetails;

class UploadController extends Controller
{
    /*
    public function index() {
        return view('upload_file');
    }
    public function showUploadFile(Request $request) {
        $file = $request->file('image');

        echo 'File name: '.$file->getClientOriginalName();
        echo '<br>';

        echo 'File extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        echo 'File Size: '.$file->getSize();
        echo '<br>';

        echo 'File Mime Type: '.$file->getMimeType();
        echo '<br>';

        $destionationPath = 'docs';
        $file -> move($destionationPath,$file->getClientOriginalName());
    } */
    public function uploadForm() {
        return view('upload_form');
    }
    public function uploadSubmit(Request $request) {
        $this->validate($request, [
            'photos' => 'required',
        ]);
        if($request->hasFile('photos')) {
            $allowedfileExtension=['jpg', 'png'];
            $files = $request->file('photos');
            foreach($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension);
                if ($check) {
                    $items = Item::create($request->all());
                    foreach ($request->photos as $photo) {
                        $filename = $photo -> store('photos');
                        ItemDetails::create([
                            'item_id' => $items->id,
                            'filename' => $filename
                        ]);
                    }
                    echo "Upload Successfully";
                }
                else {
                    echo '<div><strong>Warning!</strong> Sorry Only Upload png and jpg</div>';
                }
            }
        }
    }
}
