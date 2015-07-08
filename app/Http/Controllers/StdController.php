<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use Session;

class StdController extends Controller {

    function login() {
        return view('login');
    }

    public function register(Request $request) {
        if ($request->isMethod("POST")) {
            $register = new Register();
            $register->email = $request->email;
            $register->password = md5($request->password);
            $register->save();

            Session::flash('success_msg', 'Operation Successful !');
            return redirect('register');
        }
        return view('register');
    }

    public function all_user() {
        $data['users'] = Register::all();
        return view('all_user', $data);
    }

    public function delete($user) {
        Register::where('id', $user)->delete();
        Session::flash('success_msg', 'Data deleted !');
        return redirect('all_user');
    }

    public function edit(Request $request, $id) {
        if ($request->isMethod('POST')) {
            $register = Register::find($id);
            $register->email = $request->email;
            $register->password = md5($request->password);
            $register->save();
            Session::flash('success_msg', 'data updated successfully');
            return redirect('all_user');
        }
        $edit['id'] = Register::find($id);
        return view('edit', $edit);
    }

    public function search(Request $request) {
        if ($request->isMethod('POST')) {

            $res = $request->email;
            $data['searches'] = Register::where('email', 'LIKE', '%' . $res . '%')->get();

            if ($data['searches']) {
                return view('users.search_result', $data);
            } else {
                echo "Nothing";
            }
        }
        return view('search');
    }

}

?>