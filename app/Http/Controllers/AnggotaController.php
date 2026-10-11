<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'phone' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
        ]);

        Member::create($validated);

        return redirect()
            ->route('anggota.create')
            ->with('success', 'Anggota berhasil ditambahkan!');
    }
}
