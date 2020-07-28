<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ButterCMS\ButterCMS;

class Post extends Model
{
    public static function fetchAll() {
        $result = self::butterCms()->fetchPosts(['page' => 1]);
        return $result->getPosts();
    }

    public static function find($slug) {
        $response = self::butterCms()->fetchPost($slug);
        return $response->getPost();
    }

    protected static function butterCms() {
        return new ButterCMS(env('BUTTER_CMS_API_KEY'));
    }
}
