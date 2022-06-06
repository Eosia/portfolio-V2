<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'level', 'catgory_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
