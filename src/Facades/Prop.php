<?php namespace avancecommunicatie\Prop\Facades;

use Illuminate\Support\Facades\Facade;
use avancecommunicatie\Prop\Prop as AvncProp;

class Prop extends Facade {

    protected static function getFacadeAccessor() { return AvncProp::class; }

}
