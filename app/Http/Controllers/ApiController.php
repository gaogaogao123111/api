<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Api;
use App\Model\User;
class ApiController extends Controller
{
    public function user(Request $request){
        $id = $request->input('id');
        $a = Api::where(['id'=>$id])->first();
        if($a){
            $data = [];
            $info=[
                'errno'=>0,
                'msg'=>'ok',
                'data'=>[
                    'info'=>$a
                ]
            ];
            die(json_encode($info));
        }else{
            echo "不存在";
        }
    }
    public function add(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $info = [
            'name'=>$name,
            'email'=>$email
        ];
        $a=User::insertGetId($info);
        var_dump($a);

    }
}
