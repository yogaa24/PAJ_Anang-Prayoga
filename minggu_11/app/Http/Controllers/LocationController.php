<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
        
        public function index()
        {
            $provinsi = $this->getData('provinsi.json');
            return view('location.index', compact('provinsi'));
        }
        
        public function getKabupaten($id)
        {
            $kabupaten = $this->getData ("kabupaten/{$id}.json");
            return response()->json($kabupaten);
        }

        public function getKecamatan($id)
        {
            $kecamatan = $this->getData("kecamatan/{$id}.json");
            return response()->json($kecamatan);
        }

        public function getKelurahan($id)
        {
            $kelurahan = $this->getData("kelurahan/{$id}.json");
            return response()->json($kelurahan);
        }
        private function getData($endpoint)
        {
            $response = Http::get("https://ibnux.github.io/data-indonesia/{$endpoint}");
            return $response->json();
        }
}
