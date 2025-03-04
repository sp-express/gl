<?php

namespace swiatprzesylek\GL\Webhook\Enums;

enum Type: string
{
    case EXTERNAL_RETURN_CREATE = 'external_return_create';
    case EXTERNAL_RETURN_UPDATE = 'external_return_update';
}
