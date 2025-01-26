<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $logs = Log::all();
        return view('log.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('log.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $log = new Log();
        $log->user_id = auth()->id();
        $log->date = $request->date;
        $log->description = $request->description;
        $log->status = 'pending';
        $log->save();
        return redirect()->route('log.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $log = Log::findOrFail($id);
        return view('log.edit', compact('log'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $log = Log::findOrFail($id);
        $log->date = $request->date;
        $log->description = $request->description;
        $log->save();
        return redirect()->route('log.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $log = Log::findOrFail($id);
        $log->delete();
        return redirect()->route('log.index');
    }

    public function verify($id, Request $request)
    {
        $log = Log::findOrFail($id);
        $log->status = $request->status;
        $log->save();
        return redirect()->back()->with('success', 'Log berhasil diverifikasi.');
    }
}
