<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\StatisticService;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    protected $statisticService;

    public function __construct(StatisticService $statisticService){
        $this->statisticService = $statisticService;
    }

    public function index(){
        $posts = Post::all()->sortByDesc('created_at');

        return view('home', ['posts' => $posts, 'statisticService' => $this->statisticService]);
    }

    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'content' => 'required'
        ],[
            'name.required' => 'Заголовок сообщения не может быть пустым',
            'content.required' => 'Текст сообщения не может быть пустым'
        ]);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator);
        else{
            $user = Auth::user();
            $user->posts()->create($request->only('name', 'content'));
        }

        return redirect('home');
    }


}
