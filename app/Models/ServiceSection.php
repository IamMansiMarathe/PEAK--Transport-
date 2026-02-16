<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class ServiceSection extends Model
{
     protected $fillable = [
        'title',
        'description'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
