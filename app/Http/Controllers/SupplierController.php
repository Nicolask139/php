<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('Supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('Supplier.create');
    }
    public function store(Request $request)
    {
        Supplier::create($request->all()); // atribuição em massa

        return redirect()->route('suppliers.index');
    }

    public function edit(string $id)
    {
        // Recupera o produto pelo seu ID ou falha se não for encontrada.
        $supplier = Supplier::findOrFail($id);
        return view('Supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('suppliers.index');
    }

    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('suppliers.index');
    }
}

