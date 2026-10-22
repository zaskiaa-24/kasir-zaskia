<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;

class JenjangController extends Controller
{
    public function index(Request $request)
    {
        // Filter search
        $jenjangs = Jenjang::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nama_jenjang', 'like', "%{$search}%")
                      ->orWhere('kode_jenjang', 'like', "%{$search}%");
            })
            ->paginate(10);

        return view('jenjang.index', compact('jenjangs'));
    }
}