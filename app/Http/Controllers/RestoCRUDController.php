<?php
namespace App\Http\Controllers;
use App\Models\Resto;
use Illuminate\Http\Request;
class RestoCRUDController extends Controller
{

public function index()
{
$data['restos'] = Resto::orderBy('id','desc')->paginate(5);
return view('restos.index', $data);
}

public function create()
{
return view('restos.create');
}

public function store(Request $request)
{
$request->validate([
'nama' => 'required',
'email' => 'required',
'alamat' => 'required'
]);

$resto = new Resto;
$resto->nama = $request->nama;
$resto->email = $request->email;
$resto->alamat = $request->alamat;
$resto->makanan = $request->makanan;
$resto->minuman = $request->minuman;
$resto->save();
return redirect()->route('restos.index')
->with('success','resto has been created successfully.');
}

public function show(Resto $resto)
{
return view('restos.show',compact('resto'));
} 

public function edit(Resto $resto)
{
return view('restos.edit',compact('resto'));
}

public function update(Request $request, $id)
{
$request->validate([
'nama' => 'required',
'email' => 'required',
'alamat' => 'required',
'makanan' => 'required',
'minuman' => 'required',
]);
$resto = Resto::find($id);
$resto->nama = $request->nama;
$resto->email = $request->email;
$resto->alamat = $request->alamat;
$resto->makanan = $request->makanan;
$resto->minuman = $request->minuman;
$resto->save();
return redirect()->route('restos.index')
->with('success','Company Has Been updated successfully');
}

public function destroy(Resto $resto)
{
$resto->delete();
return redirect()->route('restos.index')
->with('success','Company has been deleted successfully');
}
}