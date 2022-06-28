<?php
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

if( !function_exists( 'compressImagePHP' ) ) {
    function compressImagePHP( $request, $key ) : string
    {
        if(is_array($request) ){
            $image = $request[ $key ];

        } else {
            $image = $request->file( $key );
        }

        $imageHashedName = $image->hashName();

        $imgExplodedName = explode( ".", $imageHashedName );

        $publicPath = public_path( 'images' ) . DIRECTORY_SEPARATOR;

        $img = Image::make( $image )->save( $publicPath . $imgExplodedName[ 0 ] . '.' . $imgExplodedName[ 1 ] );

        $img->backup();

        $img->resize( 200, null, function( $constraint ) {
            $constraint->aspectRatio();
            $constraint->upsize();
        } )->save( $publicPath . $imgExplodedName[ 0 ] . '-thumbs200.' . $imgExplodedName[ 1 ] );
        $img->reset();

        $img->destroy();

        return $imgExplodedName[ 0 ] . '.' . $imgExplodedName[ 1 ];
    }
}
