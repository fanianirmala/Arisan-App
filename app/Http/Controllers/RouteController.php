<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


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

            if ($response->successful())  {
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
            return view('detailEventArisan');
    }

    public function daftarUser()
    {
        $token = Session::get('token');

        if ($token) {
            $url = config('app.base_url') . '/user';

            try {
                $response = Http::withToken($token)->get($url);

                if ($response->successful()) {
                    $users = $response->json()['data'];
                    return view('daftarUser', compact('users'));
                } else {
                    return back()->with('error', 'Gagal mengambil data user dari API.');
                }
            } catch (\Exception $e) {
                return back()->with('error', 'Terjadi kesalahan dalam mengambil data user.');
            }
        } else {
            return redirect('/')->with('error', 'Token tidak tersedia, silakan login lagi.');
        }
    }
    public function dataDetailUser($id)
    {
        $token = session()->get('token');
    
        if ($token) {
            $url = config('app.base_url') . "/user/{$id}";
            $response = Http::withToken($token)->get($url);
            if ($response->successful()) {
                $data = $response->json();
                if (isset($data['data'])) {
                    $details = $data['data'];
                    $transactions = $details['transaction'] ?? []; 
                    return view('dataDetailUser', compact('details', 'transactions'));
                } else {
                    return back()->with('error', 'Data tidak tersedia dari API.');
                }
            } else {
                return back()->with('error', 'Gagal mengambil data dari API. Status: ' . $response->status());
            }
        } else {
            return redirect('/')->with('error', 'Token tidak tersedia, silakan coba lagi.');
        }
    }
    
    public function deleteEvent($id)
{
    $token = Session::get('token'); // Get the token from session

    if ($token) {
        $url = config('app.base_url') . "/eventArisan/$id";
        $response = Http::withToken($token)->delete($url);

        if ($response->successful()) {
            return redirect()->route('list-arisan')->with('success', 'Event Arisan berhasil dihapus.');
        } else {
            // Log the error or inspect response details if needed
            return back()->with('error', 'Gagal menghapus event arisan dari API.');
        }
    } else {
        return redirect('/')->with('error', 'Token tidak tersedia, silakan login lagi.');
    }
}

}


