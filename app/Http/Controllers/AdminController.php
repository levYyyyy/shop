<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user()->isAdmin;
        if($user == 1) {
            return view('admin');
        }
        else {
            return view('denied');
        }
        
    }
    public function createItem(Request $request) {
        $path = $request->file("image")->store('uploads', 'public');
        Item::create([
            'name' => request('name'),
            'image' => $path,
            'description' => request('description'),
            'price' => request('price'),
        ]);
        return redirect('/main');
    }
    public function getPerms() {
        $user = Auth::user();
        $user->isAdmin = '1';
        $user->save();
        return view('access');
    }
}
