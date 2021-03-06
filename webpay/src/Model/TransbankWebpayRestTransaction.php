<?php

class TransbankWebpayRestTransaction extends ObjectModel
{
    const TABLE_NAME = 'webpay_rest_transactions';
    const STATUS_INITIALIZED = 1;
    const STATUS_FAILED = 2;
    const STATUS_ABORTED_BY_USER = 3;
    const STATUS_APPROVED = 4;
    
    public $id;
    public $cart_id;
    public $order_id;
    public $buy_order;
    public $token;
    public $session_id;
    public $status;
    public $response_code;
    public $transbank_response;
    public $currency_id;
    public $amount;
    public $vci;
    public $created_at;
    
    public static $definition = [
        'table' => self::TABLE_NAME,
        'primary' => 'id',
        'multilang' => false,
        'fields' => [
            'cart_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true],
            'buy_order' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true],
            'order_id' => ['type' => self::TYPE_STRING, 'validate' => 'isUnsignedInt','allow_null' => true],
            'token' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true],
            'session_id' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'allow_null' => true],
            'status' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true],
            'response_code' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'allow_null' => true],
            'currency_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => true],
            'transbank_response' => ['type' => self::TYPE_HTML, 'validate' => 'isString', 'allow_null' => true],
            'amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true],
            'vci' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'created_at' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        ]
    ];
    
}
