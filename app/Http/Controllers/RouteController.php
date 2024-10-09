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
    public function detailUser()
    {
        return view('detail-user');
    }
    // public function sidebar()
    // {
    //     //
    // }
    // public function table()
    // {
    //     //
    // }

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
