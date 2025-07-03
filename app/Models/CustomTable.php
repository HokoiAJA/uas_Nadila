<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomTable extends Model
{
    /** @use HasFactory<\\Database\\Factories\\CustomTableFactory> */
    use HasFactory;

    protected $table = 'custom_table';

    protected $fillable = [
        'field1',
        'field2',
        'description',
    ];
}
