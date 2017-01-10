<?php namespace avancecommunicatie\AvncProp\Facades;

use Illuminate\Support\Facades\Facade;
use avancecommunicatie\AvncProp\Prop as AvncProp;

class Prop extends Facade {

    protected static function getFacadeAccessor() { return AvncProp::class; }

}
