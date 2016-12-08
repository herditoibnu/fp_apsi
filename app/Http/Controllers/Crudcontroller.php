<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use DB, Redirect, Validator, View, Auth;

use App\Http\Requests\validasilogin;

use App\Http\Requests\validasiregister;

use App\Http\Requests\validasitambah;

class Crudcontroller extends Controller
{
    public function tambahdata(validasitambah $data)
    {
        $nip_lecturer = $data->nip_lecturer;
        $name_lecturer = $data->name_lecturer;

        $data = [
            'nip_lecturer' => $nip_lecturer,
            'name_lecturer' => $name_lecturer,
        ];
        DB::table('dblecturer')->insert($data);
        return Redirect::to('/read')->with('message','berhasil menambah data');
    }

    public function lihatdata()
    {
    	$data = DB::table('dblecturer')->get();
    	return View::make('read')->with('dblecturer',$data);
    }

    public function hapusdata($nip_lecturer)
    {
    	DB::table('dblecturer')->where('nip_lecturer','=',$nip_lecturer)->delete();
    	return Redirect::to('/read')->with('message','berhasil menghapus data');
    }

    public function editdata($id)
    {
        $data = DB::table('siswa')->where('nip_lecturer','=',$nip_lecturer)->first();
        return View::make('formedit')->with('dblecturer',$data);
    }

    public function proseseditdata()
    {
        $data = [
            'nama' => Input::get('nama'),
            'alamat' => Input::get('alamat'),
            'kelas' => Input::get('kelas'),
        ];
        DB::table('siswa')->where('id','=',Input::get('id'))->update($data);
        return Redirect::to('/read')->with('message','berhasil mengedit data');
    }

    public function tambahlogin(validasiregister $data)
    {
        $username = $data->username;
        $password = bcrypt($data->password);

        $data = [
            'username' => $username,
            'password' => $password,
            'hak_akses' => 'dosen',
        ];

        DB::table('login')->insert($data);
        return Redirect::to('/login')->with('message','Berhasil Mendaftar');
    }

    public function login(validasilogin $validasi)
    {
        if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')]))
        {
            if(Auth::user()->hak_akses=="admin")
            {
                return Redirect::to('');
            }
            else
            {
                return Redirect::to('user');
            }
        }
        else
        {
            return Redirect::to('login')->with('message','Wrong username or password!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('login')->with('message','Logout successful!');
    }
}
