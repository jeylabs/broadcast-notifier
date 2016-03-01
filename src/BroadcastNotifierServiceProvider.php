<?php namespace Jeylabs\BroadcastNotifier;

use Illuminate\Support\ServiceProvider;
use Jeylabs\BroadcastNotifier\Events\TaskEvent;

class BroadcastNotifierServiceProvider extends ServiceProvider
{

    public function boot()
    {
        require __DIR__.'/Http/routes.php';
    }

    public function register()
    {
        event(new TaskEvent(['name'=> 'senthan' ,'age' => '21']));
    }

}