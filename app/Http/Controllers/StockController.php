<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stock;
class StockController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $stocks = stock::latest()->get();
        return view('stock.index', compact('stocks'));
    }

    public function view()
    {
        # code...
    }

    public function create()
    {
       return view('stock.add');
    }

    public function store()
    {
        $stock = new stock($this->validateStock());
        $stock->save();

        return redirect('home');
    }

    public function edit(stock $stock)
    {
       return view('stock.edit', compact('stock'));
    }

    public function update(stock $stock)
    {
        $stock->update($this->validateStock());
        return redirect( route('view-all-stock') );
    }

    public function destroy(stock $stock)
    {
        $stock->delete();
        return redirect(route ('view-all-stock')); 
    }

    protected function validateStock(){
        return request()->validate([
            'code' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'brand' => 'required'
        ]);
    }

}
