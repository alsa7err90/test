<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Response::macro('successApi', function ($data,$message="success") {
            return Response::json([
              'errors'  => false,
              'data' => $data,
              'message'=>$message,
            ]);
        });

        Response::macro('errorApi', function ($message, $status = 400) {
            return Response::json([
              'errors'  => true,
              'message' => $message,
            ], $status);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


    }
}
