<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Inertia\Inertia;

class TagsController extends Controller
{
    public function index() {

        $tags = Tag::all();

        return Inertia::render('Admin/Tags/Tag', [
            'lugares' => $tags,
        ]);

    }

}
