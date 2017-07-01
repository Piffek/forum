<?php
namespace Piwko\Forum\Controller;

use Piwko\Forum\Controller\BaseController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Piwko\Forum\Models\Subject;
use Illuminate\Http\Request;

class HomeController
{
    
    public function index(Subject $mySubject){
        $mySub = $mySubject->getSubject();
        return view('view::homePage', compact('mySub'));
    }

    
}