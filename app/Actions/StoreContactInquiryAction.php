<?php

namespace App\Actions;

use App\Models\ContactInquiry;

final class StoreContactInquiryAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function handle(array $data, ?string $ipAddress = null): ContactInquiry
    {
        return ContactInquiry::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'inquiry_type' => $data['inquiry_type'] ?? 'playtest',
            'message' => $data['message'],
            'ip_address' => $ipAddress,
        ]);
    }
}
