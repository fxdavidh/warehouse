<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('items')->paginate(10);
        return view('home', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:500|string|min:3',
            'location' => 'required|max:500|string|min:3',
            'qty' => 'required|max:1000000|integer',
            'image' => 'image|nullable|max:1999'
        ]);
        
        $item = new Item;
        $item->name = $request->get('name');
        $item->location = $request->get('location');
        $item->qty = $request->get('qty');
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $file = $fileName.'_'.$item->name.'.'.$ext;
            $path = $request->file('image')->storeAs('public/images', $file);
            $item->image = $file;
        }
        else {
            $item->image = 'noimage.jpg';
        }

        $item->save();
        return redirect('/home');
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
    public function edit(item $item)
    {
        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        $item->update(
            $request->validate([
                'name' => 'required|max:500|string|min:3',
                'location' => 'required|max:500|string|min:3',
                'qty' => 'required|max:1000000|integer',
                'image' => 'image|nullable|max:1999'
            ])
        );
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete();
        return redirect('home');
    }
}
