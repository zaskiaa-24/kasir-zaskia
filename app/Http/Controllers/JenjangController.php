<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;

class JenjangController extends Controller
{
    public function index(Request $request)
    {
        $jenjangs = Jenjang::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nama_jenjang', 'like', "%{$search}%");
            })
            ->paginate(10);

        return view('jenjang.index', compact('jenjangs'));
    }

    public function create()
    {
        return view('jenjang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenjang' => ['required', 'string', 'max:255'],
            'keterangan' => ['nullable', 'string', 'max:255'],
        ]);

        Jenjang::create($validated);

        return redirect()
            ->route('jenjang.index')
            ->with('success', 'Data jenjang berhasil ditambahkan.');
    }

    public function show(Jenjang $jenjang)
    {
        return view('jenjang.show', compact('jenjang'));
    }

    public function edit(Jenjang $jenjang)
    {
        return view('jenjang.edit', compact('jenjang'));
    }

    public function update(Request $request, Jenjang $jenjang)
    {
        $validated = $request->validate([
            'nama_jenjang' => ['required', 'string', 'max:255'],
            'keterangan' => ['nullable', 'string', 'max:255'],
        ]);

        $jenjang->update($validated);

        return redirect()
            ->route('jenjang.index')
            ->with('success', 'Data jenjang berhasil diperbarui.');
    }

    public function destroy(Jenjang $jenjang)
    {
        $jenjang->delete();

        return redirect()
            ->route('jenjang.index')
            ->with('success', 'Data jenjang berhasil dihapus.');
    }
}
