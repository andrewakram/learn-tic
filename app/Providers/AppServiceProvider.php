<?php

namespace App\Providers;


use View;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['footer_contact'] = Setting::get();
    
        $footer_address_arabic = $data['footer_contact']->where('key' ,'address_ar')->first()->value ;
        $footer_address_english = $data['footer_contact']->where('key' ,'address_en')->first()->value ;
        $footer_phone = $data['footer_contact']->where('key' ,'phone_1')->first()->value ;
		$footer_email = $data['footer_contact']->where('key' ,'email_1')->first()->value ;
		$footer_facebook = $data['footer_contact']->where('key' ,'facebook')->first()->value ;
		$footer_twitter = $data['footer_contact']->where('key' ,'twitter')->first()->value ;
		$footer_instagram = $data['footer_contact']->where('key' ,'instagram')->first()->value ;
		$footer_youtube = $data['footer_contact']->where('key' ,'youtube')->first()->value ;
        View::share('footer_address_arabic' , $footer_address_arabic);
        View::share('footer_address_english' , $footer_address_english);
        View::share('footer_phone' , $footer_phone);
        View::share('footer_email' , $footer_email);
        View::share('footer_facebook' , $footer_facebook);
        View::share('footer_twitter' , $footer_twitter);
        View::share('footer_instagram' , $footer_instagram);
        View::share('footer_youtube' , $footer_youtube);

        $data['about_company']= Page::select('id', 'body_ar' ,'body_en' , 'type' )->get();
       $home_about = $data['about_company']->where('type' ,'home_about')->first() ;
       View::share('home_about' , $home_about);

        

        //
    }
}
