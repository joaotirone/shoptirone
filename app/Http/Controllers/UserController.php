<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;



class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function home()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,  'password' => $request->password])){
            return redirect()->route('shop');
        }else{
            dd('vc não esta logado');
        };

    }

    public function indexuser(Request $request)
    {
        $user_name = $request->user_name;
        $cpf = $request->cpf;
        $fun = DB::table('users')->get(); 
        return view('USER.index', compact('fun','user_name', 'cpf'));
    }

    public function searchuser(Request $request)
    {
        $user_name = $request->user_name;
        $cpf = $request->cpf;

        $fun = DB::table('users');
        if($user_name){
            $fun = $fun->where('name', "$request->user_name");
        }
        if($cpf){
            $fun = $fun->where('cpf',"$request->cpf");
        }
        $fun = $fun->get();
        return view('USER.index', compact('fun','user_name', 'cpf'));
    }

    public function edituser($id){
        $fun = DB::table('users')->where('id',$id)->first();
        return view('USER.edit', compact('fun'));
    }

    public function updateuser(Request $request, $id)
    {
        $data = [
			'name' =>$request->name,
			'phone' =>$request->phone,
			'phone2' =>$request->phone2,
			'cpf' =>$request->cpf,
			'birthday' =>$request->birthday,
			'email' =>$request->email,
            
        ];
        DB::table('users')->where('id', $id)->update($data);
        return redirect()->route('user.index');
    }

    public function destroyuser($id)
    {
        
        DB::table('users')->where('id',$id)->delete($id);
        return redirect()->route('user.index');

    }

    public function user()
    {
        return view('USER.create');
    }

    public function create(Request $request)
    {if(!empty($request->all())){
        $user = new User;
    
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->phone2 = $request->phone2;
        $user->cpf = $request->cpf;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('shop');
        }
    }
}
