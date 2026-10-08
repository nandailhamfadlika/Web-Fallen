<?php

namespace App\Http\Controllers;

use App\Actions\StoreContactInquiryAction;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

final class ContactController extends Controller
{
    public function __construct(
        private readonly StoreContactInquiryAction $storeContactInquiry
    ) {}

    public function store(StoreContactRequest $request): RedirectResponse|JsonResponse
    {
        $this->storeContactInquiry->handle(
            $request->validated(),
            $request->ip()
        );

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda telah berhasil dikirimkan ke Noxvera Studio.',
            ]);
        }

        return redirect()->to(url('/#contact'))
            ->with('status', 'Pesan Anda telah berhasil diterima oleh tim Noxvera Studio. Bersiaplah menantang takhta!');
    }
}
