<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Upload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function userprofile(Course $course,Request $request)
    {
      $id = Auth::user()->id;
      $course = DB::table('users')
      ->join('courses','users.id','=','courses.user_id')
      ->where('users.id',$id)
      // ->where('users.name',$name)
      ->select('courses.course')
      ->get();
      
      return view('user_profile',['course'=>$course]);
       
    }

    public function editprofile(){
      return view('edit');
    }

    public function coursedetails(Course $course, Request $request){
   
      
      $id = Auth::user()->id;
      $course = DB::table('users')
      ->join('courses','users.id','=','courses.user_id')
      ->where('users.id',$id)
      // ->where('course',$course)
      ->select('courses.course','courses.created_at')
      // ->select('courses.created_at')
      
      ->get();

      // dd($course);
      // return view('user_profile',compact('course'));
      return view('courseinfo',['course'=>$course]);
    }
    // function checkprofile(Request $request )
    // {
    //   if($request->session()->has('id'))
    //   {
    //     echo $request->session()->get('id');
    //   }
        
    // }
    // function storeSession(Request $request )
    // {
    //   $request -> session()->put('id',32);
    //   echo 'done';
    // }

    public function showcourse(Upload $upload)
    {
        $upload = Upload::all();
        // return $upload;
        return view('coursedetailspage',['upload'=>$upload]);
    }

    public function details(Course $course)
    {
    // phpinfo();die;
    // die('sdfds');
    // $count = User::find($id);
    $id = Auth::user()->id;
    $course = DB::table('users')
    ->join('uploads','users.id','=','uploads.user_id')
    ->select('course','uploads.filename')
    ->where('users.id',$id)
    // ->orWhere('courses.course',$course)
    ->get();   
    return view('coursedetailspage',['course'=>$course,]);
    
    //  print_r($users);
    //   print_r($users[1]);
    // echo $users;
  }
}
