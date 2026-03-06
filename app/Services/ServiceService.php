<?php

namespace App\Services;

use App\Models\Service;

class ServiceService
{
    public function getAll()
    {
        return Service::orderBy('sort_order')->get();
    }

    public function create(array $data)
    {
        return Service::create($data);
    }
    
    public function findById($id)
    {
        return Service::findOrFail($id);
    }
}