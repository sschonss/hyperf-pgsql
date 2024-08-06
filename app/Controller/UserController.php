<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\User;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class UserController
{
    public function index(RequestInterface $request, ResponseInterface $response): string
    {
        return User::all()->toJson();
    }
}
