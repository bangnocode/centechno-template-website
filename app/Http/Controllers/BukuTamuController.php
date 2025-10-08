<?php

namespace App\Http\Controllers;

use App\Models\appModel\BukuTamuModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class BukuTamuController extends Controller
{

    public function showLogin()
    {
        return view('web_app.buku-tamu.login');
    }

    public function loginStore(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // penting untuk keamanan
            return redirect()->route('buku.tamu.dashboard.index');
        }

        return back()->with([
            'invalid' => 'Email atau password salah!',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // keluar dari session login
        $request->session()->invalidate(); // hapus semua data session
        $request->session()->regenerateToken(); // regenerasi CSRF token

        return redirect()->route('buku.tamu.login.index')->with('success', 'Anda telah logout.');
    }

    public function dashboard()
    {
        return view('web_app.buku-tamu.admin-dashboard');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = BukuTamuModel::select(['id', 'nama', 'alamat', 'asal', 'no_hp', 'tujuan_kunjungan', 'created_at']);
            return DataTables::of($data)->addIndexColumn()->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format('d/m/Y H:i') . ' WIB'; // contoh: 14-02-2025
            })->make(true);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web_app.buku-tamu.form-tamu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'asal' => $request->asal,
            'no_hp' => $request->no_hp,
            'tujuan_kunjungan' => $request->tujuan_kunjungan,
        ];
        BukuTamuModel::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BukuTamuModel::where('id', $id)->delete();

        return response()->json(['success' => true]);
    }
}
