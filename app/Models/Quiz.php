<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
      'quiz_category',
      'quiz_description',
      'duration'
    ];
    public function quizstore($request,$data)
    {
      return Quiz::create($data);
    }
}
