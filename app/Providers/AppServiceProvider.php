<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        \View::composer('*', function ($view) {
            $statuses = \Cache::rememberForever('statuses', function () {
                        return [
                            1 => 'Принята',
                            2 => 'Заказ запчастей',
                            3 => 'В работе',
                            4 => 'Выполнено',
                            5 => 'Не выполнено',
                            6 => 'Выдано'
                        ];
                    });

            $view->with('statuses', $statuses);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
