<?php
namespace App\Http\Controllers;
use App\Models\Band;
use Illuminate\Http\Request;
class BandCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['bands'] = Band::orderBy('id','desc')->paginate(5);
return view('bands.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('bands.create');
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
$band = new Band;
$band->nama = $request->nama;
$band->email = $request->email;
$band->kota = $request->kota;
$band->stadion = $request->stadion;
$band->maskot = $request->maskot;
$band->save();
return redirect()->route('bands.index')
->with('success','Company has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Band  $company
* @return \Illuminate\Http\Response
*/
public function show(Band $band)
{
return view('bands.show',compact('band'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Band $band)
{
return view('bands.edit',compact('band'));
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
$band = Band::find($id);
$band->nama = $request->nama;
$band->email = $request->email;
$band->kota = $request->kota;
$band->stadion = $request->stadion;
$band->maskot = $request->maskot;
$band->save();
return redirect()->route('bands.index')
->with('success','Company Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Band $band)
{
$band->delete();
return redirect()->route('bands.index')
->with('success','Company has been deleted successfully');
}
}