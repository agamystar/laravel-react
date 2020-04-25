<?php
namespace App\Http\Controllers;
use \Softon\LaravelFaceDetect\Facades\FaceDetect;
use Illuminate\Support\Facades\Storage;

class FaceDetection extends Controller
{
function detect(){
//here we are detecting the coordinates of face
$co = FaceDetect::extract(asset('storage/national.png'))->face;
//now we are creating new image form the existing image
$output = imagecreatefromjpeg(asset('storage/national.png'));
//the below function will draw green rectangle around the face
imagerectangle($output, $co['x'], $co['y'], $co['x']+$co['w'], $co['y']+$co['w'], 0x00ff00);
header('Content-Type: image/jpeg');
return imagejpeg($output);
}
}
?>