<?php
namespace App\Service;

class CommonModelService {

    public static function getPaginatedResult($model) {
        return ($model)::paginate(20);
    }

    public static function getPaginatedResultWithCondition($model, $condition) {
        return ($model)::where($condition)->paginate(20);
    }

}
