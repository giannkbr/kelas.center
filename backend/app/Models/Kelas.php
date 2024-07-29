<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function category()
    {
        return $this->belongsTo(CategoryKelas::class, 'category_id', 'id');
    }

    public function mentors()
    {
        return $this->belongsToMany(Mentor::class);
    }

}

