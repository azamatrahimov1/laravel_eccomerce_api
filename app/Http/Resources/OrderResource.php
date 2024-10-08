<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'delivery_method_id' => $this->deliveryMethod,
            'payment_type' => $this->paymentType,
            'sum' => $this->sum,
            'user' => $this->user,
            'status' => $this->status,
            'products' => $this->products,
            'address' => $this->address,
        ];
    }
}
