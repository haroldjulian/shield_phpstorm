<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01/07/2018
 * Time: 06:18 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends  BaseController
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}