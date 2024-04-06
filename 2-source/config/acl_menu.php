<?php

$admin = '_superadmin';

$permissions = [
    'categories' => [
        'all' => '_category-editor',
        'list' => '_category-list',
        'edit' => '_category-edit',
        'delete' => '_category-delete',
        'add' => '_category-add',
        'external' => '_external',
    ]
];

return [
    /*
    |--------------------------------------------------------------------------
    | Admin panel menu items
    |--------------------------------------------------------------------------
    |
    | Here you can edit the items to show in the admin menu(on top of the page)
    |
    */
    "list" => [


        //Dashboard page
        [
            "name" => "acl-admin.menu.dashboard",
            "route" => "dashboard",
            "link" => '/admin/users/dashboard',
            "permissions" => [$admin]
        ],

        /*
        |-----------------------------------------------------------------------
        | Admin permissions
        |-----------------------------------------------------------------------
        | 1. Users page
        | 2. Groups page
        | 3. Permissions page
        | 4. Categories
        |
        */


        //Users page
        [
            "name" => "acl-admin.menu.users",
            "route" => "users",
            "link" => '/admin/users',
            "permissions" => [$admin, '_user-editor', '_user-leader'],
            "skip_permissions" => ["users.selfprofile.edit",
                    "users.profile.edit",
                    "users.profile.addfield",
                    "users.profile.deletefield",
                    "users.profile.changeselfavatar",
            ]
        ],


        //Groups page
        [
            "name" => "acl-admin.menu.groups",
            "route" => "groups",
            "link" => '/admin/groups',
            "permissions" => [$admin, "_group-editor"]
        ],


        //Permissions page
        [
            "name" => "acl-admin.menu.permissions",
            "route" => "permissions",
            "link" => '/admin/permissions',
            "permissions" => [$admin]
        ],

        //Contexts
        [
            'name' => 'category-admin.menus.top-menu-contexts',
            "route" => "contexts",
            "link" => '/admin/contexts',
            "permissions" => [$admin]
        ],

        //Categories
        [
            "route" => "category-admin.menus.top-menu",
            "link" => '/admin/categories',
            "permissions" => [$admin, '_user-editor']
        ],

        //Posts
        [
            "name" => "acl-admin.menu.posts",
            "route" => "posts",
            "link" => '/admin/posts',
            "permissions" => [$admin, "_permission-editor"]
        ],

        //Crawler site
        [
            "name" => "acl-admin.menu.sites",
            "route" => "crawler.site",
            "link" => '/admin/crawler/site',
            "permissions" => [$admin]
        ],

        //Crawler work
        [
            "name" => "acl-admin.menu.crawler_works_jobs",
            "route" => "crawler.work.job",
            "link" => '/admin/crawler/work/job',
            "permissions" => [$admin]
        ],

        //Pexcel
        [
            "name" => "acl-admin.menu.pexcel",
            "route" => "pexcel",
            "link" => '/admin/pexcel',
            "permissions" => [$admin]
        ],
        // Company
        [
            "name" => "acl-admin.menu.company",
            "route" => "company",
            "link" => '/admin/company',
            "permissions" => [$admin]
        ],
        // Course
        [
            "name" => "acl-admin.menu.course",
            "route" => "course",
            "link" => '/admin/courses',
            "permissions" => [$admin]
        ],
        // Courses by teacher
        [
            "name" => "acl-admin.menu.course",
            "route" => "teacher.course",
            "link" => '/admin/courses/list',
            "permissions" => [$admin, "_teacher"]
        ],
        // Internship
        [
            "name" => "acl-admin.menu.internship",
            "route" => "internship",
            "link" => '/admin/internship',
            "permissions" => []
        ],
        // Forums
        [
            "name" => "acl-admin.menu.forum",
            "route" => "forums",
            "link" => '/admin/forums',
            "permissions" => []
        ],
    ]
];
