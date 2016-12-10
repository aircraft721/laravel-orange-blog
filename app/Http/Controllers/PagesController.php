<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('pages.welcome');
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

    public function postContact(){

    }

}