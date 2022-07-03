<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PostRepositories extends BaseRepositories
{

    public function getTable()
    {
        return 'posts';
    }
    public function getAll()
    {
        return DB::table($this->table)->orderBy('id' , 'desc')->get();
    }

    public function store($request)
    {
        $data = $request->only('content','user_id');
        $fileName = time().'_'.$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs("images",$fileName,"public");
        $data["img"] = $path;
        DB::table('posts')->insert($data);
    }
}
