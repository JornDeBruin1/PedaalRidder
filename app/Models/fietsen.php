<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fietsen extends Model
{
    use HasFactory;

    protected $table = 'fietsen';

    public function reviews()
    {
        return $this->morphMany(Review::class, 'product');
    }
}