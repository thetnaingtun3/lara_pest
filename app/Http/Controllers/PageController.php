<?php

namespace App\Http\Controllers;

use App\Models\Course;

class PageController extends Controller {
    public function __invoke() {

        $courses = Course::all();
        return view('home', compact('courses'));
    }
}
