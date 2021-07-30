<?php

namespace App\Http\Controllers;

use App\Bbs;
use Illuminate\Http\Request;

class BBSController extends Controller
{
    public function index(){
        $posts=Bbs::orderBy('date','desc')->paginate(3);
        return view('bbsforlaravel.index',['posts'=>$posts]);
    }

    public function insertView(){
        return view('bbsforlaravel.insert');
    }

    public function insertExecute(Request $request){
        $bbs=new Bbs;
        $post=$request->all();
        unset($post['_token']);
        $bbs->fill($post)->save();
        return redirect('/');
    }

    public function updateView(Request $request){
        $post=Bbs::find($request->id);
        return view('bbsforlaravel.update',['post'=>$post]);
    }

    public function updateExecute(Request $request){
        $bbs=Bbs::find($request->id);
        $dbpw=Bbs::where('id',$request->id)->first('pw')->pw;
        $inputpw=$request->pw;
        if($dbpw!=$inputpw){
            $error='パスワードが間違っています。';
            return view('bbsforlaravel.update',['post'=>$bbs,'error'=>$error]);
        }else{
            $post=$request->all();
            unset($post['_token']);
            $bbs->fill($post)->save();
            return redirect('/');
        }
    }

    public function deleteView(Request $request){
        $post=Bbs::find($request->id);
        return view('bbsforlaravel.delete',['post'=>$post]);
    }

    public function deleteExecute(Request $request){
        $dbpw=Bbs::where('id',$request->id)->first('pw')->pw;
        $inputpw=$request->pw;
        
        if($dbpw!=$inputpw){
            $post=Bbs::find($request->id);
            $error='パスワードが間違っています。';
            return view('bbsforlaravel.delete',['post'=>$post,'error'=>$error]);
        }else{
            Bbs::find($request->id)->delete();
            return redirect('/');
        }
    }
}
