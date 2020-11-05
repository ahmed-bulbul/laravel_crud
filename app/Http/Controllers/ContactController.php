<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use function Ramsey\Uuid\v1;

class ContactController extends Controller
{
    public function AllContact(){
        $contact= DB::table('contacts')->get();
        return view('pages.all-contacts')->with('contactData',$contact);
    }
    public function InsertContact(){
        return view('pages.insert-contact');
    }
    public function DataAdded(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $ins = DB::table('contacts')->insert($data);
        return Redirect()->route('contacts');

        // echo "<pre>";
        // print_r($data);
    }

    public function DeleteContact($id){
        $dlte = DB::table('contacts')->where('id',$id)->delete();
        return Redirect()->route('contacts');
    }
    public function EditContact($id){
        $edt = DB::table('contacts')->where('id',$id)->first();
        return view('pages.editcontact',compact('edt'));
    }
    public function UpdateContact(Request $request,$id){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $updt= DB::table('contacts')->where('id',$id)->update($data);
        return Redirect()->route('contacts');
    }
}
