<?php

namespace App\Providers;

use App\services\MailchimpNewsLetter;
use App\services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsLetter::class,function (){
            $client =(new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us9'
            ]);
            return new MailchimpNewsLetter($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
    }
}
