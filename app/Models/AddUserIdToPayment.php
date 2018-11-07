<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class AddUserIdToPayment extends Model
{
    //
    protected $table = "payments";

    public function save(array $options = [])
    {
        $this->user_id = Auth::user()->id;
        parent::save();
    }
}