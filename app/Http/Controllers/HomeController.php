<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Contracts\View\View;

final class HomeController extends Controller
{
    public function index(): View
    {
        $characters = Character::ordered()->get();

        $stages = [
            [
                'id' => 'ruined-academy',
                'name' => 'Ruined Academy',
                'subtitle' => 'Ruang Ujian yang Luluh Lantak',
                'description' => 'Gedung kampus yang hancur berkeping-keping akibat pertempuran liar perebutan Kursi Fallen. Tempat di mana ruang sidang Mike hancur, memicu dendam kursi lipatnya.',
                'image' => 'assets/stages/ruined_school_stage.png',
                'thumb' => 'assets/stages/ruined_academy_thumb.png',
                'hazard' => 'Death Zone Terbuka Lebar di Sayap Kanan & Kiri',
            ],
            [
                'id' => 'temple-ruin',
                'name' => 'Temple Ruin',
                'subtitle' => 'Kuil Reruntuhan Kuno',
                'description' => 'Reruntuhan altar kuno yang melayang di angkasa. Platform bebatuan bertingkat dengan jurang kehampaan tak berdasar tepat di bawah pijakan kaki.',
                'image' => 'assets/stages/temple_ruin_stage.png',
                'thumb' => 'assets/stages/temple_ruin_thumb.png',
                'hazard' => 'Platform Bertingkat & Knockback Berbahaya',
            ],
        ];

        return view('home', compact('characters', 'stages'));
    }
}
