<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'birth_date',
        'nationality',
        'mobile',
        'email',
        'address',
        'postcode',
        'emergency_phone',
        'emergency_name',
        'membership_plan',
        'skill_level',
        // 'skill_level_updated',
        'start_day'];
}
