<?php

namespace App\Http\Controllers;
use Cloudinary\Api\ApiUtils;
use Cloudinary\Configuration\CloudConfig;

use Illuminate\Http\Request;

class cloudinary extends Controller
{
    public function getsignature(){
        $cloudinaryConfig = new CloudConfig([
            "cloud_name" => "detdhdzmc",
            "api_key" => "334962378763715",
            "api_secret" => "Wg821eJEBRnK0QGCoJjSvTXvWL4"
        ]);
        $timestamp=time();
        $params =
            [
                "timestamp" => $timestamp,
                "folder" => 'books'
            ];
        $data = ['signature' => ApiUtils::signParameters($params, $cloudinaryConfig->apiSecret), 'timestamp' => $timestamp];
        return $data;
    }
}
