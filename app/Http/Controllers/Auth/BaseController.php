<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Services\RegisterServices;


class BaseController extends Controller
{
    public $services;

    public function __construct(RegisterServices $services)
    {
        $this->services = $services;
    }
}
