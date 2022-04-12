<?php
namespace App\Service;

class CommonModelService {

    public static function getPaginatedResult($model) {
        ($model::class)::paginate(20);
    }
}
