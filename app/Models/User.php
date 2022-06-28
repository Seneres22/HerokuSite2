<?php
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Model;

 class User extends Model{
    

    protected $table = 'tableusers';

 // column sa table
    protected $fillable = [
        'FullName', 'Age', 'Gender', 'jobid'
    ];

    public $timestamps = false;
    protected $primarykey = 'id';
 }