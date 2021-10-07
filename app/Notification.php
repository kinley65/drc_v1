<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use SoftDeletes;

    public $table = 'notifications';

    protected $date =[
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');

    }
}
