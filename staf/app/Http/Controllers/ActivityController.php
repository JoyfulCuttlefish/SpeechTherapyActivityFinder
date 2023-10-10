<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
   //Get and Show all activities
   public function index(Request $request) {
    $searchTerm = $request->input('search');
    $searchTermsArray = explode(' ', $searchTerm);
    $selectedTags = $request->input('tag', []);
    $tags = $request->input('tag');
    $allTags = Activity::distinct()->pluck('tags')->flatMap(function ($tags) {
        return explode(',', $tags);
    })->unique();

    $query = Activity::latest();

    foreach ($searchTermsArray as $term) {
        $query->where(function($q) use ($term, $selectedTags) {
            $q->where('title', 'like', '%' . $term . '%')
              ->orWhere('description', 'like', '%' . $term . '%')
              ->orWhere('tags', 'like', '%' . $term . '%');
        });
        
    }
    
    if (!is_array($selectedTags)) {
        $selectedTags = [$selectedTags];
    }

    if (!empty($selectedTags)) {
        $query->where(function($q) use ($selectedTags) {
            foreach ($selectedTags as $tag) {
                $q->orWhere('tags', 'like', '%' . $tag . '%');
            }
        });
    }

    $activities = $query->paginate(6);

    return view('activities.index', compact('activities', 'searchTerm', 'selectedTags', 'allTags'));
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

         // Trim spaces and convert tags to lowercase
        $formFields['tags'] = strtolower(trim($formFields['tags']));

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Activity::create($formFields);

        return redirect('/')->with('message', 'Activity created successfully!');
    }

    //Show Edit Form
    public function edit(Activity $activity) {
        return view('activities.edit', ['activity' => $activity]);
    }

    //Update Activity Data
    public function update(Request $request, Activity $activity) {
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

        $activity->update($formFields);

        return back()->with('message', 'Activity updated successfully!');
    }

    //Delete Activity
    public function destroy(Activity $activity) {
        $activity->delete();
        return redirect('/')->with('message', 'Activity deleted successfully!');
    }
}
