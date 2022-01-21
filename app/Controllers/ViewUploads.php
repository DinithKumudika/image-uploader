<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class ViewUploads extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $data = ['result' => $db->query("SELECT * FROM images;")];
        $db->close();
        return view('view_uploads', $data);
    }
}
