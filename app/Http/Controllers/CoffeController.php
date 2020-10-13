<?php

namespace App\Http\Controllers;

use App\Category;
use App\Coffe;
use Illuminate\Http\Request;
use DataTables;

class CoffeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Coffe::with('Category')->get();

            return Datatables::of($data)->addIndexColumn()->addColumn('option', function($row){
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem"><i class="fa fa-edit"></i></a>';
                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><i class="fa fa-trash"></i></a>';

                return $btn;
            })->rawColumns(['option'])->make(true);
        }

        $category = Category::get();

        return view('Coffe.index', compact('category'));
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
        Coffe::updateOrCreate(
            ['id' => $request->item_id],
            [
                'name' => $request->name,
                'harga' => $request->harga,
                'category_id' => $request->category_id
            ]
        );

        return response()->json(['success'=>'Item saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coffe  $coffe
     * @return \Illuminate\Http\Response
     */
    public function show(Coffe $coffe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coffe  $coffe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Coffe::find($id);

        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coffe  $coffe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coffe $coffe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coffe  $coffe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coffe::find($id)->delete();

        return response()->json(['success'=>'Item deleted successfully.']);
    }
}
