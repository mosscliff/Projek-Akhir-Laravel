<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rokok;
class RokokController extends Controller
{
    public function index()
    {
        return view('crud-rokok');
    }
    public function show()
    {   $hewan = new Rokok;
        $data=$hewan->all();
        return view('dashboard',['data'=>$data]);
    }
    public function store(Request $request)
    {
        $post = new Rokok;
        $post->Ikan = $request->Ikan;
        $post->Mamalia = $request->Mamalia;
        $post->Reptil = $request->Reptil;
        $post->Unggas = $request->Unggas;
        $post->Amfibi = $request->Amfibi;
        $post->save();
        return redirect('crud-rokok')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}