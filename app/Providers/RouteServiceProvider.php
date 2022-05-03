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
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    protected $namespace = 'App\\Http\\Controllers';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->namespace($this->namespace)
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
               ->namespace($this->namespace)   
                ->group(base_path('routes/web.php'));
            
                //accountant
                Route::prefix('accountant')
                ->middleware(['web',])
                ->namespace("{$this->namespace}")
                ->group(base_path('routes/accountant.php'));

                //manager - de momento
                Route::prefix('manager')
                ->middleware(['web','auth','is.manager'])
                ->namespace("{$this->namespace}\Manager")
                ->group(base_path('routes/manager.php'));

                //seller
                Route::prefix('seller')
                ->middleware(['web',])
                ->namespace("{$this->namespace}")
                ->group(base_path('routes/seller.php'));

                //supervisor
                Route::prefix('supervisor')
                ->middleware(['web','is.supervisor','auth'])
                ->namespace("{$this->namespace}\Supervisor")
                ->group(base_path('routes/supervisor.php'));

            // Route::middleware('web')
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/admin.php'));
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
    }
}
