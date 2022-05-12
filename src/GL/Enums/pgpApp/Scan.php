<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\Enums\pgpApp;

final class Scan
{
    public const TYPE_PGP_REGISTERED = 'pgp_registered';
    public const TYPE_BBI = 'bbi';
    public const TYPE_CSL_HOME_DELIVERY = 'csl_home_delivery';
    public const TYPE_ALI_RETURNS = 'ali_returns';
    public const TYPE_CSL_HOME_REDIRECT = 'csl_home_redirect';
    public const TYPE_PRODUCT = 'product';
    public const TYPE_TEST = 'test';

    public const STATUS_DELIVERED = '40_delivered';
    public const STATUS_COULD_NOT_DELIVER = '55_could_not_deliver';

    public const STATUS_RECEIVED_IN_HUB = '50_received';
    public const STATUS_PROCESSED_IN_HUB = '60_processed_in_hub';
    public const STATUS_FORWARDED_FROM_HUB = '70_forwarded_from_hub';

    public const STATUS_CSL_COLLECTED_FROM_WAREHOUSE = '20_collected';
    public const STATUS_CSL_DELIVERED = '40_delivered';
    public const STATUS_CSL_RETURN_TO_WAREHOUSE = '60_returned_to_warehouse';

    public const STATUS_ALI_RETURNS_SCANNED = '10_scanned';
    
    public const STATUS_CSL_HOME_REDIRECT_SCANNED = '10_scanned';

    public const STATUS_PRODUCT_SCANNED = '10_scanned';

    public const STATUS_PGP_REGISTERED_ACCEPTED_IN_HUB = 'STATUS_PGP_REGISTERED_ACCEPTED_IN_HUB';
    public const STATUS_PGP_REGISTERED_HANDED_OVER_FOR_DELIVERY = 'STATUS_PGP_REGISTERED_HANDED_OVER_FOR_DELIVERY';
    public const STATUS_PGP_REGISTERED_DELIVERED = 'STATUS_PGP_REGISTERED_DELIVERED';
    public const STATUS_PGP_REGISTERED_COLLECTION_NOTE = 'STATUS_PGP_REGISTERED_COLLECTION_NOTE';
    public const STATUS_PGP_REGISTERED_RETURNED_TO_HUB = 'STATUS_PGP_REGISTERED_RETURNED_TO_HUB';
    public const STATUS_PGP_REGISTERED_FORWARDED_TO_PUDO = 'STATUS_PGP_REGISTERED_FORWARDED_TO_PUDO';
    public const STATUS_PGP_REGISTERED_RETURN_TO_SENDER = 'STATUS_PGP_REGISTERED_RETURN_TO_SENDER';
    public const STATUS_PGP_REGISTERED_DELIVERY_ATTEMPT = 'STATUS_PGP_REGISTERED_DELIVERY_ATTEMPT';
    public const STATUS_PGP_REGISTERED_WRONG_ADDRESS_DATA = 'STATUS_PGP_REGISTERED_WRONG_ADDRESS_DATA';
    public const STATUS_PGP_REGISTERED_RECEIVER_REFUSED = 'STATUS_PGP_REGISTERED_RECEIVER_REFUSED';
    public const STATUS_PGP_REGISTERED_IN_DELIVERY = 'STATUS_PGP_REGISTERED_IN_DELIVERY';

    public const STATUS_TEST_NONE = 'STATUS_TEST_NONE';
    public const STATUS_TEST_SIGNATURE = 'STATUS_TEST_SIGNATURE';
    public const STATUS_TEST_SIGNATURE_2 = 'STATUS_TEST_SIGNATURE_2';
    public const STATUS_TEST_DOUBLE = 'STATUS_TEST_DOUBLE';
    public const STATUS_TEST_DOUBLE_2 = 'STATUS_TEST_DOUBLE_2';
}