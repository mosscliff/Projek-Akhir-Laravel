<?php
namespace App\Http\Controllers;
use App\Models\Bola;
use Illuminate\Http\Request;
class BolaCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['bolas'] = Bola::orderBy('id','desc')->paginate(5);
return view('bolas.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('bolas.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'nama' => 'required',
'email' => 'required',
'kota' => 'required'
]);
$bola = new Bola;
$bola->nama = $request->nama;
$bola->email = $request->email;
$bola->kota = $request->kota;
$bola->stadion = $request->stadion;
$bola->maskot = $request->maskot;
$bola->save();
return redirect()->route('bolas.index')
->with('success','Company has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\bola  $company
* @return \Illuminate\Http\Response
*/
public function show(Bola $bola)
{
return view('bolas.show',compact('bola'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Bola $bola)
{
return view('bolas.edit',compact('bola'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'nama' => 'required',
'email' => 'required',
'kota' => 'required',
'stadion' => 'required',
'maskot' => 'required',
]);
$bola = Bola::find($id);
$bola->nama = $request->nama;
$bola->email = $request->email;
$bola->kota = $request->kota;
$bola->stadion = $request->stadion;
$bola->maskot = $request->maskot;
$bola->save();
return redirect()->route('bolas.index')
->with('success','Company Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Bola $bola)
{
$bola->delete();
return redirect()->route('bolas.index')
->with('success','Company has been deleted successfully');
}
}