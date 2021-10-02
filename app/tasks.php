<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    //
    protected $table = "tasks";

   protected $fillable = ['title','user_id','fromdate','todate'];

 /*  public function doQuery(){

    // return stdResource::select('students.*','departments.title')->join('departments','departments.id','=','students.dep_id')->orderby('id','desc')->paginate(10);
   
    return tasks::with('user')->orderby('id','desc');

  }



 
   public  function user(){

       return   $this->belongsTo('App\student','user_id');   
   }
   */

}
