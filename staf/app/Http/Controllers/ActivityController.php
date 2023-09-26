<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
   //Get and Show all activities
   public function index(Request $request) {
    $searchTerm = $request->input('search');
    $searchTermsArray = explode(' ', $searchTerm); // Split search terms by spaces

    $query = Activity::latest();

    foreach ($searchTermsArray as $term) {
        $query->where(function($q) use ($term) {
            $q->where('title', 'like', '%' . $term . '%')
              ->orWhere('description', 'like', '%' . $term . '%')
              ->orWhere('tags', 'like', '%' . $term . '%');
        });
    }

    $activities = $query->paginate(6);

    return view('activities.index', compact('activities', 'searchTerm'));
}

    //Show single activity 
    public function show(Activity $activity) {
        return view('activities.show', [
            'activity' => $activity
        ]);
    }

    // Show Create Form
    public function create() {
        return view('activities.create');
    }

    // Store Activity (save)
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'creatorName' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Activity::create($formFields);

        return redirect('/')->with('message', 'Activity created successfully!');
    }
}
