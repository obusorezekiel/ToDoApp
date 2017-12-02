<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'],['name','Umesi'],function($message){
            $message->to('obusorezekiel@gmail.com', 'To Bitfumes')->subject('Text Email');
            $message->from('bitfumes@gmail.com','Bitfumes');
        });
    }
}
