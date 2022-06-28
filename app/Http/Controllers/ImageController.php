<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index(Request $request, $path, $ext)
    {
        $name = $path . '.' . $ext;
        $imagedir = $_SERVER['DOCUMENT_ROOT'] .config('app.asset_url'). 'images/' . $name;

        if (!File::exists($imagedir)) {
            $imagedir =  $_SERVER['DOCUMENT_ROOT'] .config('app.asset_url'). 'images/do_not_delete/do_not_delete.png';
        }

        header('Content-type: image/' . $ext);
        header("Content-Length: " . filesize($imagedir));
        ob_clean();
        flush();

        return file_get_contents($imagedir);
    }
}
