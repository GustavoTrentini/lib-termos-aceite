<?php

namespace ApplySystem\TermosAceite\Models;

use Illuminate\Database\Eloquent\Model;

class TermosAceite extends Model
{
    protected $guarded = [];
    protected $table = 'termo_aceite';
    protected $filablle = [
        "termo",
        "user_id",
        "version"
    ];
}
