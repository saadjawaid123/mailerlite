<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Subscriber\SubscriberController as ApiSubscriberController;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class SubscriberController extends Controller
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return app()->get(ApiSubscriberController::class)->getDatatable($request);
        }

        return view('dashboard');
    }

    public function create()
    {
        return view('subscriber.create');
    }
}
