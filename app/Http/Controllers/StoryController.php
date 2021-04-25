<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    public function index(){
        $story = new Story;
        $items = $story->listStory();
        return view('index')->with('items', $items);
    }

}
