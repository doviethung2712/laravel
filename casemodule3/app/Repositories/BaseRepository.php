<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseInterface;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository implements BaseInterface
{
    public $table;
    public function __construct()
    {
        $this->table = $this->getTable();
    }
    public abstract function getTable();
    public function getAll()
    {
        return DB::table($this->table)->get();
    }

    public function getById($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function deleteById($id)
    {
        return DB::table($this->table)->where('id', $id)->delete();
    }
}
