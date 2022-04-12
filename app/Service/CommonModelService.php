<?php
namespace App\Service;

class CommonModelService {

    public static function getPaginatedResult($model) {
        return ($model)::paginate(20);
    }
}
