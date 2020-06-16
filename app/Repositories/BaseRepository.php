<?php

namespace App\Repositories;

abstract class BaseRepository
{

    abstract public function getModel();

    public function find($id)
    {
        return $this->getModel()->find($id);
    }

    public function findOrFail($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return $this->getModel()->where('slug', $slug)->first();
    }

    public function create()
    {
        
    }
}