<?php

namespace App\Services;

class Queries
{
    public static function testExample()
    {
        $args = [
            'post_type' => 'post'
        ];
        $queryAll = new \WP_Query($args);
        return [
            'posts' => $queryAll->post
        ];
    }

    public static function getBanner()
    {
        $args = [
            'post_type' => 'banner_code'
        ];
        $queryAll = new \WP_Query($args);
        $banner = [];

        if($queryAll->post_count >0)
        {
            $banner = array_map(function($banner){
                $title = get_field('title',$banner);
                $image = get_field('image',$banner);
                $description = get_field('description',$banner);


                $url = $image['url'];
                $Imgtitle = $image['title'];
                $Imgalt = $image['alt'];
                $Imgcaption = $image['caption'];


                $size = 'medium';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size. '-width'];
                $height = $image['sizes'][$size. '-height'];

                return (object)[
                    'title' => $title,
                    'url' => $url,
                    'description' => $description,
                    $image['title'] => $Imgtitle,
                    'alt' => $Imgalt,
                    'caption' => $Imgcaption,
                    'thumb' => $thumb,
                    'width' => $width,
                    'height' => $height,
                ];
            },$queryAll->posts);

            wp_reset_postdata();
        }
        return $banner;
    }
    public static function getContent()
    {
        $args = [
            'post_type' => 'Content_code'
        ];
        $queryAll = new \WP_Query($args);
        $content = [];

        if($queryAll->post_count >0)
        {
            $content = array_map(function($content){
                $title = get_field('title',$content);
                $image = get_field('image',$content);
                $description = get_field('description',$content);


                $url = $image['url'];
                $Imgtitle = $image['title'];
                $Imgalt = $image['alt'];
                $Imgcaption = $image['caption'];


                $size = 'medium';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size. '-width'];
                $height = $image['sizes'][$size. '-height'];

                return (object)[
                    'title' => $title,
                    'url' => $url,
                    'description' => $description,
                    $image['title'] => $Imgtitle,
                    'alt' => $Imgalt,
                    'caption' => $Imgcaption,
                    'thumb' => $thumb,
                    'width' => $width,
                    'height' => $height,
                ];
            },$queryAll->posts);

            wp_reset_postdata();
        }
        return $content;
    }

    public static function getSub()
    {
        $args = [
            'post_type' => 'sub_code'
        ];
        $queryAll = new \WP_Query($args);
        $sub = [];

        if($queryAll->post_count >0)
        {
            $sub = array_map(function($sub){
                $title = get_field('title',$sub);
                $image = get_field('image',$sub);
                $description = get_field('description',$sub);

                $url = $image['url'];
                $Imgtitle = $image['title'];
                $Imgalt = $image['alt'];
                $Imgcaption = $image['caption'];


                $size = 'medium';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size. '-width'];
                $height = $image['sizes'][$size. '-height'];

                return (object)[
                    'title' => $title,
                    'url' => $url,
                    'url' => $url,
                    'description' => $description,
                    //$image['url'] => $ImgUrl,
                    $image['title'] => $Imgtitle,
                    'alt' => $Imgalt,
                    'caption' => $Imgcaption,
                    'thumb' => $thumb,
                    'width' => $width,
                    'height' => $height,
                ];
            },$queryAll->posts);

            wp_reset_postdata();
        }
        return $sub;
    }

    public static function getSub2()
    {
        $args = [
            'post_type' => 'sub2_code'
        ];
        $queryAll = new \WP_Query($args);
        $sub2 = [];

        if($queryAll->post_count >0)
        {
            $sub2 = array_map(function($sub2){
                $title = get_field('title',$sub2);
                $image = get_field('image',$sub2);
                $description = get_field('description',$sub2);

                $url = $image['url'];
                $Imgtitle = $image['title'];
                $Imgalt = $image['alt'];
                $Imgcaption = $image['caption'];


                $size = 'medium';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size. '-width'];
                $height = $image['sizes'][$size. '-height'];

                return (object)[
                    'title' => $title,
                    'url' => $url,
                    'url' => $url,
                    'description' => $description,
                    //$image['url'] => $ImgUrl,
                    $image['title'] => $Imgtitle,
                    'alt' => $Imgalt,
                    'caption' => $Imgcaption,
                    'thumb' => $thumb,
                    'width' => $width,
                    'height' => $height,
                ];
            },$queryAll->posts);

            wp_reset_postdata();
        }
        return $sub2;
    }

}
