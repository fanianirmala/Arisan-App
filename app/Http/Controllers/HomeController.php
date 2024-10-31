<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function listArisan()
    {
        $token = Session::get('token'); // Ambil token dari session

        // Jika token ada, buat request ke API dengan token di header
        if ($token)
        {
            $url = config('app.base_url') . '/eventArisan';
            $response = Http::withToken($token)->get($url);

            if ($response->successful()) {
                $events = $response->json()['data']; // Data arisan
                return view('listArisan', compact('events'));
            } else {
                return back()->with('error', 'Gagal mengambil data arisan dari API.');
            }
        } else {
            return redirect('/')->with('error', 'Token tidak tersedia, silakan login lagi.');
        }
    }

    public function detailEvent()
    {
        return view('detailEventArisan');
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
