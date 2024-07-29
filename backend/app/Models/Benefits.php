<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryBenefits;

class Benefits extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'url',
        'description',
        'benefits'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryBenefits::class);
    }
}
