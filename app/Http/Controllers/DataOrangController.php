<?php

namespace App\Http\Controllers;

use App\DataOrang;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;
class DataOrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {
      return datatables()->of(DataOrang::all())->make(true);
    }

    public function index()
    {
        return view('datatables');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mengambil Semua Inputan Data Sebagai Array
         $input = $request->all();

          DataOrang::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Data Successfully Added'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataOrang  $dataOrang
     * @return \Illuminate\Http\Response
     */
    public function show(DataOrang $dataOrang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataOrang  $dataOrang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Nama = DataOrang::findOrFail($id);
        return $Nama;
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataOrang  $dataOrang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { 
        $input = $request->all();
        $Nama =DataOrang::findOrFail($id);

        $Nama->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Data Successfully Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataOrang  $dataOrang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Nama = DataOrang::findOrFail($id);

        DataOrang::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Data Successfully Deleted'
        ]);
    }
    public function apiData()
    {
        $Nama = DataOrang::all();
 
        return Datatables::of($Nama)
            ->addColumn('action', function($Nama){
                return '<a onclick="editForm('. $Nama->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                       '<a onclick="deleteData('. $Nama->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

}
