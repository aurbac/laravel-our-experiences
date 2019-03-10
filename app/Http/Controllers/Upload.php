<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Laravel\AwsFacade as AWS;
use DB;
use App\Pictures;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class Upload extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (env('DB_HOST')=='127.0.0.1' && env('DB_DATABASE')=='homestead' && env('DB_USERNAME')=='homestead' && env('DB_PASSWORD')=='secret')
            return redirect('');
        return view('upload');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {

        $image = $request->file('image');
        $path = "";
        if (Input::hasFile('picture'))
        {
            $path = Input::file('picture')->getRealPath();
            $name = Input::file('picture')->getClientOriginalName();

            $description = $request->input('description');

            $slug = Str::slug(explode(".",$name)[0], '-');
            $uuid = Str::uuid()->toString();
            $name_file = $uuid."-".$slug.'.jpg';

            /*$img = Image::make(Input::file('picture')->getRealPath())->resize(348, 225,
            function ($constraint) {
                $constraint->aspectRatio();
            })->resizeCanvas(348, 225, 'center', false, env('BG_THUMBNAIL'))->save('/tmp/thumbnail-'.$name_file);*/

            $img = Image::make(Input::file('picture')->getRealPath());
            
            $my_height = $img->height();
            $my_width = $img->width();




            if ($img->height()>$img->width()){
                $img->widen(348,
                function ($constraint) {
                    $constraint->upsize();
                    //$constraint->aspectRatio();
                });
            }else{
                $img->heighten(225,
                function ($constraint) {
                    $constraint->upsize();
                    //$constraint->aspectRatio();
                });
            }

            $canvas = Image::canvas(348, 225);
            $canvas->insert($img, 'center');
            $canvas->save('/tmp/thumbnail-'.$name_file);

            Input::file('picture')->move("/tmp/", $name_file);

            $s3 = AWS::createClient('S3');
            $result = $s3->putObject(array(
                'Bucket'     => env('AWS_BUCKET'),
                'Key'        => 'images/'.$name_file,
                'ACL' => 'public-read',
                'SourceFile' => "/tmp/".$name_file,
            ));

            $result = $s3->putObject(array(
                'Bucket'     => env('AWS_BUCKET'),
                'Key'        => 'images/thumbnail-'.$name_file,
                'ACL' => 'public-read',
                'SourceFile' => "/tmp/thumbnail-".$name_file,
            ));

            $picture = new Pictures;
            $picture->key = $name_file;
            $picture->description = $description;
            $picture->save();
        }

        return redirect('')->with('success','Picture uploaded successfully!');
    }


}
