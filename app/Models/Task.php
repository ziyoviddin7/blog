<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
