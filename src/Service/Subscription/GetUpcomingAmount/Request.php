<?php

namespace Speicher210\Monsum\Api\Service\Subscription\GetUpcomingAmount;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractRequest;

/**
 * The request for getting the upcoming amount.
 */
class Request extends AbstractRequest
{
    /**
     * Request.
     *
     * @var RequestData
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\GetUpcomingAmount\RequestData")
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
        return 'subscription.getupcomingamount';
    }
}
