<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'complete_name',
        'email',
        'message'
    ];

    public function assignedUser()
    {
        return $this->belongsTo('App\Models\User', 'assigned_to', 'id');
    }

    public static function getAllInquiries()
    {
        // SELECT * FROM inquiries
        return static::all();
    }
}
