<?php
namespace MercadoPago;

/**
 * Track Values class
 */
class TrackValues extends Entity
{
    /**
     * conversion_id
     * @Attribute(type = "string")
     * @var string
     */
    protected $conversion_id;

    /**
     * conversion_label
     * @Attribute(type = "string")
     * @var string
     */
    protected $conversion_label;

    /**
     * pixel_id
     * @Attribute(type = "string")
     * @var string
     */
    protected $pixel_id;
}