<?php
namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Mavinoo\Batch\Batch as Batch;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserService {

    public function __construct(){

    }
    public function getUUID(){
        $this->createUID();
        $data = [];
        $all = User::all()->reverse();
        foreach($all as $key => $piece){
            $data[$piece->uuid] = date($piece->created_at);
        }
        return $data;
    }
    public function createUID(){
        User::create([
            'uuid'=>Str::uuid()
        ]);
    }
}
