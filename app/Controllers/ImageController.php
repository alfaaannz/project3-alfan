<?php

namespace App\Controllers;

use App\Models\ImageModel;
use CodeIgniter\Controller;

class Images extends Controller
{
    public function store()
    {
        helper(['form', 'url']);
        
        $model = new ImageModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/png]',
                'max_size[image,1024]',
            ],
        ])) {
            $file = $this->request->getFile('image');
            $imageName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $imageName);

            $model->save([
                'title' => $this->request->getPost('title'),
                'image' => $imageName,
            ]);

            return redirect()->to(base_url('admin/post'));
        } else {
            return redirect()->to(base_url('admin/post'))->with('errors', $this->validator->getErrors());
        }
    }
}