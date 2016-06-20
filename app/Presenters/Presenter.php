<?php

namespace App\Presenters;

abstract class Presenter
{
    /**
     * @var mixed
     */
    protected $entity;

    /**
     * Constructor method.
     *
     * @param mixed $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Allow for property-style retrieval.
     *
     * @param  $property
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property))
        {
            return $this->{$property}();
        }

        return $this->entity->{$property};
    }
}