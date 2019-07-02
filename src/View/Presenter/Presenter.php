<?php

namespace EntityPresenter\View\Presenter;

class Presenter
{
    /**
     * @var mixed
     */
    protected $entity;

    /**
     * Constructor
     *
     * @param Entity $entity Entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Enables property-style retrieval
     *
     * @param string $property Property name
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        return $this->entity->{$property};
    }
}
