<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class Upload extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('home', ['errors' => []]);
    }

    public function upload()
    {
        $validationRule = [
            'image-upload' => [
                'label' => 'Image File',
                'rules' => 'uploaded[image-upload]'
                    . '|is_image[image-upload]'
                    . '|mime_in[image-upload,image/jpg,image/jpeg,image/gif,image/png]',
            ],
        ];
        if (!$this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('home', $data);
        }

        $img = $this->request->getFile('image-upload');

        if (!$img->hasMoved()) {
            $fileName = $img->store(); // store the image and return the file name
            $title = $_POST['title'];

            $filepath = '' . $fileName;

            $data = ['uploaded_flleinfo' => new File($filepath)];

            // Save the title and file name in the database
            $db = db_connect();
            $db->query("INSERT INTO images(imgTitle, imageFile) VALUES('$title', '$fileName');");
            $db->close();
        } else {
            $data = ['errors' => 'The file has already been moved.'];

            return view('home', $data);
        }
    }
}