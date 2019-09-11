<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
        return view('admin.about.aboutEntry');
    }

    public function save(Request $request){
        

        $aboutEntry = new About();

        $aboutEntry -> name = $request ->name; 
        $aboutEntry -> location = $request ->location; 
        $aboutEntry -> description = $request ->description; 
        $aboutEntry -> exprience = $request ->exprience; 
        $aboutEntry -> project = $request ->project; 
        $aboutEntry -> serviceName = $request ->serviceName; 
        $aboutEntry -> serviceDetails = $request ->serviceDetails; 
        $aboutEntry -> clientName = $request ->clientName; 
        $aboutEntry -> clientDesignation = $request ->clientDesignation; 
        $aboutEntry -> clientComment = $request ->clientComment; 
        $aboutEntry -> file = $request ->file; 

        $aboutEntry -> save();

        return redirect('/about/insert') -> with('message', 'Data insert Successfully');
    }

    public function manage(){
        
        $aboutm = About::all();

        return view('admin.about.aboutManage', compact('aboutm'));
        
    }

    public function edit($id){
        $aboutEdit = About::where('id', $id)->first();

        return view('admin.about.aboutEdit', ['about'=>$aboutEdit]);

    }

    public function update(Request $request){
        $about = About::find($request->id);
        $about -> name = $request->name;
        $about -> location = $request->location;
        $about -> description = $request->description;
        $about -> exprience = $request->exprience;
        $about -> project = $request->project;
        $about -> serviceName = $request->serviceName;
        $about -> serviceDetails = $request->serviceDetails;
        $about -> clientName = $request->clientName;
        $about -> clientDesignation = $request->clientDesignation;
        $about -> clientComment = $request->clientComment;
        $about -> file = $request->file;

        $about->save();

        return redirect('/about/manage')->with('message', 'Update Successfully');
    }

    public function delete($id){
        $aboutDelete = About::find($id);
        $aboutDelete -> delete();

        return redirect('/about/manage')->with('message', 'Delete Successfully');
    }
}
