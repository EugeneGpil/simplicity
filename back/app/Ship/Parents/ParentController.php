<?php

namespace App\Ship\Parents;

use Illuminate\Http\JsonResponse;
use RuntimeException;

abstract class ParentController
{
    protected function transform(
        $data,
        string $resourceName,
    ): JsonResponse {
        $resource = app($resourceName, ['resource' => $data]);

        if (!$resource instanceof ParentResource) {
            $class = ParentResource::class;

            throw new RuntimeException(
                "Resource must extend the $class class"
            );
        }

        $responseData = $resource->toArray(request());

        return response()->json(['data' => $responseData]);
    }
}
