<?php

return [

    /*
     * The logo of the dashboard.
     */
    'logo' => '<b>Laravel</b> AdminLTE',


    /*
     * The small logo of the dashboard.
     */
    'small_logo' => '<b>Lara</b> LTE',

    /*
     * The name of the dashboard.
     */
    'name' => 'Web App Name',

    'appearence' => [

        /*
         * Supported values are black, black-light, blue, blue-light,
         *  green, green-light, purple, purple-light,
         *  red, red-light, yellow and yello-light.
         */
        'skin' => 'red',

        /*
         * The direction of the dashboard.
         */
        'dir' => 'ltr',

        /*
         * The header items that will be rendered.
         */
        'header' => [
            'items' => [
                'adminlte::layout.header.messages',
                'adminlte::layout.header.notifications',
                'adminlte::layout.header.tasks',
                'adminlte::layout.header.user',
                'adminlte::layout.header.logout',
            ],
        ],

        /*
         * The sidebar items that will be rendered.
         */
        'sidebar' => [
            'items' => [
                'layouts.sidebar.user-panel',
                'layouts.sidebar.items',
            ],
        ],
    ],

    'urls' => [
        /*
        |--------------------------------------------------------------------------
        | URLs
        |--------------------------------------------------------------------------
        |
        | Register here your dashboard main urls, base, logout, login, etc...
        | The options that can be nullable is register and password_request meaning that it can be disabled.
        |
        */
        'base' => '/',
        'logout' => 'logout',
        'login' => 'login',
        'register' => 'register',
        'password_request' => 'password/reset',
        'password_email' => 'password/email',
        'password_reset' => 'password/reset',
    ],
];
