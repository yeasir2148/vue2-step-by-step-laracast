<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class FormController extends Controller {
    public function create() {
        return view('projects.create');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        return ['message' => 'project created'];
    }
}