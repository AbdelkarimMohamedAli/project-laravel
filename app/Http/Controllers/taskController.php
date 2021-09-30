<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tasks;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
 
      $this->middleware('studentResource',['except' => ['login','doLogin'] ]);

    }
    public function index()
    {
        //
        $data=tasks::get();
        return view('task.index',['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data =    $this->validate($request,[
            "title"     => "required",
            "fromdate"    => "required|date",
            "todate" => "required|date",
      ]);

   

   $op = tasks :: create($data);       
      
   if($op){
     $message = 'Data Inserted';
   }else{
     $message= "Error Try Again";
  }

  session()->flash('Message',$message);

  return redirect(url('/Tasks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = tasks:: where('id',$id)->get();   
        return view('task.edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =    $this->validate($request,[
            "title"     => "required",
            "fromdate"    => "required",
            "todate" => "required",
      ]);


   $op = tasks :: where('id',$id)->update($data);       // ['name' => $request->name , 'email' => $request->email]
      
   if($op){
     $message = 'Data Updated';
   }else{
     $message= "Error Try Again";
  }

  session()->flash('Message',$message);

  return redirect(url('/Tasks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $op = tasks::where('id',$id)->delete();

        if($op){
           $message= "Deleted";
        }else{
           $message= "Error Try Again";
        }
   
        session()->flash('Message',$message);
   
        return redirect(url('/Tasks'));
    }

    public function login(){

      return view('student.login');
    }

    public function doLogin(Request $request){
      // logic ... 
      $data =    $this->validate($request,[
        "password"     => "required|min:6",
        "email"        => "required|email"
  ]);


  /*$status = false;

  if($request->R_me){
      $status = true;
  }
    */

    if(auth()->attempt($data,false)){
       
         return redirect(url('/Users'));

    }else{
        session()->flash('Message','Error In Your Credintials');
        return redirect(url('Student/Login'));
    }

  }


  public function logOut(){
      
    auth()->logout();
    
    return redirect(url('/Student/Login'));
  }
}
