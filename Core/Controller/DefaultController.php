<?php

namespace Core\Controller;

use App\Security\JwTokenSecurity;
use Core\Traits\JsonTrait;

/**
 * @method void jsonResponse( mixed $data, int $code= 200 ) Envoie les données passées en paramètre au format json
 */
class DefaultController
{
    // On charge le JsonTrait de façon générique pour l'avoir sur tous nos controller.
    use JsonTrait;


    public function isGranted(string $roles): ?bool
    {
        $user = (new JwTokenSecurity)->decodeToken();

        if (!in_array($roles, $user['roles'])) {
            throw new \Exception("Accès interdit , vous n'avez pas le droit", 403);
        }

        return true;
    }
}
