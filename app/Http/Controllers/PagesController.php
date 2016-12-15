<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
class PagesController extends Controller {

    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(6)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Dan';
        $last = 'Constantinescu';
        $full = $first . ' ' . $last;
        $email = 'dan.constantinescu@outlook.com';
        $data = [];
        $data['email']=$email;
        $data['full']=$full;
        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'subject'=>'min:3',
            'message'=>'min:10'
        ]);

        $data = array(
            'email'=>$request->email,
            'subject'=>$request->subject,
            'bodyMessage'=>$request->message

        );

        Mail::send('emails.contact',$data,function($message) use ($data){
            $message->from($data['email']);
            $message->to('dan_constantinescu@outlook.com');
            $message->subject($data['subject']);
        });

        Session::flash('success','Your email was sent');
        return redirect('/');
    }

}