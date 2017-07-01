<?php

namespace Piwko\Forum\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Piwko\Forum\Models\Subject;

class SubjectController
{
    public function index(){
        return view('view::subject.addNew');
    }
    
    public function add(Request $request, Subject $addSubject){
        $body = array(
            'id_user' => Auth::user()->id,
            'id_categories' => 1,
            'subject' => $request->subject,
            'body' => $request->body
            
        );
        $add = $addSubject->addNewSubject($body);
        
        
    }
}