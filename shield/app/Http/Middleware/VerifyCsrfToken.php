<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //aca le indico que no me pida el token a las siguientes rutas porque estoy en el mismo server
        "usuario/registro",
        "usuario/login"
    ];
}
