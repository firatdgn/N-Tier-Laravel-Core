<?php

namespace App\Abstracts;

use Illuminate\Database\Eloquent\Model;

abstract class CreateUpdateDeleteAbstract
{
    public function create(Model $model, $row)
    {
        $model->create($row);
    }
    public function update(Model $model, $row)
    {
        $model->update($row);
    }
    public function delete(Model $model)
    {
        $model->delete();
    }
}