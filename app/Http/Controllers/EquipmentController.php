<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetEquipmentRequest;

class EquipmentController extends Controller {
    public function getEquipments(GetEquipmentRequest $request) {
        $data = $request->validated();
    }
}
