<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        // echo "register ngab";
        echo view('register_view');
    }

    public function submitRegister()
    {
        // buat model untuk proses insert ke tabel user
        $model = new UsersModel();
        $password = $this->request->getVar('password');
        $cpassword = $this->request->getVar('cpassword');
        if (strcmp($password, $cpassword) == 0) {



            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'nohandphone' => $this->request->getVar('nohandphone'),
                'email' => $this->request->getVar('email'),
            ];

            echo $model->insert($data);
            return redirect()->to(base_url('login'));

            // if ($model->insert($data)) {
            //     return redirect()->to('/login');
            // } else {
            //     echo "data tidak berhasil disimpan";
            // }
        } else {
            return redirect()->back()->withInput();
        }
    }
}
