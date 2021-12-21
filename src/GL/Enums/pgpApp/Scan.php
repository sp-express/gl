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
    public const TYPE_COURIER = 'courier';

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

    public const STATUS_COURIER_SCANNED = '10_scanned';
}