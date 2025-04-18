<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticaDatos extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'text_content', 'finaltitle'];
}
