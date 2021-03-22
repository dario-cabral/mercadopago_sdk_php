<?php
namespace MercadoPago\Entities\Shared;

use MercadoPago\Entity;

/**
 * Tax class
 */
class Tax extends Entity
{
    /**
     * type
     * @Attribute(type = "string")
     * @var string
     */
    protected $type;

    /**
     * value
     * @Attribute(type = "float")
     * @var float
     */
    protected $value;
}