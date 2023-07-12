<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Country;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $contacts = Contact::orderBy('first_name', 'asc')->paginate(100);
        $countries = Country::all();
        return view('contacts.index', compact('contacts'));
        // return view('contacts.index');
    }

    public function create(Request $request)
    {
        $company = Company::all();
        $countries = Country::all();
        return view('contacts.create', compact('company','countries'));
    }

    public function store(Request $request)
    {
        $contacts = new Contact;
        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->last_name;
        $contacts->phone = $request->phone;
        $contacts->email = $request->email;
        $contacts->address = $request->address;
        $contacts->company_id = $request->company_id;
        $contacts->country_id = $request->country_id;

        $contacts->save();
        return redirect()->route('contacts.index')->with('success','Contact create Successfully!');
    }



    public function show($id)
    {
       $contacts =Contact::findOrFail($id);
       return view('contacts.show', compact('contacts'));
    }

    


    public function edit($id)
    {
      $contacts =Contact::find($id);
       return view('contacts.edit',compact('contacts'));
    }

    
    public function update(Request $request, $id)
    {
      $contacts =Contact::find($id);
      $contacts->first_name = $request->input('first_name');
      $contacts->last_name = $request->input('last_name');
      $contacts->email = $request->input('email');
      
      


      $contacts->update();




      return  redirect()->route('contacts.index')->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();

        return  redirect()->route('contacts.index')->with('success', 'delete');
    }
}