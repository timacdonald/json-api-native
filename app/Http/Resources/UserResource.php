<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class UserResource extends JsonApiResource
{
    public $attributes = [
        'name',
        'email',
    ];

    public $relationships = [
        'posts',
        'comments',
        'profile',
    ];
}
