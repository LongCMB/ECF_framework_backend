<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('login')->with('success', 'Register successfully');

    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success', 'Login Success');
        }

        return back()->with('error', 'Error Email or Password');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function index()
    {
        $auth = User::orderBy('id', 'DESC')->get();

        return view('user.index', compact('auth'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'Author added successfully');
    }

    public function delete($id)
    {
        $auth = User::findOrFail($id);

        $auth->delete();

        return redirect()->route('user.index')->with('success', 'author deleted successfully');
    }
}
