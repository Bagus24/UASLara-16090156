<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\ModelEvent;
use App\ModelPeserta;
use App\ModelJadwal;


class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = ModelEvent::paginate(9);
    	return view('index', ['event' => $event]);
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function showAllEvent() 
    // {
    //     $events = Events::paginate(9);
    // 	return view('index', ['event' => $events]);
    // }

    public function deskripsiEvent($id) 
    {
        $event = ModelEvent::find($id);
        $jadwal1 = ModelJadwal::where('nama_event', $event->nama)->where('hari', 1)->get();
        $jadwal2 = ModelJadwal::where('nama_event', $event->nama)->where('hari', 2)->get();
        $jadwal3 = ModelJadwal::where('nama_event', $event->nama)->where('hari', 3)->get();
        $jadwal4 = ModelJadwal::where('nama_event', $event->nama)->where('hari', 4)->get();
        // return view('edit-event');
        return view('deskripsi-event', compact('event', 'jadwal1', 'jadwal2', 'jadwal3', 'jadwal4'));        
    }

    
        public function daftarPesertaEvent(Request $request){
            $messages = [
                'required' => 'Form tidak boleh ada yang kosong',
                'min' => 'Form harus diisi minimal 8 karakter',
                'max' => 'Form harus diisi maksimal 20 karakter',
            ];
    
            $this->validate($request, [
                'id_user' => 'required',
                'nama_event' => 'required',
                'nama'=> 'required',
                'email' => 'required',
                'no_hp' => 'required',
                'alamat' => 'required',
            ],$messages);
    
            $data =  new ModelPeserta();
            $data->id_user = $request->id_user;
            $data->nama_event = $request->nama_event;
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->no_hp = $request->no_hp;
            $data->alamat = $request->alamat;
            
            $data->save();
            return redirect('/')->with('alert-success','Kamu berhasil Register');
        }


    public function daftarPeserta(Request $request, $id) 
    {
        $event = ModelEvent::find($id);
        return view('daftar-peserta-event', ['event' => $event]);
    }
}
