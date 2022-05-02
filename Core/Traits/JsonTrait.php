<?php

namespace Core\Traits;

/**
 * @method void jsonResponse(mixed $msg, int $code = 200) send data to parameters in json format
 */
trait JsonTrait
{
    protected function jsonResponse(mixed $msg, int $code = 200): void
    {
        header("content-type:application/json");
        http_response_code($code);
        echo json_encode($msg);
    }
}
