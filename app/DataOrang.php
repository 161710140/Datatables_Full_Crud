<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataOrang extends Model
{

	protected $table= 'data_orangs';
    protected $fillable = array('Nama','Lahir','Status','Gender');
    public $timestamp = true;
}
