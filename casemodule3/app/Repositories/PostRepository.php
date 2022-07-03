<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PostRepository extends BaseRepository
{
    public function getTable()
    {
        return 'posts';
    }

    public function store($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function update($data, $id)
    {
        DB::table($this->table)->where('id', $id)->update($data);
    }

    public function getById($id)
    {
        return DB::table($this->table)
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('comments', 'posts.id', '=', 'comments.post_id')
            ->where('posts.id', $id)
            ->select('posts.*', 'users.name as username')
            ->first();
    }
}
