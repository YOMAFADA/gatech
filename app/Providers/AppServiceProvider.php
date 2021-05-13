<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
//import this
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider{
  /**
  * Register any application services.
  *
  * @return void
  */
  $this->app->singleton(Connection::class, function ($app) {
    return new Connection(config('riak'));
});
}
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
   public function boot(){
      //
   }
}