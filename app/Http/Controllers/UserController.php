<?php
namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function Logged_in()
    {
        return view('templates.index');
    }
    public function Login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $customer = new Customer();

        $customer->email = $email;
        $customer->first_name = $first_name;
        $customer->password = $password;
        $customer->save();
        //if (Auth::check()) {
        Auth::login($customer);

        return redirect()->route('logged_in');
        //}

        //dd('logged in');

    }
    public function Sign_in(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ]))
        {
            dd('working');
           return redirect()->route('logged_in');
        }
        dd('not working');

        //return redirect()->back();
        //this is for else.

    }

    public function About()
    {
        return view('templates.about');
    }
     public function Review()
    {
        return view('templates.review');
    }
     public function Joinus()
    {
        return view('templates.joinus');
    }
       public function Contact()
    {
        return view('templates.contact');
    }


}
