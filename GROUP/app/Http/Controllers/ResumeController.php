<?php

namespace App\Http\Controllers;

use App\Models\informations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(informations $resume)
    {
        // $resume = informations::whereall();
        // dd($resume->id);

        return view('resume', ['resume' => $resume]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(informations $resume)
    {
        return view('edit', ['cv' => $resume]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, informations $resume)
    {
        // dd($request);

        if ($request->application_status) {
            $resume->update([
                'applicationStatus'=> $request->application_status
            ]);

            return redirect()->back();
        }

        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'max:10'],
            'summary' => ['required'],
            'address' => ['required'],
            'course' => ['nullable'],
            'civilStatus' => ['nullable'],
            'schoolName' => ['nullable'],
            'schoolYear' => ['nullable'],
            'skills1' => ['nullable', 'max:255'],
            'skills2' => ['max:255', 'nullable'],
            'skills3' => ['max:255', 'nullable'],
            'skills4' => ['max:255', 'nullable'],
            'applicationLink' => ['required', 'max:255'],
            'status' => ['required'],
            'certifications1' => ['max:255', 'nullable'],
            'certifications2' => ['max:255', 'nullable'],
        ]);

        $image = $resume->picture ? $resume->picture : null;

        if ($request->hasfile('image')) {
            if ($resume->picture) {
                Storage::disk('public')->delete($resume->picture);
            }

            $image = Storage::disk('public')->put('images', $request->image);
        }

        $resume->update([
            'name' => $request->name,
            'email' => $request->email,
            'picture' => $image,
            'contact' => $request->contact,
            'address' => $request->address,
            'summary' => $request->summary,
            'status' => $request->civilStatus,
            'course' => $request->course,
            'schoolName' => $request->schoolName,
            'schoolYear' => $request->schoolYear,
            'skills1' => $request->skills1,
            'skills2' => $request->skills2,
            'skills3' => $request->skills3,
            'skills4' => $request->skills4,
            'applicationLink' => $request->applicationLink,
            'applicationStatus' => $request->status,
            'certifications1' => $request->certifications1,
            'certifications2' => $request->certifications2,
        ]);

        return redirect()->back()->with('success', 'CV updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
