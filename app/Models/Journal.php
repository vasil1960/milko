<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function article()
    {
        return $this->hasMany(Article::class, 'journal_id');
    }
}
