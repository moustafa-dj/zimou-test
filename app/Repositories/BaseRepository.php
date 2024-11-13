<?php


namespace App\Repositories;
use App\Contracts\BaseContract;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseContract
{
    protected Model $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function new(array $data)
    {
        return $this->model::create($data);
    }
}