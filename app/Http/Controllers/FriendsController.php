<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friends;

class FriendsController extends Controller
{
    public function showFriend() {
        $friends=Friends::all();
//        echo $friends.'<br/>';
//        foreach ($friends as $friend){
//            echo $friend->name.'<br/>';
//        }
        return view('friends',compact('friends'));
    }
}
