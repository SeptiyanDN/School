<?php

namespace App\Http\Controllers\seminar;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use App\Models\SeminarParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeminarParticipantsController extends Controller
{
    public function index()
    {
        $seminars = Seminar::all(); // Mengambil semua data seminar

        $pageConfigs = ['myLayout' => 'blank'];
        return view('seminar.form-seminar', ['pageConfigs' => $pageConfigs, 'seminars' => $seminars]);
    }
    public function registration_seminar(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'class' => 'required|numeric|between:9,12',
            'program_study' => 'required|string',
            'nis' => 'required|string',
            'id_seminar' => 'required|numeric',
        ], [
            'class.between' => 'Masukan Kelas Antara 9 Hingga 12.',
        ]);

        $seminar = new SeminarParticipant([
            'number_registration' => Str::random(10),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'class' => $request->class,
            'program_study' => $request->program_study,
            'nis' => $request->nis,
            'id_seminar' => $request->id_seminar,
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
