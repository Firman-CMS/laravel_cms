<?php

namespace LaravelCms;

use Illuminate\Database\Eloquent\Model;

class m_aboutme extends Model
{
    public $table = "tb_about";
    protected $primaryKey = "id_about";
    protected $fillable=[
    'complate_name',
    'date_birth',
    'nationality',
    'email',
    'number_phone',
    'aboutme',
    'pic'
];


}
