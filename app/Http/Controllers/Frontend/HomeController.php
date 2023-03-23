<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://sobkisubazar.com/api/v2/sliders');
        $platinum = Http::get('https://sobkisubazar.com/api/v2/platinum');
        $advertisement = Http::get('https://sobkisubazar.com/api/v2/advertisement');

        $data = json_decode($response, true);
        $platinum = json_decode($platinum, true);
        $advertisement = json_decode($advertisement, true);


        $platinum_data = [];
        $advertisement_data = [];
        if ($data['status'] == '200') {
            $data = $data['data'];
        } else {
            $data = [];
        }
        foreach ($platinum['data'] as $pl) {
            $platinum_data[] = [
                'photo' => 'https://sobkisubazar.com/public/' . $pl['photo'],
            ];
        }
        foreach ($advertisement['data'] as $ad) {
            $advertisement_data[] = [
                'photo' => 'https://sobkisubazar.com/public/' . $ad['photo'],
            ];
        }
        return view('frontend.pages.index', compact('data', 'platinum_data', 'advertisement_data'));
    }
    public function adstore()
    {
        return view('frontend.pages.adstore');
    }
}
