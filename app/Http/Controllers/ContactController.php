<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\jabatan;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = DB::table('contact')->join('jabatan', 'contact.jabatan_id','=','jabatan.id')
                                        ->select('contact.*','jabatan.jabatan')
                                        ->get();
      //  $contact = Contact::with('jabatan')->paginate(2);
        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jab = Jabatan::all();
        return view('contact.create',compact('jab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = new Contact
        ([
            'namalengkap' => $request->input('namalengkap'),
            'alamat' => $request->input('alamat'),
            'profesi' => $request->input('profesi'),
            'jabatan_id'=>$request->input('jabatan_id'),
            'gaji' => $request->input('gaji'),
            'jumlahsaudara' => $request->input('jumlahsaudara')


        ]);
        $contact->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $jab = Jabatan::all();
        $contact = Contact::with('jabatan')->find($id);
        return view ('contact.edit', compact('contact','jab'));
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
        //  //dd($request);
        // $contact = Contact::find($id);
        // $contact->namalengkap = $request->input('Nama Lengkap');
        // $contact->alamat = $request->input('Alamat');
        // $contact->profesi = $request->input('Profesi');
        // $contact->jabatan_id = $request->input('jabatan_id');
        // $contact->gaji = $request->input('Gaji');
        // $contact->jumlahsaudara = $request->input('Jumlah Saudara');
        // $contact->save();
        // return redirect ('/');
    

      // dd($request);

        Contact::where('id', $id)
        ->update([
            
            'namalengkap' => $request->namalengkap,
            'alamat' =>$request->alamat,
            'profesi' =>$request->profesi,
            'jabatan_id' =>$request->jabatan_id,
            'gaji'=>$request->gaji,
            'jumlahsaudara'=>$request->jumlahsaudara,
        ]);
        
    return redirect('/')->with('success_update', ' ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/');
    }
}
