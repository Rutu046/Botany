<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class papers extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // Add 'title' to the fillable attributes
        'abstract',
        'keywords',
        'publication_date',
        'author_document_url',
        'user_id',
        'authors'
    ];
    
}
