<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\Enums\pgpApp;

final class Scan
{
    public const TYPE_PGP_REGISTERED = 'pgp_registered';
    public const TYPE_BBI = 'bbi';

    public const STATUS_DELIVERED = '40_delivered';
    public const STATUS_COULD_NOT_DELIVER = '55_could_not_deliver';

    public const STATUS_RECEIVED_IN_HUB = '50_received';
    public const STATUS_PROCESSED_IN_HUB = '60_processed_in_hub';
    public const STATUS_FORWARDED_FROM_HUB = '70_forwarded_from_hub';

}