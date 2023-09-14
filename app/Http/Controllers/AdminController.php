<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tb_jurusan;
use App\Models\Tb_pilih;
use App\Models\Tb_kandidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index()
    {
        $data = User::all();
        return view('master', compact('data'));
    }
    function dptdelete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/pemirauser');
    }
    function deleteall()
    {
        User::where('level', 'user')->delete();
        return redirect('/adminpemira/delete/all');
    }

    function datajurusan()
    {
        $data = tb_jurusan::all();
        return view('datajurusan', compact('data'));
    }
    function adddatajurusan(Request $request)
    {
        $data = new tb_jurusan();
        $data->nm_jurusan = $request->nm_jurusan;
        $data->save();
        return redirect()->back();
    }
    function deldatajurusan($id)
    {
        $data = tb_jurusan::find($id);
        $data->delete();
        return redirect()->back();
    }

    function datacalon()
    {
        $data = Tb_kandidat::all();
        return view('datacalon', compact('data'));
    }
    function adddatacalon(Request $request)
    {
        $data = new Tb_kandidat;
        $data->nim = $request->nim;
        $data->nm_kandidat = $request->nm_kandidat;
        $data->nomor = $request->nomor;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $photo = $request->file('photo');
        if ($photo) {
            $photoname = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('kandidat'), $photoname);
            $data->photo = $photoname;
        }
        $data->save();
        return redirect()->back();
    }
    function postdatacalon(Request $request, $id)
    {
        $data = Tb_kandidat::find($id);
        $data->nim = $request->nim;
        $data->nm_kandidat = $request->nm_kandidat;
        $data->nomor = $request->nomor;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $photo = $request->file('photo');
        if ($photo) {
            $photoname = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('kandidat'), $photoname);
            $data->photo = $photoname;
        }
        $data->save();
        return redirect('/adminpemira/datacalon');
    }

    function editdatacalon($id)
    {
        $data = Tb_kandidat::find($id);
        return view('editcalon', compact('data'));
    }
    function deldatacalon($id)
    {
        $data = Tb_kandidat::find($id);
        $data->delete();
        return redirect()->back();
    }
    function datajrs()
    {
        $data = tb_jurusan::all();
        return view('datadpt', compact('data'));
    }
    function adddatadpt(Request $request)
    {
        $data = new User;
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->back();
    }

    function hasilvote()
    {
        $totaldpt = User::count();
        $dptmemilih = Tb_pilih::count();
        $tdkmemilih = $totaldpt - $dptmemilih;
        $data = Tb_kandidat::all();
        return view('hasilvote', ['totaldpt' => $totaldpt, 'dptmemilih' => $dptmemilih, 'data' => $data, 'tdkmemilih' => $tdkmemilih]);
    }

    // function countdpt(){
    //     $count = User::all();
    //     return view('hasilvote', compact('count'));
    // }

    function daftarhadir()
    {
        $totaldpt = User::count();
        $dptmemilih = Tb_pilih::count();
        $tdkmemilih = $totaldpt - $dptmemilih;
        $data = User::all();
        return view('daftarhadir', ['totaldpt' => $totaldpt, 'dptmemilih' => $dptmemilih, 'data' => $data, 'tdkmemilih' => $tdkmemilih]);
    }

    //user

    function pemiluser()
    {
        $data = Tb_kandidat::all();
        return view('vote', compact('data'));
    }

    function gagal()
    {
        return view('gagal');
    }
    function success()
    {
        return view('succes');
    }
}
