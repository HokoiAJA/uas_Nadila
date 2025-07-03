<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CustomTable;

class CustomTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $custom_tables = CustomTable::all();
        return view('custom_table', compact('custom_tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('custom_table_creata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'field1' => 'required|string',
            'field2' => 'required|string',
            'description' => 'nullable|string',
        ]);
        CustomTable::create($validated);
        return redirect()->route('custom_table.index')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomTable $custom_table)
    {
        return view('custom_table_show', compact('custom_table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomTable $custom_table)
    {
        return view('custom_table_edit', compact('custom_table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomTable $custom_table)
    {
        $validated = $request->validate([
            'field1' => 'required|string',
            'field2' => 'required|string',
            'description' => 'nullable|string',
        ]);
        $custom_table->update($validated);
        return redirect()->route('custom_table.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomTable $custom_table)
    {
        $custom_table->delete();
        return redirect()->route('custom_table.index')->with('success', 'Data deleted successfully.');
    }
}
