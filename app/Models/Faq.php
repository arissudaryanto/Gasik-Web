<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faqs';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    public $timestamps = [ "created_at" ];
    protected $primaryKey = 'id';
    protected $guarded    = ['id'];
    
}
