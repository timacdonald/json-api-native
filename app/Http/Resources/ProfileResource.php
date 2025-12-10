<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class ProfileResource extends JsonApiResource
{
    public $attributes = [
        'created_at',
    ];

    public $relationships = [
        'user',
    ];
}
