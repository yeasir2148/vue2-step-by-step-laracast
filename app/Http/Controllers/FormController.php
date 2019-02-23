<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class FormController extends Controller {
    public function create() {
        return view('projects.create');
    }
}