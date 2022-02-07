<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Database\Eloquent\Builder;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['data'] = book::all();
        return view('home/index');
    }
    // public function search(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $output = "";
    //         // $book = book::find(1);
    //         $products = book::where('judul', 'LIKE', '%' . $request->search . "%")->get();

    //         if ($products) {
    //             foreach ($products as $key => $product)
    //                 $output .= '<tr>' .
    //                     '<td>' . $product->id . '</td>' .
    //                     '<td>' . $product->judul . '</td>' .
    //                     '<td>' . $product->harga . '</td>' .

    //                     '</tr>';
    //         }
    //         return Response($output);
    //     }
    // }
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
        // $post = book::find(1);
        // var_dump($post);
        // $data = [
        //     'judul' => $request->judul,
        //     'harga' => $request->harga
        // ];
        // $d = book::create([
        //     'judul' => $request->judul,
        //     'harga' => $request->harga
        // ]);
        // return redirect('/');
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
}