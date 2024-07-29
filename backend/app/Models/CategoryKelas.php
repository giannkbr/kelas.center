<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryKelas extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

}
