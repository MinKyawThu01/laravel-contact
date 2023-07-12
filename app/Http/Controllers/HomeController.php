<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Country;
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
    public function index()
    {
       $contact =Contact::count();
       $contacts = Contact::orderBy('first_name', 'asc')->paginate(100);
       $company =Company::count();
       $country =Country::count();
       $user=User::count();
   return view('home', compact('contact','company','country','contacts', 'user'));
    }
}
