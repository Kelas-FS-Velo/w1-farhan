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
            // "photo" => "https://ui-avatars.com/api/?name=Farhan+Fakhrudin&background=0D8ABC&color=fff",
            "socials" => [
                "github" => "https://github.com/fakhrudinf",
                "linkedin" => "https://linkedin.com/in/",
                "instagram" => "https://instagram.com/farhanfar24"
            ]
        ]);
    }
}
