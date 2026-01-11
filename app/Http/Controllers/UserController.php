<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = [
            (object)[
                'id' => 1,
                'name' => 'Andi Pratama',
                'username' => 'admin_andi',
                'role' => 'Admin',
                'password' => 'secret' // Hanya simulasi kolom
            ],
            (object)[
                'id' => 2,
                'name' => 'Siti Nurhaliza',
                'username' => 'kasir_siti',
                'role' => 'Kasir',
                'password' => 'secret'
            ],
            (object)[
                'id' => 3,
                'name' => 'Budi Santoso',
                'username' => 'gudang_budi',
                'role' => 'Staff Gudang',
                'password' => 'secret'
            ],
            (object)[
                'id' => 4,
                'name' => 'Dewi Persik',
                'username' => 'owner_dewi',
                'role' => 'Owner',
                'password' => 'secret'
            ],
        ];

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
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
