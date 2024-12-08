<?php
use Illuminate\Contracts\Routing\UrlGenerator;

if (! function_exists('admin_url')) {
    function admin_url($path = null, $secure = null){
        if (is_null($path)) {
            return app(UrlGenerator::class);
        }
        return app('url')->to('admin/'.$path, $secure);
    }
}

if (! function_exists('convertImageName')) {
    function convertImageName($imageName): string
    {
        // Extract the file name and extension
        $fileInfo = pathinfo($imageName);

        // Build the new file name with @lg before the extension
        return $fileInfo['filename'] . '@lg.' . $fileInfo['extension'];
    }
}
