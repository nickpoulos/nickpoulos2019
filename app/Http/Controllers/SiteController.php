<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(Request $request)
    {
        $projects = array_values(Project::all()->sortByDesc('year')->map(function ($project) {
            $project->features = $project->features->map(function ($feature) {
                return $feature["features"];
            });
            $project->specs = $project->specs->map(function ($spec) {
                return $spec["specs"];
            });
            $project->facts = $project->facts->map(function ($fact) {
                return $fact["fact"];
            });
            return $project;
        })->toArray());

        $experiences = array_values(Experience::all()->sortByDesc('start')->map(function ($experience) {
            $experience->responsibilities = $experience->responsibilities->map(function ($responsibility) {
                return $responsibility["description"];
            });
            return $experience;
        })->toArray());


        return view('welcome', compact('projects', 'experiences'));
    }

    public function project(Request $request, $projectId)
    {
        return view('project'.$projectId);
    }

    public function latestMediumPosts(Request $request)
    {
        $response = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@nickpoulos/');

        $data = json_decode($response);

        $posts = collect($data->items)->filter(function($item) {
            return !empty($item->categories);
        });

        return response()->json($posts);
    }

    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

    }

    public function test(Request $request)
    {
        $response = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@nickpoulos');
        //$stuff = file_get_contents('https://medium.com/@nickpoulos/latest?format=json');
        //$stuff = Str::after($stuff, '</x>');
        dd(json_decode($response));
    }

}
