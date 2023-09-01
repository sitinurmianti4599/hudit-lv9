<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DataMasterController extends Controller
{
    public function index() {
        $users = User::all();
        $services = Service::all();
        $files = File::all();

        return view('data-master', [
            'users' => $users,
            'services' => $services,
            'files' => $files,
        ]);
    }

  
    public function showakun() {
        $users = User::all();

        return view('master-akun', [
            'users' => $users,
        ]);
    }

    public function showlayanan() {
        $services = Service::all();
      

        return view('master-layanan', [
            'services' => $services,
        ]);
    }

    public function showberkas() {
        $files = File::all();

        return view('master-berkas', [
            'files' => $files,
        ]);
    }

}
