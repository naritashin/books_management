<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Position;
use App\ReletedBook;

class Book extends Model
{

  protected $fillable = [
    'title',
    'related_book_id',
    'position_id',
    'position_number',
    'volume_number'
  ];

  protected $dates = ['deleted_at'];

  public function position()
  {
    return $this->belongsTo(Position::class);
  }

  public function reletedBook()
  {
    return $this->belongsTo(ReletedBook::class, 'Releted_book_id');
  }
}
