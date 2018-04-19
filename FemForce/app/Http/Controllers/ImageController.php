<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class ImageController extends Controller
{
    /**
     * Store an image
     *
     * @param $imageService
     * @return string
     */
    public function create(Request $request){
        foreach($request->file() as $file) {
            $path = $_FILES[0]['name'];
            if (isset($_POST['userImage'])) {
                $path = preg_replace('/\\.[^.\\s]{3,4}$/', '', $path); // this removes extension from filename
            }
            $path = str_replace('_', '', $path);
            $path = str_replace('(', '', $path);
            $path = str_replace(')', '', $path);

            $image = new Image;
            $path = str_random(64) . preg_replace('/\s+/', '', $path);
            $image->path = $path;
            $image->save();

            $imageFile = $_FILES[0];
            $errorCode = $imageFile['error'];
            if ($errorCode === UPLOAD_ERR_OK) { // If file was uploaded okay
                $type = exif_imagetype($imageFile['tmp_name']);
                if ($type) { // If type was found
                    $extension = image_type_to_extension($type);
                    $newFileName = 'img/' . $path;
                    if (file_exists($newFileName)) { // If file already exists
                        unlink($newFileName);
                    }
                    $result = move_uploaded_file($imageFile['tmp_name'], $newFileName);
                    if ($result) { // If file was moved successfully
                        switch($type) { // Create image based on type
                            case IMAGETYPE_PNG:
                                $image = imagecreatefrompng($newFileName);
                                break;
                            case IMAGETYPE_JPEG:
                                $image = imagecreatefromjpeg($newFileName);
                                break;
                            case IMAGETYPE_GIF:
                                $image = imagecreatefromgif($newFileName);
                                break;
                            default:
                        }
                        $width=imagesx($image);
                        $height=imagesy($image);
                        $newImage = imagecreatetruecolor($width,$height);
                        $borderColor = imagecolorallocate($newImage, 255, 255, 255);
                        imagefilledrectangle($newImage,0,0,$width, $height,$borderColor);
                        imagecopyresampled($newImage,$image,0,0,0,0, $width, $height, $width, $height);

                        switch($type) { // Create image based on type
                            case IMAGETYPE_PNG:
                                imagepng($newImage,$newFileName);
                                break;
                            case IMAGETYPE_JPEG:
                                imagejpeg($newImage,$newFileName);
                                break;
                            case IMAGETYPE_GIF:
                                imagegif($newImage,$newFileName);
                                break;
                            default:
                        }
                    }
                    else { // File could not be moved
                    }
                }
                else { // File type was not found
                }
            }
            else {
            }

            $file = new UploadedFile('img/' . $path, preg_replace('/\s+/', '', $path));

            return $path;
        }
    }
}
