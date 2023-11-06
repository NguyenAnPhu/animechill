<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteProductController;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use DB,Session;


class RouteUserController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new Users();
    }
    public function showUser(Request $request)
    {
        $userList= DB::table('users')->get();
        return view('admin.users')->with([
                'userList'=>$userList
        ]);
    }
    public function addUser(Request $request){
        
             
        $name= $request->name;
        $email= $request->email;
        $birthday= $request->birthday;
        $password= $request->password;

        DB::table('users')->insert([
            'name'=>$name,
            'email'=>$email,
            'birthday'=>$birthday,
            'password'=>$password,
        ]);
        return redirect()->route('login');
     }
    public function showLoginForm()
    {
        return view('layouts.login');
    }
    public function login(Request $request, RouteProductController $abc)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
            ]);
        $email= $request->email;
        $password= $request->password;
        

        //Gọi hàm model
        $data =$this->user->submitLogin($email,$password);
        //Gọi hàm Controller
        $productList=$abc->showProduct2();
        if(!empty($data)){
            if(($data[0]->role)== 1)
            {
                return redirect()->route('showProduct')->with([
                    'productList'=>$productList,
                ]);
            }
            else{
                $nameResult= DB::table('users')->where('email','like',$email)->pluck('name');
                $getName = !empty($nameResult) ? $nameResult[0] : null;
                Session::put('name',$getName);
                return redirect()->route('showHomeProductHot')->with([
                    'productList'=>$productList,
                    
                
                ]);
            }
            
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
       
    }
    public function comment(Request $request)
    {
        $idProComment= $request->idProduct;
        $text= $request->textComment;
        $getName=Session::get('name');

        DB::table('comment')->insert([
            'name'=>$getName,
            'idProduct'=>$idProComment,
            'text'=>$text,
            
        ]);
        return redirect()->back();

    }
    public function showComment(Request $request)
    {
        $commentList= DB::table('comment')->get();
        return view('admin.comment')->with([
                'commentList'=>$commentList
        ]);
    }
    public function getSession(Request $request)
    {
        //dd($request->session()->all());
        // $getName= DB::table('users')->get('name');
        // dd($getName);
        //dd($request->session()->get('name', 'default'));
        dd(Session::get('name'));
    }
    public function setSession()
    {
        // $getName= DB::table('users')->get('name');
        //Session::put('name',$getName);
    }
    public function unSetSession()
    {
        Session::flush();
        // Session::forget('name');
        return redirect()->back()->withInput();
    }
}
