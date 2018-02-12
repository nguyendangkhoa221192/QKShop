<?php

namespace App\Model\TopSlider;

use Illuminate\Database\Eloquent\Model;

class TopSliderGroup extends Model
{
    protected $table='top_slider_groups';
    public function top_silders() {
      return $this->hasMany('App\Model\TopSlider\TopSlider', 'top_slider_groups_id');
    }
}
