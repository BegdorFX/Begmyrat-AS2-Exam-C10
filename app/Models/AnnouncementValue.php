<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementValue extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}
