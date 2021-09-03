<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        // var_dump($request->session()->get('user'));
        // dd($request->session()->get('user'));
        // if( $request->session()->get('user') === null ){
        //     dd($request['email']);
        //     $data =  User::where('email', $request['email'])->first()->toArray();
        //     $request->session()->put('user',$data);
        // }
        $course = 0;
        return view('home',compact('course'));
    }
    // public function checkout(Request $request)
    // { 
    //     // Enter Your Stripe Secret
    //     \Stripe\Stripe::setApiKey('sk_test_51JKTeYSDAxQhPLIBydwfPZnth7S60BUUjgaSgFypMKYtYTC2TeokdhYGTEyfUHYnExVUc86cmCJ2e1xCg9CCQULT00cxIBfH4l');
        		
	// 	$amount = 100;
	// 	$amount *= 100;
    //     $amount = (int) $amount;
        
    //     $payment_intent = \Stripe\PaymentIntent::create([
	// 		'description' => 'Stripe Test Payment',
	// 		'amount' => $amount,
	// 		'currency' => 'INR',
	// 		'description' => 'Payment From Codehunger',
	// 		'payment_method_types' => ['card'],
	// 	]);
	// 	$intent = $payment_intent->client_secret;

	// 	return view('home',compact('intent'));

    // }

    // public function afterPayment()
    // {
    //     echo 'Payment Has been Received';
    // }

    public function store(Request $request)
    {        
        $course = Course::create([
            'course' => request('course'),     
            'user_id' => auth()->id()
        ]);
        $course->save();
        return redirect('checkout');   
    }

    public function update(Request $request,User $user)
    {
          

        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->number = $request['number'];
        $user->save();  
        return redirect('home')->with('message', 'Your file Update Successfully ');
        // return 'update successful';

    }
   
}

