<?php 

namespace App\Http\Controllers;

use App\Register; 
use Illuminate\Http\Request;
use Session;

class StdController extends Controller{
	function student(){
		return view('student');
	}
	public function register(){
		return view('register');
	}

	public function do_register(Request $request){

		$register = new Register();
		$register->email=$request->email;
		$register->password=md5($request->password);
		$register->save();

		Session::flash('success_msg','Operation Successful !');
		return redirect('register');
	}


	public function all_user(){
		$data['users']= Register::all();

		return view('all_user', $data);
	}

	public function delete($user){
		Register::where('id', $user)->delete();

		Session::flash('success_msg','Data deleted !');

		return redirect('all_user');
	}

	public function edit(){
		return view('edit');
	}
	



}

?>