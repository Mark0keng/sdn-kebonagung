<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        return view('dashboard.staff.index', [
            'staffs' => Staff::paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'nip' => ['nullable'],
            'title' => ['required'],
            'image' => ['nullable', 'image', 'file', 'max:1024'],
        ]);
        
        if($request->file('image'))
        {
            $validated['image'] = $request->file('image')->store('staff-images');
        }

        Staff::create($validated);
        
        $request->session()->flash('success', 'Post Created Successfully!');

        return redirect('/dashboard/staff');
    }

    public function edit(Staff $staff)
    {
        return view('dashboard.staff.edit', [
            'staff' => $staff
        ]);
    }

    public function update(Request $request, Staff $staff)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'nip' => ['nullable'],
            'title' => ['required'],
            'image' => ['nullable', 'image', 'file', 'max:1024'],
        ]);

        if($request->file('image'))
        {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('staff-images');
        }

        Staff::where('id', $staff->id)
            ->update($validated);
        
        return redirect('/dashboard/staff')->with('success', 'Post has been updated!');
    }

    public function destroy(Staff $staff)
    {
        if($staff->image) {
            Storage::delete($staff->image);
        }

        Staff::destroy($staff->id);

        return redirect('/dashboard/staff')->with('success', 'Post has been deleted!');
    }
}
