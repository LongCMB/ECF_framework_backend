<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Citation extends Model
{
    use HasFactory;
    protected $fillable = [
        'citation',
        'explication',
        'author_id'
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }
}
