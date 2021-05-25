<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\User\UserService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function showUIID(){
        $lists = $this->userService->getUUID();
        return view('table', \compact('lists'));
    }
}
