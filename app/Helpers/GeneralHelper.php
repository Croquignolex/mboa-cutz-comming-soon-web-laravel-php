<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

if(!function_exists('locale_route'))
{
    /**
     * Map route helper has local_route by adding language into url
     *
     * @param $name
     * @param array|null $parameters
     * @return string
     */
    function locale_route($name, array $parameters = null)
    {
        // Get current language
        $language = App::getLocale();

        // Return the correct route with language
        return $parameters == null
            ? route($name, compact('language'))
            : route($name, Arr::collapse([compact('language'), $parameters]));
    }
}

if(!function_exists('page_title'))
{
    /**
     * Get page title with app name into it
     *
     * @param $page
     * @return string
     */
    function page_title($page)
    {
        $appName = config('app.name');
        return $page === '' ? $appName : "$page - $appName";
    }
}

if(!function_exists('seo_keywords'))
{
    /**
     * Get SEO keywords
     *
     * @return string
     */
    function seo_keywords()
    {
        return 'mboa,cutz,hair,men,baber';
    }
}

if(!function_exists('seo_description'))
{
    /**
     * Get SEO description
     *
     * @return string
     */
    function seo_description()
    {
        return 'Baber shop';
    }
}
