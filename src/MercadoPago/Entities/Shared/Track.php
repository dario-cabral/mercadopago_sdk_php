<?php
namespace MercadoPago;

/**
 * Track class
 */
class Track extends Entity
{
    /**
     * type
     * @Attribute(type = "string")
     * @var string
     */
    protected $type;

    /**
     * value
     * @Attribute(type = "object")
     * @var object
     */
    protected $value;
}