<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {
        return response()->json([
            "name" => "Farhan Fakhrudin",
            "description" => "Junior Fullstack Developer | Passionate about Web Development & Technology",
            "photo" => asset('storage/profile.png'),
            "socials" => [
                "github" => "https://github.com/fakhrudinf",
                "linkedin" => "https://linkedin.com/in/",
                "instagram" => "https://instagram.com/farhanfar24"
            ]
        ]);
    }
}
