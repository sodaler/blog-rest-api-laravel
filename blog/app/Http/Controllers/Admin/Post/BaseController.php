<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use App\Services\Post\Service;


class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
