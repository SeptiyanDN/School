<?php

namespace App\Http\Controllers\seminar;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeminarController extends Controller
{

    public function index()
    {
        return view('events.index');
    }

    public function registration_seminar(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'class' => 'required|numeric|between:9,12',
            'program_study' => 'required|string',
            'nis' => 'required|string',
        ], [
            'class.between' => 'Masukan Kelas Antara 9 Hingga 12.',
        ]);

        $seminar = new Seminar([
            'number_registration' => Str::random(10),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'class' => $request->class,
            'program_study' => $request->program_study,
            'nis' => $request->nis,
        ]);

        if ($seminar->save()) {
            return redirect()->route('index-seminar')
                ->with('success', 'Data seminar berhasil disimpan.');
        } else {
            return redirect()->route('index-seminar')
                ->with('error', 'Gagal menyimpan data seminar.');
        }

    }
}
