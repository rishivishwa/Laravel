<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showfile()
    {
        return view('fileupload');
    }
   
    public function savefile(Request $request,Validator $validator)
    {

        // $file = $request->file('filename');
        // $filename = $file->getClientOriginalName();
        // $filename = time().'.'.$filename;
        // $path = $file->storeAs('public',$filename);
        // Upload::create([
        //     'filename'  => $path,
        // ]);
        // return view('fileupload');
      
        // $this->validate($request ,[
            
        //     'filename' => 'required|mp4',
            
        // ]);
        // $validator = Validator::make($request->all(), [
        //     'file' => 'required|file|max:5000|mimes:mp4,ogg,mp4s',
        //  ]);
        // $validatedData = $request->validate([
        //     'file' => 'required|max:4096',
            
        // ]); 
        
    $file = $request->filename;
    $filename = $file->getClientOriginalName();
    $file->move('uploads/posts/', $filename);

    $post = Upload::create([      
        'filename' => 'uploads/posts/' . $filename,
        'course' => request('course'),     
        'user_id' => auth()->id()
    ]);   
         return redirect('fileupload')->with('message', 'Your file Uploaded Sucessfully ');
        
    }

    public function Show(Upload $upload)
    {
        $upload = Upload::all();
        return view('fileupload',['upload'=>$upload]);
        
    }
}

