<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function Adminview( User $user){
        $user = User::all();
       return view('admin',['user'=>$user]);
   }



   public function Adminrelview($id,Course $course)
   {
    $course = DB::table('users')
    ->join('courses','users.id','=','courses.user_id')
    ->where('users.id',$id)
    ->select('courses.course')
    ->get();
    return view('admin',['course'=>$course]);
   }

   public function delete($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect('admin')->with('message', 'Your Data successfully removed');
    }
}
