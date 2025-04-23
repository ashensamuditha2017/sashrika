<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FarmerManagementController extends Controller
{
    public function index(): View
    {
        // Sample farmer data (replace with your actual data retrieval logic)
        $farmers = [
            [
                'name' => 'Kamal Rajapakse',
                'mobile_number' => '071-1122334',
                'district' => 'Kurunegala',
                'cultivation_size' => '2.5 Hectares',
                'village' => 'Polgahawela',
                'reported_damages' => 'Minor drought impact',
            ],
            [
                'name' => 'Priya Weerasinghe',
                'mobile_number' => '077-5566778',
                'district' => 'Anuradhapura',
                'cultivation_size' => '5 Hectares',
                'village' => 'Thalawa',
                'reported_damages' => 'Wild elephant intrusion',
            ],
            [
                'name' => 'Sunil Bandara',
                'mobile_number' => '070-9900112',
                'district' => 'Polonnaruwa',
                'cultivation_size' => '3 Hectares',
                'village' => 'Medirigiriya',
                'reported_damages' => 'Pest infestation',
            ],
            [
                'name' => 'Deepika Kumari',
                'mobile_number' => '076-3344556',
                'district' => 'Badulla',
                'cultivation_size' => '1.8 Hectares',
                'village' => 'Haputale',
                'reported_damages' => 'Heavy rainfall and landslides',
            ],
            [
                'name' => 'Rohan Perera',
                'mobile_number' => '072-7788990',
                'district' => 'Monaragala',
                'cultivation_size' => '4 Hectares',
                'village' => 'Siyambalanduwa',
                'reported_damages' => 'Water scarcity',
            ],
            // Add more farmer data here...
        ];

        return view('dashboard.all-farmers', compact('farmers'));
    }
}