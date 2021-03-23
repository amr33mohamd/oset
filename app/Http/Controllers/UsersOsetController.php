<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersOset;
use App\Models\ContactsOset;

class UsersOsetController extends Controller
{
    public function addUsersOset(Request $request){
      $validatedDat = $request->validate([

          'name' => 'required|max:255',
          'email' => 'required|unique:UsersOsets',
          'phone'=>'required|min:6|unique:UsersOsets']
      );
      $create = UsersOset::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'company'=>$request->company,
          'phone'=>$request->phone,
          'type'=>'0',
          'password'=>'123456',
      ]);
      if($request->lang == 'ar'){
        return Redirect('ar/return/1');
      }
      else {
        return Redirect('/return/1');
      }
    }
    public function ContactsOset(Request $request){

      $create = ContactsOset::create([
          'email'=>$request->email,
          'messgae'=>$request->message,
          'name'=>'a'
      ]);
      return Redirect('/return/1');
    }
    public function adddesigner(Request $request){
      // $validatedDat = $request->validate([
      //
      //     'name' => 'required|max:255',
      //     'email' => 'required|unique:UsersOsets',
      //     'phone'=>'required|min:6|unique:UsersOsets']
      // );
      $file = $request->file('file');
      $filename = time() . '.' . $request->file('file')->extension();
      $filePath = public_path() . '/files';
      $file->move($filePath, $filename);


      $create = UsersOset::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'company'=>$request->company,
          'password'=>'123456',
          'file'=>'/files/'.$filename
      ]);

      if($request->lang == 'ar'){
        return Redirect('ar/return/1');
      }
      else {
        return Redirect('/return/1');
      }
        }
}
