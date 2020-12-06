<?php

namespace App\Http\Controllers;

/* use DB; */

use App\Worker;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $workers = DB::select('select * from workers'); */
        $workers = Worker::all();
        return view('workers/index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate(
            [
                'nama' => ['required'],
                'nip' => ['required', 'max:6', 'unique:workers'],
                'departemen' => ['required'],
                'jabatan' => ['required']
            ],
            [
                'nama.required' => 'Kolom nama harus di isi',
                'nip.required' => 'Kolom NIP harus di isi',
                'nip.unique' => 'Nomer id sudah ada, pilih nomer lain',
                'departemen' => 'Kolom departemen harus di isi',
                'jabatan' => 'Kolom jabatan harus di isi'
            ]
        );

        Worker::create(($request->all()));
        return redirect('/workers')->with('status', 'Data pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {

        return view('/workers/show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        return view('/workers/edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        Worker::where('id', $worker->id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'departemen' => $request->departemen,
            'jabatan' => $request->jabatan
        ]);

        return redirect('/workers')->with('status', 'Data Pegawai Behasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        Worker::destroy($worker->id);
        return redirect('/workers')->with('status', 'Data berhasil dihapus!');
    }
}
