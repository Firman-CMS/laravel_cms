<?php

namespace LaravelCms;

use Illuminate\Database\Eloquent\Model;

class m_aboutus extends Model
{
    public $table = "tb_about";
    protected $primaryKey = "id_about";
    protected $fillable=[
    'aboutus',
    'description'
];


}
