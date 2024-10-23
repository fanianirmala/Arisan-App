<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Illuminate\Http\Request;

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
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/list-arisan');
        }
        return redirect('/');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Login $login)
    {
        //
    }

    public function edit(Login $login)
    {
        //
    }

    public function update(Request $request, Login $login)
    {
        //
    }

    public function destroy(Login $login)
    {
        //
    }
}
