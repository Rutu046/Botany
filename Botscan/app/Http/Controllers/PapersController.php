<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Papers;

class PapersController extends Controller
{
    public function index(){
        return view('layout.header');
    }

    public function submitppr(){
        return view('submitppr');
    }

    public function submit(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'keywords'=> 'required',
            'publication_date'=> 'required',
            'author_document_url'=> 'required',
            'user_id'=> 'required|numeric',
            'authors' => 'required',
        ]);

        // Create a new paper using the create method
        $newPaper = Papers::submitppr($data);
        
        // Redirect to the index page after successful submission
        return redirect()->route('layout.header');
    }
}
