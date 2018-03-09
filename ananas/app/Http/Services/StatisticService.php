<?php
/* Сервис предоставляющий статистику по сообщениям singleton */
namespace App\Http\Services;

use App\Models\Post;

class StatisticService
{
    protected $count;           /* Количество постов на стене */
    protected $first;           /* Первое сообщение */
    protected $last;            /* Последнее сообщение */
    protected $user_first;      /* Пользователь первого сообщения */
    protected $user_last;       /* Пользователь последнего сообщения */

    public function __construct()
    {
        $posts = Post::all();
        $this->count = count($posts);
        $this->first = ($this->count) ? $posts->sortBy('created_at')->first() : null;
        $this->last = ($this->count) ? $posts->sortByDesc('created_at')->first() : null;
        $this->user_first = ($this->first) ? $this->first->user->name : null;
        $this->user_last = ($this->last) ? $this->last->user->name : null;

    }

    /**
     * @return int
     */
    public function getCount(){
        return $this->count;
    }

    /**
     * @return mixed App\Models\Post
     */
    public function getFirst(){
        return $this->first;
    }

    /**
     * @return mixed App\Models\Post
     */
    public function getLast(){
        return $this->last;
    }

    /**
     * @return mixed App\Models\User
     */
    public function getUserFirst(){
        return $this->user_first;
    }

    /**
     * @return mixed App\Models\User
     */
    public function getUserLast(){
        return $this->user_last;
    }

}