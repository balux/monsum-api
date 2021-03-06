<?php

namespace Speicher210\Monsum\Api\Service\Subscription\SetUsageData;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractRequestData;

/**
 * The request data for setting usage data for a subscription.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The subscription ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

    /**
     * The article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * Quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * The unit price.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("UNIT_PRICE")
     */
    protected $unitPrice;

    /**
     * The description of the addon.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

    /**
     * The usage date.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("USAGE_DATE")
     */
    protected $usageDate;

    /**
     * The currency code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CURRENCY_CODE")
     */
    protected $currencyCode;

    /**
     * Constructor.
     *
     * @param integer $subscriptionId The subscription ID.
     * @param string $articleNumber The article number.
     */
    public function __construct($subscriptionId, $articleNumber)
    {
        $this->setSubscriptionId($subscriptionId);
        $this->setArticleNumber($articleNumber);
    }

    /**
     * Get the subscription ID.
     *
     * @return integer
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set the subscription ID.
     *
     * @param integer $subscriptionId The subscription ID.
     * @return RequestData
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the article number.
     *
     * @return integer
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Set the article number.
     *
     * @param string $articleNumber The article number.
     * @return RequestData
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * Get the quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param integer $quantity The quantity.
     * @return RequestData
     */
    public function setQuantity($quantity)
    {
        if ($quantity < 1) {
            throw new \InvalidArgumentException('Quantity must be bigger than 0.');
        }
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the unit price.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set the unit price.
     *
     * @param float $unitPrice The price.
     * @return RequestData
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return RequestData
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the currency code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the currency code.
     *
     * @param string $currencyCode The currency code.
     * @return RequestData
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the usage date.
     *
     * @return string
     */
    public function getUsageDate()
    {
        return $this->usageDate;
    }

    /**
     * Set the usage date.
     *
     * @param string $usageDate The usage date.
     * @return RequestData
     */
    public function setUsageDate($usageDate)
    {
        $this->usageDate = $usageDate;

        return $this;
    }
}
