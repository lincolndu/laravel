<?php
namespace App\Http\Controllers;

use App\Register;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Session;
use DB;
use Pagination;
use Auth;

class StdController extends Controller {

    public function index(Request $request){
        if ($request->isMethod('POST')) {
            $res=$request->title;
            $data['search']=Post::where('title','LIKE','%'.$res.'%')->get();
            if ($data['search']) {
                return view('post.search',$data);
            } else{
                return view('post.search', $data);
            } 
        }
       $data['posts']= Post::limit(3)->latest()->get();
       $data['vertical_posts']= Post::limit(4)->latest()->get();
       return view('index',$data);
    }

    public function blog(){
        $data['posts']=Post::paginate(3);
       return view('blog',$data);
    }

    public function gallery(){
        $data['gallaries']=Post::where('category', 'Gallery')->get();
       return view('gallery',$data);
    }

    public function single($id){
        $post['id']=Post::find($id);
       return view('single', $post);
    }

    public function contact(Request $request){
        if ($request->isMethod('POST')) {
            $register= new Comment();
            $register->name=$request->name;
            $register->email=$request->email;
            $register->website=$request->website;
            $register->comment=$request->comment;
            $register->save();

            Session::flash('success_msg','Your comment has been successfully submitted, just wait, it will publish soon');
            return redirect('contact');
        }
       return view('contact');
    }

    public function newpost(Request $request){
        if ($request->isMethod('post')) {
            $register= new Post();
            $register->title=$request->title;
            $register->author=Auth::user()->name;
            $register->photo = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path() . '/photo/',$register->photo);
            $register->d_post=$request->d_post;
            $register->save();

            Session::flash('success_msg','successfully your post has been published!');
            return view('newpost');
        }
       return view('newpost');
    }

    public function dashboard(){
        $data['posts']=Post::limit(30)->offset(0)->latest()->get();
        return view('post.dashboard',$data);
    }

    public function delete($id){
        Post::where('id', $id)->delete();
        Session::flash('success_msg','data deleted successfully');
        return redirect('dashboard');
    }

    public function edit(Request $request, $id){
        if ($request->isMethod('POST')) {
            $register= Post::find($id);
            $register->title=$request->title;
            $register->photo=$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path() .'/photo', $register->photo);
            $register->d_post=$request->d_post;
            $register->save();

            Session::flash('success_msg','successfully updated your post!');
            return redirect('dashboard');
        }
        $edit['id']=Post::find($id);
        return view('post.edit',$edit);
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