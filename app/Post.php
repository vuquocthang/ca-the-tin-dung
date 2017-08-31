<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/12/2017
 * Time: 3:05 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'post';

    protected $fillable = ['title', 'body', 'meta_description'];
}