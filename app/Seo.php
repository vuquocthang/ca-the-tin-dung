<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/12/2017
 * Time: 2:15 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seo';


    protected $fillable = ['meta_description' , 'meta_keyword'];

}