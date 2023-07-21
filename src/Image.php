<?php

namespace Farisc0de\PhpFileUploading;

/**
 * Image Class
 *
 * @version 1.5.3
 * @category File_Upload
 * @package PhpFileUploading
 * @author fariscode <farisksa79@gmail.com>
 * @license MIT
 * @link https://github.com/farisc0de/PhpFileUploading
 */
class Image
{
    /**
     * Encode Image to Base64
     * 
     * @param string $image_data
     *  The image data to be encoded
     * @param string $image_type
     *  The image type to be encoded
     */
    public function encodeImage($image_data, $image_type)
    {
        return 'data:image/' . $image_type . ';base64,' . base64_encode($image_data);
    }
}
