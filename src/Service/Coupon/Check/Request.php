<?php

namespace Speicher210\Monsum\Api\Service\Coupon\Check;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractRequest;

/**
 * The request for checking the coupon.
 */
class Request extends AbstractRequest
{
    /**
     * The request body.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Coupon\Check\RequestData")
     * @JMS\SerializedName("DATA")
     */
    protected $data;

    /**
     * Constructor.
     *
     * @param RequestData $requestData The data for the request.
     */
    public function __construct(RequestData $requestData = null)
    {
        parent::__construct();
        $this->data = $requestData;
    }

    /**
     * {@inheritdoc}
     */
    public function getService()
    {
        return 'coupon.check';
    }
}
