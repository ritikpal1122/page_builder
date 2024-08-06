<?php

// app/Models/Design.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    // If the table name is not the plural form of the model name
    protected $table = 'designs';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'html',
        'css',
        'page_id',
    ];

    // Optionally, you can define relationships if needed
}
