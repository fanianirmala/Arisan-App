<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function eventArisanBaru()
    {
        return view('event-arisan-baru');
    }
    public function register()
    {
        return view('register');
    }

<<<<<<< HEAD
    public function viewProfile()
    {
        return view('viewProfile');
    }
=======
   public function detailarisan()
   {
        return view('detail-arisan');
   }

    /**
     * Show the form for creating a new resource.
     */
>>>>>>> 490d59a83177b0d334fea6b0860cf10377ad75a8

    public function daftarUser()
    {
        return view('daftarUser');
    }

    public function dataTransaksi()
    {
        return view('detail-user-transaksi');
    }

    public function dataPersonal()
    {
        return view('detailUser-dataPersonal');
    }

    public function detailUser()
    {
        return view('detail-user');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
