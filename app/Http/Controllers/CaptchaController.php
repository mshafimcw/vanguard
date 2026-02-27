<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CaptchaController extends Controller
{
    public function generate(Request $request)
    {
        // Generate new captcha always when refreshed
        if ($request->has('refresh') || $request->has('id')) {

            $code = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZ23456789"), 0, 6);
            Session::put('scrap_captcha', $code);
        } else {

            if (!Session::has('scrap_captcha')) {
                $code = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZ23456789"), 0, 6);
                Session::put('scrap_captcha', $code);
            } else {
                $code = Session::get('scrap_captcha');
            }
        }

        // Create Image
        $width = 180;
        $height = 60;

        $image = imagecreatetruecolor($width, $height);

        $bgColor = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $bgColor);

        $fontPath = public_path('fonts/Arial.ttf');
        $fontSize = 24;

        for ($i = 0; $i < strlen($code); $i++) {

            $angle = rand(-25, 25);
            $x = 20 + ($i * 25);
            $y = rand(35, 45);

            $textColor = imagecolorallocate($image, 0, 0, 0);

            imagettftext(
                $image,
                $fontSize,
                $angle,
                $x,
                $y,
                $textColor,
                $fontPath,
                $code[$i]
            );
        }

        Session::save();

        ob_start();
        imagepng($image);
        $imageData = ob_get_clean();
        imagedestroy($image);

        return response($imageData)->header('Content-Type', 'image/png');
    }
}
