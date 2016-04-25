<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    protected $fillable = ['category', 'name', 'monthly', 'semi_annually', 'annually', 'space', 'bandwith', 'addon_domain', 'email_hosting', 'railgun', 'backup', 'link'];
}
