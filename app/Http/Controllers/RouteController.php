<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RouteController extends Controller
{
    public function eventArisanBaru()
    {
        return view('eventArisanBaru');
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6|max:12',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $url = config('app.base_url') . '/organizer/register';
        try {
            $response = Http::post($url, [
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                return redirect('/')->with('success', 'Registrasi berhasil!');
            } else {
                return redirect()->back()->withErrors(['error' => 'Registrasi gagal, coba lagi.']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan.']);
        }
    }
    public function viewProfile()
    {
        return view('viewProfile');
    }

    public function detailArisan()
    {
            return view('detail-arisan');
    }

    public function daftarUser()
    {
        return view('daftarUser');
    }
    
    

    public function dataTransaksi()
    {
        return view('detail-user-transaksi');
    }



    public function dataDetailUser()
{
}




    public function detailUser()
    {
        return view('detail-user');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
