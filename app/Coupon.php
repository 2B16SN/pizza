<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use SoftDeletes;

    protected $table = 'coupons_master';
    protected $fillable = ['coupon_name','coupon_discount','coupon_conditions_money','product_id','coupon_start_date','coupon_end_date','coupon_number','coupon_conditions_count','coupon_conditions_first'];

    protected $dates = ['deleted_at'];

    public function couponType() {
        return $this->belongsTo('App\CouponType','coupon_type');
    }

}
