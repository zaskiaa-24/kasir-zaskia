<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index(Request $request)
    {
        // Filter search
        $jurusans = Jurusan::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nama_jurusan', 'like', "%{$search}%")
                      ->orWhere('kode_jurusan', 'like', "%{$search}%");
            })
            ->paginate(10);

        return view('jurusan.index', compact('jurusans'));
    }
}