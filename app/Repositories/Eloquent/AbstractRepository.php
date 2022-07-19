<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolvModel();
    }

    public function resolvModel()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }
}
