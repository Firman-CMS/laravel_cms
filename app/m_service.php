<?php

namespace LaravelCms;

use Illuminate\Database\Eloquent\Model;

class m_service extends Model
{
    public $table = "tb_service";
    protected $primaryKey = "id_service";
    protected $fillable=[
    'icon',
    'service',
    'description',
    'status'
];


}
