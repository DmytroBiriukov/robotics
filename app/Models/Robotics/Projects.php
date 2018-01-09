<?php

namespace App\Models\Robotics;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

use App\Models\Robotics\Traits\Attribute\ProjectAttribute;

class Projects extends Model implements HasMediaConversions
{
    use HasMediaTrait,
        ProjectAttribute;
    protected $table = 'projects';

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }
}
