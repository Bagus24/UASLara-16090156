<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\ModelPeserta;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admin';
    protected $redirectTo = '/admin-login';
    
    public function __construct()
        {
            $this->middleware('guest')->except('logout');
        }
    
    public function showLoginForm()
        {
            return view('auth.adminLogin');
        }

    public function guard()
        {
            return auth()->guard('admin');
        }

    public function showRegisterPage()
        {
            return view('auth.adminregister');
        }

    public function register(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:199',
                'email' => 'required|string|email|max:255|unique:admins',
                'password' => 'required|string|min:6|confirmed'
            ]);
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return redirect()->route('admin-login')->with('success','Registration Success');
        }

    public function login(Request $request)
        {
            if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
                return redirect()->route('adminpage');
            }
            return back()->withErrors(['email' => 'Email or password are wrong.']);
        }

        public function adminPeserta() 
    {
        
        $peserta = ModelPeserta::paginate(1);
        return view('admin-peserta', ['peserta' => $peserta]);
    }

    public function adminDaftarPeserta(Request $request){
        $messages = [
            'required' => 'Form tidak boleh ada yang kosong',
            'min' => 'Form harus diisi minimal 8 karakter',
            'max' => 'Form harus diisi maksimal 20 karakter',
        ];

        $this->validate($request, [
            'nama' => 'required|max:20',
            'email' => 'required|max:20',
            'no_hp' => 'required',
            'alamat' => 'required',
        ],$messages);

        $id = Auth::user()->id;

        $data =  new ModelPeserta();
        $data->id_user = $id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        
        $data->save();
        return redirect('home')->with('alert-success','Kamu berhasil Register');
    }

}