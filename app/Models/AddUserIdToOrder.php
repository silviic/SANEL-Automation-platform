<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class AddUserIdToOrder extends Model
{
    //
    protected $table = "orders";

    public function save(array $options = [])
    {
        $this->user_id = Auth::user()->id;
        parent::save();
    }
}