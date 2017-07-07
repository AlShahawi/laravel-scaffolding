<?php
if (! function_exists('sidebarActive')) {

    /**
     * Generate html element class if route is equals to a given route.
     *
     * @param $route
     * @param string $className
     * @param array $conditions
     * @return string
     */
    function sidebarActive($route, $className = 'active', $conditions = [])
    {
        if (empty($conditions)) {
            return Route::currentRouteName() == $route ? $className : '';
        } else {

            foreach ($conditions as $key => $value) {
                if (request($key) == $value) {
                    return Route::currentRouteName() == $route ? $className : '';
                }
            }
        }
    }
}

if (! function_exists('sidebarResourceActive')) {

    /**
     * Generate html element class if route is in a given resource.
     *
     * @param  string $resource
     * @param  array $routes
     * @param  string $className
     *
     * @return string
     */
    function sidebarResourceActive($resource, $routes = [], $className = 'active')
    {
        $routes = array_merge($routes, ['index', 'store', 'create', 'show', 'destroy', 'update', 'edit']);

        foreach ($routes as $route) {
            if (Route::currentRouteName() == ($resource.'.'.$route)) {
                return $className;
            }
        }

        return '';
    }
}

if (! function_exists('filter_html')) {
    /**
     * Remove dangerous tags (with attributes) from html.
     *
     * @param  string $html
     *
     * @return string
     */
    function filterHtml($html, $defaultAllowed = null)
    {
        if (! $defaultAllowed) {
            $defaultAllowed = 'div,img[src],a[href|title],blockquote[cite],h1,h2,h3,h4,h5,b,i,tt,hr,strong,span,s,p,code,pre,em,ul,ol,li,table,thead,tbody,tr,td,th,br,*[style|class]';
        }

        $config = HTMLPurifier_Config::createDefault();
        $config->set('Core.Encoding', 'UTF-8');
        $allowed = config('editor.allowed_tags', $defaultAllowed);

        // put here every tag and attribute that you want to pass through
        //            $config->set('HTML.AllowedAttributes', '*.style');
        $config->set('HTML.Allowed', $allowed);

        $purifier = new HTMLPurifier($config);

        // return the filtered elements.
        return $purifier->purify($html);
    }
}