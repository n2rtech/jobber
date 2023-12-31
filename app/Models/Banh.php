<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banh extends Model
{
    use HasFactory;

    protected $table        = 'banh';

    protected $fillable     = [
        'customer_id',
        'job_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'mobile_1',
        'partner_firstname',
        'partner_lastname',
        'partner_mobile_1',
        'address_1',
        'address_2',
        'city',
        'state',
        'county',
        'country',
        'dwelling_type',
        'plan',
        'area',
        'floor_type',
        'floor_type_note1',
        'floor_type_note2',
        'wall_type',
        'wall_type_note_1',
        'wall_type_note_2',
        'tv',
        'wifi',
        'multiroom_music',
        'mobile_phone_repeaters',
        'mobile_operator',
        'building_contractor',
        'building_contractor_phone',
        'building_contractor_email',
        'electrical_contractor',
        'electrical_contractor_phone',
        'electrical_contractor_email',
        'information',
        'move_in_date',
        'isp',
        'discussed',
        'signature',
        'signature_date'
    ];

    protected $casts = [
        'tv' => 'array',
        'wifi' => 'array',
        'multiroom_music' => 'array',
        'mobile_phone_repeaters' => 'array',
        'mobile_operator' => 'array',
        'isp' => 'array'
    ];

    public $timestamps      = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function survey()
    {
        return $this->hasOne(Survey::class, 'banh_id');
    }

}
