<?php
/**
 * AccountBillingPlan
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * AccountBillingPlan Class Doc Comment
 *
 * @category    Class
 * @description Contains information about an account billing plan.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountBillingPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountBillingPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_ons' => '\DocuSign\eSign\Model\AddOn[]',
        'app_store_receipt_expiration_date' => '?string',
        'app_store_receipt_purchase_date' => '?string',
        'can_cancel_renewal' => '?string',
        'can_upgrade' => '?string',
        'currency_code' => '?string',
        'downgrade_plan_information' => '\DocuSign\eSign\Model\DowngradePlanUpdateResponse',
        'enable_support' => '?string',
        'included_seats' => '?string',
        'incremental_seats' => '?string',
        'is_downgrade' => '?string',
        'notification_type' => '?string',
        'other_discount_percent' => '?string',
        'payment_cycle' => '?string',
        'payment_method' => '?string',
        'per_seat_price' => '?string',
        'plan_classification' => '?string',
        'plan_feature_sets' => '\DocuSign\eSign\Model\FeatureSet[]',
        'plan_id' => '?string',
        'plan_name' => '?string',
        'plan_start_date' => '?string',
        'product_id' => '?string',
        'renewal_date' => '?string',
        'renewal_status' => '?string',
        'seat_discounts' => '\DocuSign\eSign\Model\SeatDiscount[]',
        'subscription_start_date' => '?string',
        'support_incident_fee' => '?string',
        'support_plan_fee' => '?string',
        'tax_exempt_id' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_ons' => null,
        'app_store_receipt_expiration_date' => null,
        'app_store_receipt_purchase_date' => null,
        'can_cancel_renewal' => null,
        'can_upgrade' => null,
        'currency_code' => null,
        'downgrade_plan_information' => null,
        'enable_support' => null,
        'included_seats' => null,
        'incremental_seats' => null,
        'is_downgrade' => null,
        'notification_type' => null,
        'other_discount_percent' => null,
        'payment_cycle' => null,
        'payment_method' => null,
        'per_seat_price' => null,
        'plan_classification' => null,
        'plan_feature_sets' => null,
        'plan_id' => null,
        'plan_name' => null,
        'plan_start_date' => null,
        'product_id' => null,
        'renewal_date' => null,
        'renewal_status' => null,
        'seat_discounts' => null,
        'subscription_start_date' => null,
        'support_incident_fee' => null,
        'support_plan_fee' => null,
        'tax_exempt_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'add_ons' => 'addOns',
        'app_store_receipt_expiration_date' => 'appStoreReceiptExpirationDate',
        'app_store_receipt_purchase_date' => 'appStoreReceiptPurchaseDate',
        'can_cancel_renewal' => 'canCancelRenewal',
        'can_upgrade' => 'canUpgrade',
        'currency_code' => 'currencyCode',
        'downgrade_plan_information' => 'downgradePlanInformation',
        'enable_support' => 'enableSupport',
        'included_seats' => 'includedSeats',
        'incremental_seats' => 'incrementalSeats',
        'is_downgrade' => 'isDowngrade',
        'notification_type' => 'notificationType',
        'other_discount_percent' => 'otherDiscountPercent',
        'payment_cycle' => 'paymentCycle',
        'payment_method' => 'paymentMethod',
        'per_seat_price' => 'perSeatPrice',
        'plan_classification' => 'planClassification',
        'plan_feature_sets' => 'planFeatureSets',
        'plan_id' => 'planId',
        'plan_name' => 'planName',
        'plan_start_date' => 'planStartDate',
        'product_id' => 'productId',
        'renewal_date' => 'renewalDate',
        'renewal_status' => 'renewalStatus',
        'seat_discounts' => 'seatDiscounts',
        'subscription_start_date' => 'subscriptionStartDate',
        'support_incident_fee' => 'supportIncidentFee',
        'support_plan_fee' => 'supportPlanFee',
        'tax_exempt_id' => 'taxExemptId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_ons' => 'setAddOns',
        'app_store_receipt_expiration_date' => 'setAppStoreReceiptExpirationDate',
        'app_store_receipt_purchase_date' => 'setAppStoreReceiptPurchaseDate',
        'can_cancel_renewal' => 'setCanCancelRenewal',
        'can_upgrade' => 'setCanUpgrade',
        'currency_code' => 'setCurrencyCode',
        'downgrade_plan_information' => 'setDowngradePlanInformation',
        'enable_support' => 'setEnableSupport',
        'included_seats' => 'setIncludedSeats',
        'incremental_seats' => 'setIncrementalSeats',
        'is_downgrade' => 'setIsDowngrade',
        'notification_type' => 'setNotificationType',
        'other_discount_percent' => 'setOtherDiscountPercent',
        'payment_cycle' => 'setPaymentCycle',
        'payment_method' => 'setPaymentMethod',
        'per_seat_price' => 'setPerSeatPrice',
        'plan_classification' => 'setPlanClassification',
        'plan_feature_sets' => 'setPlanFeatureSets',
        'plan_id' => 'setPlanId',
        'plan_name' => 'setPlanName',
        'plan_start_date' => 'setPlanStartDate',
        'product_id' => 'setProductId',
        'renewal_date' => 'setRenewalDate',
        'renewal_status' => 'setRenewalStatus',
        'seat_discounts' => 'setSeatDiscounts',
        'subscription_start_date' => 'setSubscriptionStartDate',
        'support_incident_fee' => 'setSupportIncidentFee',
        'support_plan_fee' => 'setSupportPlanFee',
        'tax_exempt_id' => 'setTaxExemptId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_ons' => 'getAddOns',
        'app_store_receipt_expiration_date' => 'getAppStoreReceiptExpirationDate',
        'app_store_receipt_purchase_date' => 'getAppStoreReceiptPurchaseDate',
        'can_cancel_renewal' => 'getCanCancelRenewal',
        'can_upgrade' => 'getCanUpgrade',
        'currency_code' => 'getCurrencyCode',
        'downgrade_plan_information' => 'getDowngradePlanInformation',
        'enable_support' => 'getEnableSupport',
        'included_seats' => 'getIncludedSeats',
        'incremental_seats' => 'getIncrementalSeats',
        'is_downgrade' => 'getIsDowngrade',
        'notification_type' => 'getNotificationType',
        'other_discount_percent' => 'getOtherDiscountPercent',
        'payment_cycle' => 'getPaymentCycle',
        'payment_method' => 'getPaymentMethod',
        'per_seat_price' => 'getPerSeatPrice',
        'plan_classification' => 'getPlanClassification',
        'plan_feature_sets' => 'getPlanFeatureSets',
        'plan_id' => 'getPlanId',
        'plan_name' => 'getPlanName',
        'plan_start_date' => 'getPlanStartDate',
        'product_id' => 'getProductId',
        'renewal_date' => 'getRenewalDate',
        'renewal_status' => 'getRenewalStatus',
        'seat_discounts' => 'getSeatDiscounts',
        'subscription_start_date' => 'getSubscriptionStartDate',
        'support_incident_fee' => 'getSupportIncidentFee',
        'support_plan_fee' => 'getSupportPlanFee',
        'tax_exempt_id' => 'getTaxExemptId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['add_ons'] = isset($data['add_ons']) ? $data['add_ons'] : null;
        $this->container['app_store_receipt_expiration_date'] = isset($data['app_store_receipt_expiration_date']) ? $data['app_store_receipt_expiration_date'] : null;
        $this->container['app_store_receipt_purchase_date'] = isset($data['app_store_receipt_purchase_date']) ? $data['app_store_receipt_purchase_date'] : null;
        $this->container['can_cancel_renewal'] = isset($data['can_cancel_renewal']) ? $data['can_cancel_renewal'] : null;
        $this->container['can_upgrade'] = isset($data['can_upgrade']) ? $data['can_upgrade'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['downgrade_plan_information'] = isset($data['downgrade_plan_information']) ? $data['downgrade_plan_information'] : null;
        $this->container['enable_support'] = isset($data['enable_support']) ? $data['enable_support'] : null;
        $this->container['included_seats'] = isset($data['included_seats']) ? $data['included_seats'] : null;
        $this->container['incremental_seats'] = isset($data['incremental_seats']) ? $data['incremental_seats'] : null;
        $this->container['is_downgrade'] = isset($data['is_downgrade']) ? $data['is_downgrade'] : null;
        $this->container['notification_type'] = isset($data['notification_type']) ? $data['notification_type'] : null;
        $this->container['other_discount_percent'] = isset($data['other_discount_percent']) ? $data['other_discount_percent'] : null;
        $this->container['payment_cycle'] = isset($data['payment_cycle']) ? $data['payment_cycle'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['per_seat_price'] = isset($data['per_seat_price']) ? $data['per_seat_price'] : null;
        $this->container['plan_classification'] = isset($data['plan_classification']) ? $data['plan_classification'] : null;
        $this->container['plan_feature_sets'] = isset($data['plan_feature_sets']) ? $data['plan_feature_sets'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['plan_name'] = isset($data['plan_name']) ? $data['plan_name'] : null;
        $this->container['plan_start_date'] = isset($data['plan_start_date']) ? $data['plan_start_date'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['renewal_date'] = isset($data['renewal_date']) ? $data['renewal_date'] : null;
        $this->container['renewal_status'] = isset($data['renewal_status']) ? $data['renewal_status'] : null;
        $this->container['seat_discounts'] = isset($data['seat_discounts']) ? $data['seat_discounts'] : null;
        $this->container['subscription_start_date'] = isset($data['subscription_start_date']) ? $data['subscription_start_date'] : null;
        $this->container['support_incident_fee'] = isset($data['support_incident_fee']) ? $data['support_incident_fee'] : null;
        $this->container['support_plan_fee'] = isset($data['support_plan_fee']) ? $data['support_plan_fee'] : null;
        $this->container['tax_exempt_id'] = isset($data['tax_exempt_id']) ? $data['tax_exempt_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets add_ons
     *
     * @return \DocuSign\eSign\Model\AddOn[]
     */
    public function getAddOns()
    {
        return $this->container['add_ons'];
    }

    /**
     * Sets add_ons
     *
     * @param \DocuSign\eSign\Model\AddOn[] $add_ons Reserved:
     *
     * @return $this
     */
    public function setAddOns($add_ons)
    {
        $this->container['add_ons'] = $add_ons;

        return $this;
    }

    /**
     * Gets app_store_receipt_expiration_date
     *
     * @return ?string
     */
    public function getAppStoreReceiptExpirationDate()
    {
        return $this->container['app_store_receipt_expiration_date'];
    }

    /**
     * Sets app_store_receipt_expiration_date
     *
     * @param ?string $app_store_receipt_expiration_date 
     *
     * @return $this
     */
    public function setAppStoreReceiptExpirationDate($app_store_receipt_expiration_date)
    {
        $this->container['app_store_receipt_expiration_date'] = $app_store_receipt_expiration_date;

        return $this;
    }

    /**
     * Gets app_store_receipt_purchase_date
     *
     * @return ?string
     */
    public function getAppStoreReceiptPurchaseDate()
    {
        return $this->container['app_store_receipt_purchase_date'];
    }

    /**
     * Sets app_store_receipt_purchase_date
     *
     * @param ?string $app_store_receipt_purchase_date 
     *
     * @return $this
     */
    public function setAppStoreReceiptPurchaseDate($app_store_receipt_purchase_date)
    {
        $this->container['app_store_receipt_purchase_date'] = $app_store_receipt_purchase_date;

        return $this;
    }

    /**
     * Gets can_cancel_renewal
     *
     * @return ?string
     */
    public function getCanCancelRenewal()
    {
        return $this->container['can_cancel_renewal'];
    }

    /**
     * Sets can_cancel_renewal
     *
     * @param ?string $can_cancel_renewal Reserved: TBD
     *
     * @return $this
     */
    public function setCanCancelRenewal($can_cancel_renewal)
    {
        $this->container['can_cancel_renewal'] = $can_cancel_renewal;

        return $this;
    }

    /**
     * Gets can_upgrade
     *
     * @return ?string
     */
    public function getCanUpgrade()
    {
        return $this->container['can_upgrade'];
    }

    /**
     * Sets can_upgrade
     *
     * @param ?string $can_upgrade When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @return $this
     */
    public function setCanUpgrade($can_upgrade)
    {
        $this->container['can_upgrade'] = $can_upgrade;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return ?string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param ?string $currency_code Specifies the ISO currency code for the account.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets downgrade_plan_information
     *
     * @return \DocuSign\eSign\Model\DowngradePlanUpdateResponse
     */
    public function getDowngradePlanInformation()
    {
        return $this->container['downgrade_plan_information'];
    }

    /**
     * Sets downgrade_plan_information
     *
     * @param \DocuSign\eSign\Model\DowngradePlanUpdateResponse $downgrade_plan_information downgrade_plan_information
     *
     * @return $this
     */
    public function setDowngradePlanInformation($downgrade_plan_information)
    {
        $this->container['downgrade_plan_information'] = $downgrade_plan_information;

        return $this;
    }

    /**
     * Gets enable_support
     *
     * @return ?string
     */
    public function getEnableSupport()
    {
        return $this->container['enable_support'];
    }

    /**
     * Sets enable_support
     *
     * @param ?string $enable_support When set to **true**, then customer support is provided as part of the account plan.
     *
     * @return $this
     */
    public function setEnableSupport($enable_support)
    {
        $this->container['enable_support'] = $enable_support;

        return $this;
    }

    /**
     * Gets included_seats
     *
     * @return ?string
     */
    public function getIncludedSeats()
    {
        return $this->container['included_seats'];
    }

    /**
     * Sets included_seats
     *
     * @param ?string $included_seats The number of seats (users) included.
     *
     * @return $this
     */
    public function setIncludedSeats($included_seats)
    {
        $this->container['included_seats'] = $included_seats;

        return $this;
    }

    /**
     * Gets incremental_seats
     *
     * @return ?string
     */
    public function getIncrementalSeats()
    {
        return $this->container['incremental_seats'];
    }

    /**
     * Sets incremental_seats
     *
     * @param ?string $incremental_seats Reserved: TBD
     *
     * @return $this
     */
    public function setIncrementalSeats($incremental_seats)
    {
        $this->container['incremental_seats'] = $incremental_seats;

        return $this;
    }

    /**
     * Gets is_downgrade
     *
     * @return ?string
     */
    public function getIsDowngrade()
    {
        return $this->container['is_downgrade'];
    }

    /**
     * Sets is_downgrade
     *
     * @param ?string $is_downgrade 
     *
     * @return $this
     */
    public function setIsDowngrade($is_downgrade)
    {
        $this->container['is_downgrade'] = $is_downgrade;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return ?string
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param ?string $notification_type 
     *
     * @return $this
     */
    public function setNotificationType($notification_type)
    {
        $this->container['notification_type'] = $notification_type;

        return $this;
    }

    /**
     * Gets other_discount_percent
     *
     * @return ?string
     */
    public function getOtherDiscountPercent()
    {
        return $this->container['other_discount_percent'];
    }

    /**
     * Sets other_discount_percent
     *
     * @param ?string $other_discount_percent Any other percentage discount for the plan.
     *
     * @return $this
     */
    public function setOtherDiscountPercent($other_discount_percent)
    {
        $this->container['other_discount_percent'] = $other_discount_percent;

        return $this;
    }

    /**
     * Gets payment_cycle
     *
     * @return ?string
     */
    public function getPaymentCycle()
    {
        return $this->container['payment_cycle'];
    }

    /**
     * Sets payment_cycle
     *
     * @param ?string $payment_cycle 
     *
     * @return $this
     */
    public function setPaymentCycle($payment_cycle)
    {
        $this->container['payment_cycle'] = $payment_cycle;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return ?string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param ?string $payment_method The payment method used with the plan. The possible values are: CreditCard, PurchaseOrder, Premium, or Freemium.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets per_seat_price
     *
     * @return ?string
     */
    public function getPerSeatPrice()
    {
        return $this->container['per_seat_price'];
    }

    /**
     * Sets per_seat_price
     *
     * @param ?string $per_seat_price 
     *
     * @return $this
     */
    public function setPerSeatPrice($per_seat_price)
    {
        $this->container['per_seat_price'] = $per_seat_price;

        return $this;
    }

    /**
     * Gets plan_classification
     *
     * @return ?string
     */
    public function getPlanClassification()
    {
        return $this->container['plan_classification'];
    }

    /**
     * Sets plan_classification
     *
     * @param ?string $plan_classification Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @return $this
     */
    public function setPlanClassification($plan_classification)
    {
        $this->container['plan_classification'] = $plan_classification;

        return $this;
    }

    /**
     * Gets plan_feature_sets
     *
     * @return \DocuSign\eSign\Model\FeatureSet[]
     */
    public function getPlanFeatureSets()
    {
        return $this->container['plan_feature_sets'];
    }

    /**
     * Sets plan_feature_sets
     *
     * @param \DocuSign\eSign\Model\FeatureSet[] $plan_feature_sets A complex type that sets the feature sets for the account. It contains the following information (all string content):  * currencyFeatureSetPrices - Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, seatFee that are configured for this plan feature set. * envelopeFee - An incremental envelope cost for plans with envelope overages (when isEnabled=true). * featureSetId - A unique ID for the feature set. * fixedFee - A one-time fee associated with the plan (when isEnabled=true). * isActive - Specifies whether the feature set is actively set as part of the plan. * isEnabled - Specifies whether the feature set is actively enabled as part of the plan. * name - The name of the feature set. * seatFee - An incremental seat cost for seat-based plans (when isEnabled=true).
     *
     * @return $this
     */
    public function setPlanFeatureSets($plan_feature_sets)
    {
        $this->container['plan_feature_sets'] = $plan_feature_sets;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return ?string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param ?string $plan_id 
     *
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return ?string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param ?string $plan_name The name of the Billing Plan.
     *
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_start_date
     *
     * @return ?string
     */
    public function getPlanStartDate()
    {
        return $this->container['plan_start_date'];
    }

    /**
     * Sets plan_start_date
     *
     * @param ?string $plan_start_date 
     *
     * @return $this
     */
    public function setPlanStartDate($plan_start_date)
    {
        $this->container['plan_start_date'] = $plan_start_date;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return ?string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param ?string $product_id 
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets renewal_date
     *
     * @return ?string
     */
    public function getRenewalDate()
    {
        return $this->container['renewal_date'];
    }

    /**
     * Sets renewal_date
     *
     * @param ?string $renewal_date 
     *
     * @return $this
     */
    public function setRenewalDate($renewal_date)
    {
        $this->container['renewal_date'] = $renewal_date;

        return $this;
    }

    /**
     * Gets renewal_status
     *
     * @return ?string
     */
    public function getRenewalStatus()
    {
        return $this->container['renewal_status'];
    }

    /**
     * Sets renewal_status
     *
     * @param ?string $renewal_status The renewal status for the account. The acceptable values are:  * auto: The account automatically renews. * queued_for_close: Account will be closed at the billingPeriodEndDate. * queued_for_downgrade: Account will be downgraded at the billingPeriodEndDate.
     *
     * @return $this
     */
    public function setRenewalStatus($renewal_status)
    {
        $this->container['renewal_status'] = $renewal_status;

        return $this;
    }

    /**
     * Gets seat_discounts
     *
     * @return \DocuSign\eSign\Model\SeatDiscount[]
     */
    public function getSeatDiscounts()
    {
        return $this->container['seat_discounts'];
    }

    /**
     * Sets seat_discounts
     *
     * @param \DocuSign\eSign\Model\SeatDiscount[] $seat_discounts A complex type that contains any seat discount information.  Values are: BeginSeatCount, EndSeatCount, and SeatDiscountPercent.
     *
     * @return $this
     */
    public function setSeatDiscounts($seat_discounts)
    {
        $this->container['seat_discounts'] = $seat_discounts;

        return $this;
    }

    /**
     * Gets subscription_start_date
     *
     * @return ?string
     */
    public function getSubscriptionStartDate()
    {
        return $this->container['subscription_start_date'];
    }

    /**
     * Sets subscription_start_date
     *
     * @param ?string $subscription_start_date 
     *
     * @return $this
     */
    public function setSubscriptionStartDate($subscription_start_date)
    {
        $this->container['subscription_start_date'] = $subscription_start_date;

        return $this;
    }

    /**
     * Gets support_incident_fee
     *
     * @return ?string
     */
    public function getSupportIncidentFee()
    {
        return $this->container['support_incident_fee'];
    }

    /**
     * Sets support_incident_fee
     *
     * @param ?string $support_incident_fee The support incident fee charged for each support incident.
     *
     * @return $this
     */
    public function setSupportIncidentFee($support_incident_fee)
    {
        $this->container['support_incident_fee'] = $support_incident_fee;

        return $this;
    }

    /**
     * Gets support_plan_fee
     *
     * @return ?string
     */
    public function getSupportPlanFee()
    {
        return $this->container['support_plan_fee'];
    }

    /**
     * Sets support_plan_fee
     *
     * @param ?string $support_plan_fee The support plan fee charged for this plan.
     *
     * @return $this
     */
    public function setSupportPlanFee($support_plan_fee)
    {
        $this->container['support_plan_fee'] = $support_plan_fee;

        return $this;
    }

    /**
     * Gets tax_exempt_id
     *
     * @return ?string
     */
    public function getTaxExemptId()
    {
        return $this->container['tax_exempt_id'];
    }

    /**
     * Sets tax_exempt_id
     *
     * @param ?string $tax_exempt_id 
     *
     * @return $this
     */
    public function setTaxExemptId($tax_exempt_id)
    {
        $this->container['tax_exempt_id'] = $tax_exempt_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

