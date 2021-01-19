<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Pembeli;
use App\Models\Penjual;


class AuthController extends Controller
{
	
	function showLogin(){
		return view('login');
	}

	function loginProcess(){

		$email = request('email');
		$user = Pembeli::where('email', $email)->first();
		if($user){
			$guard = 'pembeli';
		} else {
			$user = Penjual::where('email', $email)->first();
			if($user){
				$guard = 'penjual';
			} else {
				$guard = false;
			}
		}

		if(!$guard) {
			if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('Admin/Dashboard')->with('succes', 'Login berhasil');
			} else {
				return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');
			}
		} else {
			if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
				if($guard == 'penjual'){
					return redirect("Dashboard/$guard")->with('success', 'Login Berhasil');
				} else {
					return redirect("Home/$guard")->with('success', 'Login Berhasil');	
				}
			} else {
				return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');	
			}
		}


		// if(request('login_as') == 1){
		// 	if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
		// 		return redirect('Dashboard/Penjual')->with('succes', 'Login Berhasil');
		// 	} else {
		// 		return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');	
		// 	}
		// } else {
		// 	if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
		// 		return redirect('Dashboard/Pembeli')->with('succes', 'Login Berhasil');
		// 	} else {
		// 		return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');	
		// 	}
		// }

	}

	function logout(){
		Auth::logout();
		Auth::guard('penjual')->logout();
		Auth::guard('pembeli')->logout();
		return redirect('Admin/Dashboard');
	}

	function forgotPassword(){

	}

	function showRegister(){
		return view('register');
	}

	function registerProcess(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('Login')->with('success', 'Data Berhasil Ditambahkan');
	}
}