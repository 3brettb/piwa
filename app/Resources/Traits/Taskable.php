<?php

namespace App\Resources\Traits;

trait Taskable
{

    public function getTaskableDisplayAttribute()
    {
        return  $this->toString();
    }

    public function getTaskableNameAttribute()
    {
        return $this->toString();
    }

    public function getTaskableIdAttribute()
    {
        return self::CreateTaskableId($this);
    }

    public static function CreateTaskableId($model)
    {
        return str_replace("\\", "_", get_class($model))."-".$model->id;
    }

    public static function RetrieveTaskable($taskable_id)
    {
        $tasked = new \stdClass();
        $tasked->type = null;
        $tasked->id = null;

        preg_match("/([^-]+)-(.+)/", $taskable_id, $values);
        if($values != [])
        {
            $tasked->type = str_replace("_", "\\", $values[1]);
            $tasked->id = $values[2];
        }
        return $tasked;
    }

}