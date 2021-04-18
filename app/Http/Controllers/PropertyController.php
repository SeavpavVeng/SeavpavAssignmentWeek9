<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show($id){
        if($id==1){
           return view('pages.propertysingle'); 
        }
        elseif($id==2){
            return view('pages.blogsingle');
        }
        elseif($id==3){
            return view('pages.agentsgrid');
        }
        else{
            return view('pages.agentsingle');
        }
        
    }

  
}
