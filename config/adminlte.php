<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'CalendApp',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Calend</b>App',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'CalendAppLogo',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => false,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-layout
    |
    */

    'layout_topnav' => false,
    'layout_boxed' => false,
    'layout_fixed_sidebar' => ['xs' => false, 'sm' => false, 'md' => true, 'lg' => true, 'xl' => true],
    'layout_fixed_navbar' => ['xs' => false, 'sm' => false, 'md' => false, 'lg' => false, 'xl' => false],
    'layout_fixed_footer' => ['xs' => false, 'sm' => false, 'md' => false, 'lg' => false, 'xl' => false],

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#661-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#662-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => true,
    'sidebar_collapse_auto_size' => true,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-dark',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 250,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-dark',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-urls
    |
    */

    'use_route_url' => true,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-menu
    |
    */

    'menu' => [
        //Unused for now, recent notifications box :
        [
            'label'       => 0,
            'label_color' => 'success',
            'label_id' => 'notificationNumberLabelId',
            'text' => '',
            'icon' => 'fas fa-bell',
            'url' => '#',
            'icon_color' => 'green',
            'topnav_right' => true,
            'icon_id' => 'notificationNumberSpanId',
            'submenu' => [
                [
                    'text' => '0 Notifications',
                    'inside_id' => 'notificationNumberId',
                    'dropdown_header' => true,
                    'url' => '',
                    'disabled' => true,
                ],
                [
                    'text' => '0 Nouveaux Messages',
                    'inside_id' => 'notificationNewMessageId',
                    'icon' => 'fas fa-envelope mr-2',
                    'url' => 'notification/seeAll',
                ],
                [
                    'text' => '0 Demandes d\'amis',
                    'inside_id' => 'notificationFriendRequestId',
                    'icon' => 'fas fa-users mr-2',
                    'url' => '',
                ],
                [
                    'text' => '0 Invitations à une structure ou une équipe',
                    'inside_id' => 'notificationInvitationId',
                    'icon' => 'fas fa-file mr-2',
                    'url' => '',
                ],
                [
                    'text' => 'seeAllNotifications',
                    'dropdown_footer' => true,
                    'url' => 'notification/seeAll',
                ],
            ],
        ],
        //profile
        [
            'text' => 'profile',
            'topnav_right' => true,
            'icon' => 'far fa-user',
            'icon_color' => 'cyan',
            'submenu' => [
                [
                    'text' => 'parameter',
                    'icon' => 'fas fa-users-cog',
                    'icon_color' => 'green',
                    'url' => 'profile',
                ],
                [
                    'text' => 'change_password',
                    'url' => 'profile/changePassword',
                    'icon' => 'fas fa-fw fa-lock',
                    'icon_color' => 'grey',
                ],
            ],
        ],
        //lang
        [
            'text' => 'language',
            'icon' => 'fas fa-language',
            'icon_color' => 'red',
            'topnav_right' => 'true',
            'submenu' => [
                [
                    'text' => 'english',
                    'icon' => 'flag-icon flag-icon-gb',
                    'url' => 'setLang/en',
                ],
                [
                    'text' => 'french',
                    'icon' => 'flag-icon flag-icon-fr',
                    'url' => 'setLang/fr',
                ],
                [
                    'text' => 'german',
                    'icon' => 'flag-icon flag-icon-de',
                    'url' => 'setLang/de',
                ],
                [
                    'text' => 'spanish',
                    'icon' => 'flag-icon flag-icon-es',
                    'url' => 'setLang/es',
                ],
                [
                    'text' => 'italian',
                    'icon' => 'flag-icon flag-icon-it',
                    'url' => 'setLang/it',
                ],
            ],
        ],
        //Calendars
        [
            'text' => 'calendar',
            'icon' => 'fas fa-calendar-alt',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text' => 'my calendars',
                    'icon' => 'fas fa-calendar',
                    'icon_color' => 'red',
                    'url' => 'calendar/view',
                ],
                [
                    'text' => 'create a new calendar',
                    'icon' => 'fas fa-calendar-plus',
                    'icon_color' => 'red',
                    'url' => 'calendar/create',
                ],
                [
                    'text' => 'my periods',
                    'icon' => 'fas fa-calendar-day',
                    'icon_color' => 'red',
                    'url' => 'calendar/period/view',
                ],
                [
                    'text' => 'create a new period',
                    'icon' => 'far fa-calendar-plus',
                    'icon_color' => 'red',
                    'url' => 'calendar/period/create',
                ],
            ],
        ],
        //Tasks
        [
            'text' => 'tasks',
            'icon' => 'fas fa-tasks',
            'icon_color' => 'orange',
            'submenu' => [
                [
                    'text' => 'my tasks',
                    'icon' => 'fas fa-thumbtack',
                    'icon_color' => 'orange',
                    'url' => 'task/view',
                ],
                [
                    'text' => 'create a new task',
                    'icon' => 'fas fa-plus-square',
                    'icon_color' => 'orange',
                    'url' => 'task/create',
                ],
            ],
        ],
        //Teams
        [
            'text' => 'teams',
            'icon' => 'fas fa-users',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'list of my teams',
                    'icon' => 'fas fa-users',
                    'icon_color' => 'yellow',
                    'url' => 'team/view',
                ],
                [
                    'text' => 'join a new team',
                    'icon' => 'fas fa-arrow-circle-right',
                    'icon_color' => 'yellow',
                    'url' => 'team/join',
                ],
                [
                    'text' => 'create a new team',
                    'icon' => 'far fa-plus-square',
                    'icon_color' => 'yellow',
                    'url' => 'team/create',
                ],
            ],
        ],
        //Structure
        [
            'text' => 'structure',
            'icon' => 'fas fa-building',
            'icon_color' => 'green',
            'submenu' => [
                [
                    'text' => 'list of structures',
                    'icon' => 'fas fa-city',
                    'icon_color' => 'green',
                    'url' => 'structure/view',
                ],
                [
                    'text' => 'join a new structure',
                    'icon' => 'fas fa-arrow-circle-right',
                    'icon_color' => 'green',
                    'url' => 'structure/join',
                ],
                [
                    'text' => 'create a new structure',
                    'icon' => 'fas fa-file-signature',
                    'icon_color' => 'green',
                    'url' => 'structure/create',
                ],
            ],
        ],
        //friendlist
        [
            'text' => 'friend',
            'icon' => 'fas fa-user-friends',
            'icon_color' => 'cyan',
            'submenu' => [
                [
                    'text' => 'view friends',
                    'icon' => 'fas fa-user-friends',
                    'icon_color' => 'cyan',
                    'url' => 'friend/view',
                ],
                [
                    'text' => 'add friend',
                    'icon' => 'fas fa-user-plus',
                    'icon_color' => 'cyan',
                    'url' => 'friend/add',
                ],
                [
                    'text' => 'messages',
                    'icon' => 'fas fa-comments',
                    'icon_color' => 'cyan',
                    'url' => 'friend/message',
                ],
            ],
        ],
        //settings
        [
            'text' => 'settings',
            'icon' => 'fas fa-sliders-h',
            'icon_color' => 'blue',
            'url' => 'settings',
        ],
        //Notifications
        [
            'text' => 'notifications',
            'icon' => 'fas fa-bell',
            'icon_color' => 'purple',
            'submenu' => [
                [
                    'text' => 'see all notifications',
                    'icon' => 'far fa-bell',
                    'icon_color' => 'purple',
                    'url' => 'notification/seeAll',
                ],
                [
                    'text' => 'notification configuration',
                    'icon' => 'fas fa-cog',
                    'icon_color' => 'purple',
                    'url' => 'notification/config',
                ],
            ],
        ],

    ],


    /*
    'menu' => [
        [
            'text' => 'search',
            'search' => true,
            'topnav' => true,
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ],
    ],
    */

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#612-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#613-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
