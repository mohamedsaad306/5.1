<?php

namespace MYCLANBLOG;

use Illuminate\Database\Eloquent\Model;

class Canidates extends Model
{
    //
    protected $fillable=[
    'name',
    'phone_number',
    'adress',
    'enroll_type',
    'enroll_list',
    'political_party',
    'government',
    'gov_circle',
    'list_number',
    'election_ico',
    'campaign_solgan',
    'campaign_program',
    ];
    
}
