<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class OfficerManagementController extends Controller
{
    public function index(): View
    {
        // Sample officer data (replace with your actual data retrieval logic)
        $officers = [
            [
                'name' => 'Kasun Perera',
                'district' => 'Colombo',
                'division' => 'Maharagama',
                'contact_number' => '077-1234567',
                'id_no' => '198512345678',
            ],
            [
                'name' => 'Nimal Silva',
                'district' => 'Gampaha',
                'division' => 'Negombo',
                'contact_number' => '071-9876543',
                'id_no' => '199287654321',
            ],
            [
                'name' => 'Saman Kumara',
                'district' => 'Kalutara',
                'division' => 'Panadura',
                'contact_number' => '070-5551212',
                'id_no' => '198833344455',
            ],
            [
                'name' => 'Ruwan Fernando',
                'district' => 'Colombo',
                'division' => 'Kollupitiya',
                'contact_number' => '076-1122334',
                'id_no' => '199099887766',
            ],
            [
                'name' => 'Dilani Mendis',
                'district' => 'Gampaha',
                'division' => 'Wattala',
                'contact_number' => '072-4455667',
                'id_no' => '198765432109',
            ],
            // Add more officer data here...
        ];

        return view('dashboard.all-officers', compact('officers'));
    }
}