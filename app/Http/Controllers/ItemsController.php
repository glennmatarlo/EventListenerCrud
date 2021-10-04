<?php

namespace App\Http\Controllers;
use App\Events\CrudEvent;
use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
            $items = Items::get();
            return view('itm.index', compact('items'));
        }

    public function create(){
        return view('itm.create');
    }

    public function edit(Items $item){
        return view('itm.edit', compact('item'));
    }

    public function delete(Items $item) {
        return view('itm.delete', compact('item'));   
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'description'     => 'required | string',
            'price'  => 'required|string',
            'price'  => 'required|string',

        ]);

        $item = Items::create($request->all());
        event(new CrudEvent("Created an item with ID#$item->id"));
        return redirect('/dashboard')->with('Message','Item Added.');
    }
    
    public function update(Request $request, Items $item) {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);       
        $item->update($request->all());
        event(new CrudEvent("Updated an item with ID#$item->id"));
        return redirect('/dashboard');        
    }

    public function destroy(Items $item, Request $request) {  
        $item->delete();
        event(new CrudEvent("Deleted an item with ID#$item->id"));
        return redirect("/dashboard");
    }
}
