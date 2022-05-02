<?php

namespace Core\Controller;

use Core\Traits\JsonTrait;

/**
 * @method void jsonResponse(mixed $msg, int $code = 200) send data to parameters in json format
 */
class DefaultController
{
    use JsonTrait;
}
