<?php

namespace App\Presenter;

abstract class Presenter{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
