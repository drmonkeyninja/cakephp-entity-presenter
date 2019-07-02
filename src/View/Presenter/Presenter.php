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
     * @param Entity $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Enables property-style retrieval
     *
     * @param string $property
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
