<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function landing()
    {
        $totalAduan = Pengaduan::where('nik', Auth::guard('masyarakat')->user()->nik)->count();
        return view('masyarakat.landing', compact('totalAduan'));
    }

    public function index()
    {
        $masyarakats = Masyarakat::latest()->paginate(10);
        return view('masyarakat.index', compact('masyarakats'));
    }

    public function delete($id)
    {
        if (Auth::guard('petugas')->user()->level == 'Petugas') {
            return back()->with('error', 'Anda tidak memiliki akses.');
        }

        $masyarakat = Masyarakat::findOrFail($id);
        $pengaduans = Pengaduan::where('nik', $masyarakat->nik)->get();
        foreach ($pengaduans as $pengaduan) {
            $tanggapans = Tanggapan::where('id_pengaduan', $pengaduan->id)->get();
            foreach ($tanggapans as $tanggapan) {
                $tanggapan->delete();
            }
            $pengaduan->delete();
        }
        $masyarakat->delete();

        return redirect()->route('masyarakat.index')->with('success', 'Berhasil menghapus masyarakat.');
    }
}
