<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
        return view('dataDetailUser');
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
