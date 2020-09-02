<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\item;

class itemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showallmenu(){
        $items = item::all();
        return view('content.showallmenu')->with('items',$items);
    }
    public function showbreakfast(){
        $items = item::all();
        return view('content.breakfast')->with('items',$items);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.Additem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image_bath' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image_bath')){
            $fileNameWithExt = $request->file('image_bath')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('image_bath')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            $path = $request->file('image_bath')->storeAs('public/images/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.png';
        }

        $item = new Item();
        $item->name = $request->input('name');
        $item->Price = $request->input('Price');
        $item->item_cat_id = $request->input('ItemCat');
        $item->meal_type = $request->input('Mealtype');
        $item->avilabilty = $request->input('avilabilty');
        $item->image_bath = $fileNameToStore;
        $item->save();
        return redirect('/showallmenu')->with('success','item added successfully');
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
        $item = Item::find($id);
        return view('content.editItem')->with('item',$item);
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
        $this->validate($request,[
            'image_bath' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image_bath')){
            $fileNameWithExt = $request->file('image_bath')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('image_bath')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            $path = $request->file('image_bath')->storeAs('public/images/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.png';
        }

        $item = Item::find($id);
        $item->name = $request->input('name');
        $item->Price = $request->input('Price');
        $item->item_cat_id = $request->input('item_cat_id');
        $item->meal_type = $request->input('meal_type');
        $item->avilabilty = $request->input('avilabilty');
        $item->image_bath = $fileNameToStore;
        $item->save();
        return redirect('/showallmenu')->with('success','item edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/showallmenu');
    }
}
