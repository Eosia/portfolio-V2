<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/console';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        RateLimiter::for('home', function (Request $request) {
            return $request->user()
                ? Limit::perMinute(100)->by($request->user()->id)
                : Limit::perMinute(3)->response(function () {
                    return redirect()->to('https://www.netshield.pw/');
                })->by($request->ip());
        });

        // rate limiter for home route
        RateLimiter::for('home', function (Request $request) {
            return $request->user()
                ? Limit::perMinute(100)->by($request->user()->id)
                : Limit::perMinute(3)->response(function () {
                    return redirect()->to('https://www.netshield.pw/');
                })->by($request->ip());
        });

        // rate limiter for skills route
        RateLimiter::for('skills', function (Request $request) {
            return $request->user()
                ? Limit::perMinute(100)->by($request->user()->id)
                : Limit::perMinute(3)->response(function () {
                    return redirect()->to('https://www.netshield.pw/');
                })->by($request->ip());
        });

        // rate limiter for portfolio route
        RateLimiter::for('portfolio', function (Request $request) {
            return $request->user()
                ? Limit::perMinute(100)->by($request->user()->id)
                : Limit::perMinute(3)->response(function () {
                    return redirect()->to('https://www.netshield.pw/');
                })->by($request->ip());
        });

        // rate limiter for contact route
        RateLimiter::for('contact', function (Request $request) {
            return $request->user()
                ? Limit::perMinute(100)->by($request->user()->id)
                : Limit::perMinute(3)->response(function () {
                    return redirect()->to('https://www.netshield.pw/');
                })->by($request->ip());
        });

    }
}




















