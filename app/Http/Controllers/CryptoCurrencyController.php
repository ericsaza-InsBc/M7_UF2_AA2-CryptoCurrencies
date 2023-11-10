<?php

namespace App\Http\Controllers;

use App\Models\CryptoCurrency;
use App\Http\Requests\StoreCryptoCurrencyRequest;
use App\Http\Requests\UpdateCryptoCurrencyRequest;

class CryptoCurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCryptoCurrencyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CryptoCurrency $cryptoCurrency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CryptoCurrency $cryptoCurrency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCryptoCurrencyRequest $request, CryptoCurrency $cryptoCurrency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CryptoCurrency $cryptoCurrency)
    {
        //
    }
}
