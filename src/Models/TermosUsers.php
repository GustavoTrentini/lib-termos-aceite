<?php

namespace ApplySystem\TermosAceite\Models;

use Illuminate\Database\Eloquent\Model;

class TermosUsers extends Model
{
    protected $guarded = [];
    protected $table = 'termo_users';
    protected $filablle = [
        "termo_id",
        "user_id"
    ];
}
