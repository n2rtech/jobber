<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'survey';

    protected $fillable = [
        'customer_id',
        'banh_id',
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
        'county',
        'country',
        'eir_code',
        'isp',
        'telecompolfield',
        'esbpolefield',
        'virginmediafield',
        'wirelessopeartorfield',
        'otherispfield',
        'isp_note',
        'building_contractor_firstname',
        'building_contractor_lastname',
        'building_contractor_phone',
        'building_contractor_email',
        'electrical_contractor_firstname',
        'electrical_contractor_lastname',
        'electrical_contractor_phone',
        'electrical_contractor_email',
        'dish_location',
        'saorview_location',
        'repeater_location',
        'item',
        'tvsocketfield',
        'hdmifield',
        'ceilingspeakersfield',
        'electricalsocketfield',
        'cat56field',
        'wallmountedtvfield',
        'mprfield',
        'notes_general',
    ];

    protected $casts = [
        'isp' => 'array',
        'item' => 'array'
    ];

    public $timestamps      = true;

    public function cables()
    {
        return $this->hasMany(Cable::class);
    }

    public function banh()
    {
        return $this->belongsTo(Banh::class);
    }
}
