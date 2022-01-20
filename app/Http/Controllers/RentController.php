<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Http\Requests\StoreRentRequest;
use App\Http\Requests\UpdateRentRequest;
use Illuminate\Support\Facades\DB;


class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rent = Rent::all();
    	// $customer = DB::table('customer')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['rent' => $rent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create-rent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRentRequest $request)
    {
        //
        $rent = new Rent();
        DB::table('rent')->insert([
            'kode_rent' => $request -> kode_rent,
            'kode_customer' => $request -> kode_customer,
            'kode_kendaraan' => $request -> kode_kendaraan,
            'no_kendaraan' => $request -> no_kendaraan,
            'harga' => $request -> harga,
            'tanggal_sewa' => $request -> tanggal_sewa,
            'tanggal_kembali' => $request -> tanggal_kembali
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $id)
    {
        //
        $rent = Rent::find($id);
        return view('edit-rent',compact('rent',$rent));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRentRequest  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRentRequest $request, Rent $id)
    {
        //
        $rent = Rent::find($request->id);
        $rent -> kode_rent = $request -> kode_rent;
        $rent -> kode_customer = $request -> kode_customer;
        $rent -> kode_kendaraan = $request -> kode_kendaraan;
        $rent -> no_kendaraan = $request -> no_kendaraan;
        $rent -> harga = $request -> harga;
        $rent -> tanggal_sewa = $request -> tanggal_sewa;
        $rent -> tanggal_kembali = $request -> tanggal_kembali;

        $rent->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rent = Rent::findOrFail($id);
        $rent -> delete();
        return redirect('/#section-rent-data');
    }

}
