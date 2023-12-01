<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BbsController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',
            ['bbs' => Auth::user()->bbs()->latest()->get()]);
    }
    public function showAddBbForm() {
        return view('bb_add');
    }
    public function storeBb(Request $request) {
        Auth::user()->bbs()->create(['title' => $request->title,
            'content' => $request->content,
            'price' => $request->price]);
        return redirect()->route('home');
    }
    public function showEditBbForm(Bb $bb) {
        return view('bb_edit', ['bb' => $bb]);
    }
    public function updateBb(Request $request, Bb $bb) {
        $bb->fill(['title' => $request->title,
            'content' => $request->content,
            'price' => $request->price]);
        $bb->save();
        return redirect()->route('home');
    }
    public function showDeleteBbForm(Bb $bb) {
        return view('bb_delete', ['bb' => $bb]);
    }
    public function destroyBb(Bb $bb) {
        $bb->delete();
        return redirect()->route('home');
    }
}
