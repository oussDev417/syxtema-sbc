<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mail', 'phone', 'Message', 'datestart', 'dateend', 'Post_id'
    ];

    public function space()
    {
        return $this->belongsTo(Post::class, 'Post_id');
    }
}