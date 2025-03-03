<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterFuel extends Model
{
    protected $fillable = [
        'no_letter',
        'name',
        'nik',
        'address',
        'business_name',
        'user_consumer_sector',
        'business_type',
        'tool_type',
        'tool_sum',
        'tool_power',
        'tool_use',
        'tool_time_used_hour',
        'tool_time_used_daily',
        'jbt_consumption',
        'tool_sum2',
        'volume_allocation',
        'pick_up_place',
        'no_distributor',
        'address_distributor',
        'purchasing_tools_used',
        'no_wa'
    ];
}
