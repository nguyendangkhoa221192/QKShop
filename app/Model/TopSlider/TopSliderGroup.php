<?php

namespace App\Model\TopSlider;

use App\Model\BaseModel as Model;

class TopSliderGroup extends Model
{
    protected $table='top_slider_groups';
    
    public function top_sliders() {
      return $this->hasMany('App\Model\TopSlider\TopSlider', 'top_slider_groups_id');
    }
}
