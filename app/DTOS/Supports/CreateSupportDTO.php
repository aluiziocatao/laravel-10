<?php

namespace App\DTOS\Supports;

use App\Http\Requests\StoreUpdateSupportRequest;
use App\Enums\SupportStatus;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public SupportStatus $status,
        public string $body,
    ){ }

    public static function makeFromRequest(StoreUpdateSupportRequest $request): self
    {
        return new self(
            $request->subject,
            SupportStatus::A,
            $request->body
        );
    }
}
