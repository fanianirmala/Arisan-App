<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function postlogin(Request $request){
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Kredensial login yang akan dikirim ke API
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $url = config('app.base_url') . '/login';

        try {
            // Mengirim POST request ke API Express
            $response = Http::post($url, $credentials);

            // Cek jika respon berhasil
            if ($response->successful()) {
                // Mengambil data dari respon API
                $data = $response->json();

                // Simpan token JWT ke session
                if (isset($data['token'])) {
                    Session::put('token', $data['token']);
                }

                // Redirect ke halaman home dengan pesan sukses
                return redirect('/home')->with('success', 'Login berhasil');
            } else {
                // Jika login gagal, kembalikan ke halaman login dengan pesan error
                return redirect('/')->withErrors(['email' => 'Login gagal, periksa email dan password.']);
            }
        } catch (\Exception $e) {
            // Tangani error jika ada masalah pada API atau jaringan
            return redirect('/')->withErrors(['email' => 'Terjadi kesalahan. Coba lagi nanti.']);
        }
    }
}
