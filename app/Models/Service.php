<?php

namespace App\Models;

use App\Models\ServiceSection;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $fillable = [
        'service_section_id',
        'image',
        'title',
        'description'
    ];

    public function section()
    {
        return $this->belongsTo(ServiceSection::class, 'service_section_id');
    }
}
