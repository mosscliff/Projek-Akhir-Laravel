<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
class KendaraanController extends Controller
{
    public function index()
    {
        return view('crud-kendaraan');
    }
    public function show()
    {   $kendaraan = new Kendaraan;
        $items=$kendaraan->all();
        return view('dashboard',[''=>$items]);
    }
    public function store(Request $request)
    {
        $post = new Kendaraan;
        $post->Motor = $request->Motor;
        $post->Mobil = $request->Mobil;
        $post->Pesawat = $request->Pesawat;
        $post->Sepeda = $request->Sepeda;
        $post->Umum = $request->Umum;
        $post->save();
        return redirect('crud-kendaraan')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}