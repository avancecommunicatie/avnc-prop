<?php namespace avancecommunicatie\AvncProp;

class Prop
{
    /**
     * Returns a property
     *
     * @param mixed $prop
     * @return mixed
     */
    public function get($prop) {
        if(isset($this->{$prop})){
            return $this->{$prop};
        }
        return 'Prop::get('.$prop.')';
    }

    /**
     * Set a property
     *
     * @param mixed $prop
     */
    public function set($prop, $value) {
        $this->{$prop} = $value;
    }

    public function cleanGet($prop, $default = null){
        if(isset($this->{$prop})){
            return $this->{$prop};
        }
        return $default;
    }
}
