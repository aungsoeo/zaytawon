<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MonkEntranceForm extends Model
{
    //
    protected $table = 'monk_entrance_form';

    protected $fillable = [
        "degree",
        "age" ,
        "war_taw",
        "birth_date",
        "birth_place",
        "thatharnar_no" ,
        "live_monastery",
        "teacher_name_address",
        "lived_monastery",
        "learned_monastery",
        "f_name",
        "f_address",
        "passed_gov_sch"
    ];

}
