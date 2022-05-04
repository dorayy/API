<?php

namespace App\Security;

use DateInterval;
use Firebase\JWT\JWT;

class JwTokenSecurity
{

    private const SIGNATURE = "ipssi";
    private const ALGO = "HS256";

    /**
     * Genere un token jwt
     * 
     * @param array $payload
     * @return string
     */
    public function generateToken(array $payload = []): string
    {
        $date = new \DateTime();
        $exp = $date->add(new DateInterval("P1D"));

        $defaultPayload = [
            'iss' => 'http://localhost:8080',
            'eexp' =>  $exp
        ];
        $payload = array_merge($payload, $defaultPayload);

        return JWT::encode($payload, self::SIGNATURE, self::ALGO);
    }
}
