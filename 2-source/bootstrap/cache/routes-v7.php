<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/contexts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contexts/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contexts/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contexts/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contexts/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contexts/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contexts.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/slideshow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshow',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slideshows/langPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slideshows.lang',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/styles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'styles.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/styles/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'styles.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'styles.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/styles/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'styles.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/styles/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'styles.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/styles/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'styles.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/copy-blocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'copy-block',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install-blocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install-block',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/convert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'convert',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/trang-chu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wz8G2CDTr8RyV9B7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tin-tuc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/giang-vien' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personnel.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sinh-vien' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chuyen-de' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thematic.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lien-he' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gioi-thieu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'intro',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tuyen-sinh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/brochure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brochure',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dao-tao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aao',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usercontact.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermodule.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/modules/sample' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.sampleGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modules.samplePost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modules.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modules.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modules.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/modules/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/modules/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.viewfront',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/pattern/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.pattern.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/question/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stackoverflow.question.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/question/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/question/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/question/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/question/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answer/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answer/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answer/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answer/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answer/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/tag/crawler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.tag.crawler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/question/crawler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.question.crawler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/site/stackoverflow/answer/crawler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.site.stackoverflow.answer.crawler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/job/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.job.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crawler/work/category/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crawler.work.category.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/raw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.raw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pexcel/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pexcel.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Company.config',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.config',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'course.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'course.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'course.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/class' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.editGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/raw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.raw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/exportByTeacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.exportByTeacher',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'course.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teacher.course',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/teacher/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teacher.course.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teacher.course.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/teacher/raw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teacher.course.raw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/teacher/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teacher.course.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'internship.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'internship.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/edit_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.edit_company',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'internship.post_company',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/diary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.diary',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/diary_edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.diary.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'internship.diary.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/diary_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.diary.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/internship/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'internship.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forum' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forum',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/copy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.copy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.trash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.configGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums.configPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forums/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/errors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getErrors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/jsonitems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getItems',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/newfolder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getAddfolder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/deletefolder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getDeletefolder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getFolders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/crop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getCrop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/cropimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getCropimage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/cropnewimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getCropnewimage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getRename',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/resize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getResize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/doresize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.performResize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getDownload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-filemanager/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.getDelete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.google',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.google.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.loginGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.loginPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.change-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.reminder.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/recovery-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.recovery-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/change-password-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.change-password-success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/reminder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reminder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/reminder-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reminder-success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.signup.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.signup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/captcha-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.captcha-ajax.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/email-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.email-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/signup-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.signup-success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.default',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.editGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.editPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/groups/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.groups.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/groups/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.groups.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/editpermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit.permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/editGet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.editPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/addField' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.addfield',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/deleteField' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.deletefield',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.changeavatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/selfavatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.changeselfavatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/profile/self' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.selfprofile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.langGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.langPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'groups.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'groups.editGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'groups.editPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'groups.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'groups.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groups/editpermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'groups.edit.permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissions/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.editGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.editPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissions/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissions/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BYMZoAz2x5LcptzT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/tin\\-tuc/([a-zA-Z0-9-_]+)\\-([0-9]+)(*:43)|/giang\\-vien/([a-zA-Z0-9-_]+)\\-([0-9]+)(*:89)|/sinh\\-vien/([a-zA-Z0-9-_]+)\\-([0-9]+)(*:134)|/chuyen\\-de/([a-zA-Z0-9-_]+)\\-([0-9]+)(*:180)|/package\\-filemanager/(?|photos/([^/]++)/(.*)(*:233)|files/([^/]++)/(.*)(*:260)))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.detail',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      89 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personnel.detail',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.detail',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thematic.detail',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.',
          ),
          1 => 
          array (
            0 => 'base_path',
            1 => 'image_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'foostart.lfm.generated::ABX7KZrEL5HdgXeY',
          ),
          1 => 
          array (
            0 => 'base_path',
            1 => 'file_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'contexts.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contexts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.list',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@index',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@index',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contexts/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.edit',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@edit',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@edit',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contexts/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.copy',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@copy',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@copy',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contexts/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.post',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@post',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@post',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contexts/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.delete',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@delete',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@delete',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contexts/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.configGet',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@config',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@config',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contexts/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.configPost',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@config',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@config',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contexts/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.langGet',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@lang',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@lang',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contexts.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contexts/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contexts.langPost',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@lang',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\ContextAdminController@lang',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.list',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@index',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@index',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.edit',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@edit',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@edit',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.copy',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@copy',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@copy',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.post',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@post',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@post',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.delete',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@delete',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@delete',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.configGet',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@config',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@config',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.configPost',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@config',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@config',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.langGet',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@lang',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@lang',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'categories.langPost',
        'uses' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@lang',
        'controller' => 'Foostart\\Category\\Controllers\\Admin\\CategoryAdminController@lang',
        'namespace' => 'Foostart\\Category\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'post' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post',
      'action' => 
      array (
        'as' => 'post',
        'uses' => 'Foostart\\Post\\Controllers\\Front\\PostFrontController@index',
        'controller' => 'Foostart\\Post\\Controllers\\Front\\PostFrontController@index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.list',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@index',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@index',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.edit',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@edit',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@edit',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.copy',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@copy',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@copy',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.post',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@post',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@post',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.delete',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@delete',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@delete',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.trash',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@trash',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@trash',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.configGet',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@config',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@config',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.configPost',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@config',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@config',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.langGet',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@lang',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@lang',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'posts.langPost',
        'uses' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@lang',
        'controller' => 'Foostart\\Post\\Controllers\\Admin\\PostAdminController@lang',
        'namespace' => 'Foostart\\Post\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'slideshow',
      'action' => 
      array (
        'as' => 'slideshow',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Front\\SlideshowFrontController@index',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Front\\SlideshowFrontController@index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.list',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@index',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@index',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.edit',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@edit',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@edit',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.copy',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@copy',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@copy',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slideshows/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.post',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@post',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@post',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.delete',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@delete',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@delete',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.trash',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@trash',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@trash',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.configGet',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@config',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@config',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slideshows/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.configPost',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@config',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@config',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slideshows/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.langGet',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@lang',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@lang',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'slideshows.lang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slideshows/langPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'slideshows.lang',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@lang',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\SlideshowAdminController@lang',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'styles.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/styles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'styles.list',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@index',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@index',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'styles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/styles/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'styles.edit',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@edit',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@edit',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'styles.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/styles/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'styles.copy',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@copy',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@copy',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'styles.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/styles/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'styles.post',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@post',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@post',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'styles.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/styles/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'styles.delete',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@delete',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@delete',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'styles.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/styles/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'styles.trash',
        'uses' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@trash',
        'controller' => 'Foostart\\Slideshow\\Controllers\\Admin\\StyleAdminController@trash',
        'namespace' => 'Foostart\\Slideshow\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'copy-block' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'copy-blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'copy-block',
        'uses' => 'Foostart\\Front\\Controllers\\InstallController@copyBlocks',
        'controller' => 'Foostart\\Front\\Controllers\\InstallController@copyBlocks',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install-block' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install-blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'install-block',
        'uses' => 'Foostart\\Front\\Controllers\\InstallController@installBlocks',
        'controller' => 'Foostart\\Front\\Controllers\\InstallController@installBlocks',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'convert' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'convert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'convert',
        'uses' => 'Foostart\\Front\\Controllers\\InstallController@convertLESS2CSS',
        'controller' => 'Foostart\\Front\\Controllers\\InstallController@convertLESS2CSS',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'demo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'demo',
        'uses' => 'Foostart\\Front\\Controllers\\InstallController@demo',
        'controller' => 'Foostart\\Front\\Controllers\\InstallController@demo',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'home',
        'uses' => 'Foostart\\Front\\Controllers\\HomeController@index',
        'controller' => 'Foostart\\Front\\Controllers\\HomeController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wz8G2CDTr8RyV9B7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trang-chu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Front\\Controllers\\HomeController@index',
        'controller' => 'Foostart\\Front\\Controllers\\HomeController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Wz8G2CDTr8RyV9B7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tin-tuc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'news.list',
        'uses' => 'Foostart\\Front\\Controllers\\NewsController@listNews',
        'controller' => 'Foostart\\Front\\Controllers\\NewsController@listNews',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tin-tuc/{name}-{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'news.detail',
        'uses' => 'Foostart\\Front\\Controllers\\NewsController@detailNews',
        'controller' => 'Foostart\\Front\\Controllers\\NewsController@detailNews',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'name' => '[a-zA-Z0-9-_]+',
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'personnel.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'giang-vien',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'personnel.list',
        'uses' => 'Foostart\\Front\\Controllers\\PersonnelController@personnelList',
        'controller' => 'Foostart\\Front\\Controllers\\PersonnelController@personnelList',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'personnel.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'giang-vien/{name}-{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'personnel.detail',
        'uses' => 'Foostart\\Front\\Controllers\\PersonnelController@personnelDetail',
        'controller' => 'Foostart\\Front\\Controllers\\PersonnelController@personnelDetail',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'name' => '[a-zA-Z0-9-_]+',
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'student.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sinh-vien',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'student.list',
        'uses' => 'Foostart\\Front\\Controllers\\StudentController@studentList',
        'controller' => 'Foostart\\Front\\Controllers\\StudentController@studentList',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'student.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sinh-vien/{name}-{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'student.detail',
        'uses' => 'Foostart\\Front\\Controllers\\StudentController@studentDetail',
        'controller' => 'Foostart\\Front\\Controllers\\StudentController@studentDetail',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'name' => '[a-zA-Z0-9-_]+',
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'thematic.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chuyen-de',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'thematic.list',
        'uses' => 'Foostart\\Front\\Controllers\\ThematicController@thematicList',
        'controller' => 'Foostart\\Front\\Controllers\\ThematicController@thematicList',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'thematic.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chuyen-de/{name}-{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'thematic.detail',
        'uses' => 'Foostart\\Front\\Controllers\\ThematicController@thematicDetail',
        'controller' => 'Foostart\\Front\\Controllers\\ThematicController@thematicDetail',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'name' => '[a-zA-Z0-9-_]+',
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lien-he',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'contact',
        'uses' => 'Foostart\\Front\\Controllers\\ContactController@index',
        'controller' => 'Foostart\\Front\\Controllers\\ContactController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contact.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lien-he',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'contact.post',
        'uses' => 'Foostart\\Front\\Controllers\\ContactController@contactPost',
        'controller' => 'Foostart\\Front\\Controllers\\ContactController@contactPost',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'intro' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gioi-thieu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'intro',
        'uses' => 'Foostart\\Front\\Controllers\\IntroController@index',
        'controller' => 'Foostart\\Front\\Controllers\\IntroController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tuyen-sinh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'admissions',
        'uses' => 'Foostart\\Front\\Controllers\\AdmissionsController@index',
        'controller' => 'Foostart\\Front\\Controllers\\AdmissionsController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brochure' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brochure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'brochure',
        'uses' => 'Foostart\\Front\\Controllers\\BrochureController@index',
        'controller' => 'Foostart\\Front\\Controllers\\BrochureController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'aao' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dao-tao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'aao',
        'uses' => 'Foostart\\Front\\Controllers\\AaoController@index',
        'controller' => 'Foostart\\Front\\Controllers\\AaoController@index',
        'namespace' => 'Foostart\\Front\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'usercontact.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'usercontact.post',
        'uses' => 'Foostart\\Contact\\Controllers\\User\\ContactUserController@post',
        'controller' => 'Foostart\\Contact\\Controllers\\User\\ContactUserController@post',
        'namespace' => 'Foostart\\Contact\\Controllers\\User',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@index',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@index',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.list',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@index',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@index',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.edit',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@edit',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@edit',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.copy',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@copy',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@copy',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.post',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@post',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@post',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.delete',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@delete',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@delete',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.trash',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@trash',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@trash',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.configGet',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@config',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@config',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.configPost',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@config',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@config',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.langGet',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@lang',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@lang',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.langPost',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@lang',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@lang',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contacts.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'contacts.search',
        'uses' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@search',
        'controller' => 'Foostart\\Contact\\Controllers\\Admin\\ContactAdminController@search',
        'namespace' => 'Foostart\\Contact\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'usermodule.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'usermodule.post',
        'uses' => 'Foostart\\Module\\Controllers\\User\\ModuleUserController@post',
        'controller' => 'Foostart\\Module\\Controllers\\User\\ModuleUserController@post',
        'namespace' => 'Foostart\\Module\\Controllers\\User',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.sampleGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/sample',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'modules.sampleGet',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@sample',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@sample',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.samplePost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modules/sample',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'modules.samplePost',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@addSample',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@addSample',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@index',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@index',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.list',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@index',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@index',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.view',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@view',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@view',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.edit',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@edit',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@edit',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.copy',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@copy',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@copy',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/modules/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.post',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@post',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@post',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.delete',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@delete',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@delete',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.trash',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@trash',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@trash',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.configGet',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@config',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@config',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/modules/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.configPost',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@config',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@config',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.langGet',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@lang',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@lang',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/modules/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.langPost',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@lang',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@lang',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/modules/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'modules.search',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@search',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@search',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.viewfront' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'modules.viewfront',
        'uses' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@viewfront',
        'controller' => 'Foostart\\Module\\Controllers\\Admin\\ModuleAdminController@viewfront',
        'namespace' => 'Foostart\\Module\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.configGet',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@config',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@config',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.configPost',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@config',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@config',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.langGet',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@lang',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@lang',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.langPost',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@lang',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\CrawlerAdminController@lang',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/site/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.restore',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@restore',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@restore',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\SiteAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/pattern/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.restore',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@restore',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@restore',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.pattern.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/pattern/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.pattern.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\PatternAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackoverflow.question.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'stackoverflow.question.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.tag.crawler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/tag/crawler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.tag.crawler',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@crawler',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowTagAdminController@crawler',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.question.crawler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/question/crawler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.question.crawler',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@crawler',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowQuestionAdminController@crawler',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.site.stackoverflow.answer.crawler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/site/stackoverflow/answer/crawler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.site.stackoverflow.answer.crawler',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@crawler',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow\\StackOverflowAnswerAdminController@crawler',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Sites\\StackOverflow',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/work/job/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.restore',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@restore',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@restore',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.job.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/job/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.job.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\JobsAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.list',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@index',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@index',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.edit',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@edit',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@edit',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.copy',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@copy',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@copy',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/crawler/work/category/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.post',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@post',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@post',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.delete',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@delete',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@delete',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.restore',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@restore',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@restore',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.trash',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@trash',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@trash',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'crawler.work.category.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crawler/work/category/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'crawler.work.category.search',
        'uses' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@search',
        'controller' => 'Foostart\\Crawler\\Controllers\\Admin\\Works\\CategoriesAdminController@search',
        'namespace' => 'Foostart\\Crawler\\Controllers\\Admin\\Works',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.list',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@index',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@index',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.view',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@view',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@view',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.download',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@download',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@download',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pexcel/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.save',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@save',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@save',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.edit',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@edit',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@edit',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.copy',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@copy',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@copy',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pexcel/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.post',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@post',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@post',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.delete',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@delete',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@delete',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.restore',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@restore',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@restore',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.raw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/raw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.raw',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@raw',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@raw',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.trash',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@trash',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@trash',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.configGet',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@config',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@config',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pexcel/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.configPost',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@config',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@config',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pexcel/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.langGet',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@lang',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@lang',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pexcel.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pexcel/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'pexcel.langPost',
        'uses' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@lang',
        'controller' => 'Foostart\\Pexcel\\Controllers\\Admin\\PexcelAdminController@lang',
        'namespace' => 'Foostart\\Pexcel\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Company.config' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'Company.config',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@config',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@config',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.config' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.config',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@config',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@config',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.langGet',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@lang',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@lang',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.langPost',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@lang',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@lang',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@index',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@index',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.edit',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@edit',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@edit',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.copy',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@copy',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@copy',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.post',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@post',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@post',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.delete',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@delete',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@delete',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.restore',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@restore',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@restore',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.trash',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@trash',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@trash',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'company.search',
        'uses' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@search',
        'controller' => 'Foostart\\Company\\Controllers\\Admin\\CompanyAdminController@search',
        'namespace' => 'Foostart\\Company\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'course.configGet',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@config',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@config',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/courses/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'course.configPost',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@config',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@config',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'course.langGet',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@lang',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@lang',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/courses/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'course.langPost',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@lang',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@lang',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@index',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@index',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.edit',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@edit',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@edit',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.editGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/class',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.editGet',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@edit',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@edit',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.copy',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@copy',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@copy',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/courses/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.post',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@post',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@post',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.delete',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@delete',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@delete',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.restore',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@restore',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@restore',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.raw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/raw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.raw',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@raw',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@raw',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.view',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@view',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@view',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.export',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@export',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@export',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.exportByTeacher' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/exportByTeacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.exportByTeacher',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@exportByTeacher',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@exportByTeacher',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.trash',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@trash',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@trash',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'course.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'in_context',
        ),
        'as' => 'course.search',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@search',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseAdminController@search',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'teacher.course' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'teacher.course',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@coursesByTeacher',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@coursesByTeacher',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'teacher.course.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/teacher/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'teacher.course.edit',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@editCourseByTeacher',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@editCourseByTeacher',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'teacher.course.raw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/teacher/raw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'teacher.course.raw',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@rawCourseByTeacher',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@rawCourseByTeacher',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'teacher.course.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/courses/teacher/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'teacher.course.post',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@postCourseByTeacher',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@postCourseByTeacher',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'teacher.course.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/teacher/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'teacher.course.view',
        'uses' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@viewCourseByTeacher',
        'controller' => 'Foostart\\Courses\\Controllers\\Admin\\CourseTeacherController@viewCourseByTeacher',
        'namespace' => 'Foostart\\Courses\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.configGet',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@config',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@config',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/internship/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.configPost',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@config',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@config',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.langGet',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@lang',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@lang',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/internship/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.langPost',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@lang',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@lang',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@index',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@index',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.edit_company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/edit_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.edit_company',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@editCompany',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@editCompany',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.diary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/diary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.diary',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@diary',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@diary',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.diary.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/diary_edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.diary.edit',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@editDiary',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@editDiary',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.diary.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/internship/diary_edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.diary.post',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@postDiary',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@postDiary',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.diary.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/diary_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.diary.delete',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@deleteDiary',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipDiaryAdminController@deleteDiary',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.post_company' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/internship/edit_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.post_company',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@postCompany',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@postCompany',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.copy',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@copy',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@copy',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.delete',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@delete',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@delete',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.restore',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@restore',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@restore',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.trash',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@trash',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@trash',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'internship.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/internship/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'internship.search',
        'uses' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@search',
        'controller' => 'Foostart\\Internship\\Controllers\\Admin\\InternshipAdminController@search',
        'namespace' => 'Foostart\\Internship\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forum' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forum',
      'action' => 
      array (
        'as' => 'forum',
        'uses' => 'Foostart\\Forum\\Controllers\\Front\\ForumFrontController@index',
        'controller' => 'Foostart\\Forum\\Controllers\\Front\\ForumFrontController@index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.list',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@index',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@index',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.edit',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@edit',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@edit',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.copy',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@copy',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@copy',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forums/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.post',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@post',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@post',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.delete',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@delete',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@delete',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.view',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@view',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@view',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.trash',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@trash',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@trash',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.configGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.configGet',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@config',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@config',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.configPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forums/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.configPost',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@config',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@config',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forums/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.langGet',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@lang',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@lang',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forums.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forums/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
          3 => 'in_context',
        ),
        'as' => 'forums.langPost',
        'uses' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@lang',
        'controller' => 'Foostart\\Forum\\Controllers\\Admin\\ForumAdminController@lang',
        'namespace' => 'Foostart\\Forum\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\LfmController@show',
        'as' => 'foostart.lfm.show',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\LfmController@show',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getErrors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/errors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\LfmController@getErrors',
        'as' => 'foostart.lfm.getErrors',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\LfmController@getErrors',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.upload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'package-filemanager/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\UploadController@upload',
        'as' => 'foostart.lfm.upload',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\UploadController@upload',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getItems' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/jsonitems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\ItemsController@getItems',
        'as' => 'foostart.lfm.getItems',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\ItemsController@getItems',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getAddfolder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/newfolder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\FolderController@getAddfolder',
        'as' => 'foostart.lfm.getAddfolder',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\FolderController@getAddfolder',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getDeletefolder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/deletefolder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\FolderController@getDeletefolder',
        'as' => 'foostart.lfm.getDeletefolder',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\FolderController@getDeletefolder',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getFolders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/folders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\FolderController@getFolders',
        'as' => 'foostart.lfm.getFolders',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\FolderController@getFolders',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getCrop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/crop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\CropController@getCrop',
        'as' => 'foostart.lfm.getCrop',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\CropController@getCrop',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getCropimage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/cropimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\CropController@getCropimage',
        'as' => 'foostart.lfm.getCropimage',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\CropController@getCropimage',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getCropnewimage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/cropnewimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\CropController@getNewCropimage',
        'as' => 'foostart.lfm.getCropnewimage',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\CropController@getNewCropimage',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getRename' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\RenameController@getRename',
        'as' => 'foostart.lfm.getRename',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\RenameController@getRename',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getResize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/resize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\ResizeController@getResize',
        'as' => 'foostart.lfm.getResize',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\ResizeController@getResize',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.performResize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/doresize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\ResizeController@performResize',
        'as' => 'foostart.lfm.performResize',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\ResizeController@performResize',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getDownload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\DownloadController@getDownload',
        'as' => 'foostart.lfm.getDownload',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\DownloadController@getDownload',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.getDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => '\\Foostart\\Filemanager\\Middlewares\\MultiUser',
          2 => '\\Foostart\\Filemanager\\Middlewares\\CreateDefaultFolder',
        ),
        'uses' => '\\Foostart\\Filemanager\\Controllers\\DeleteController@getDelete',
        'as' => 'foostart.lfm.getDelete',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\DeleteController@getDelete',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/photos/{base_path}/{image_name}',
      'action' => 
      array (
        'uses' => '\\Foostart\\Filemanager\\Controllers\\RedirectController@getImage',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\RedirectController@getImage',
        'as' => 'foostart.lfm.',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_name' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'foostart.lfm.generated::ABX7KZrEL5HdgXeY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package-filemanager/files/{base_path}/{file_name}',
      'action' => 
      array (
        'uses' => '\\Foostart\\Filemanager\\Controllers\\RedirectController@getFile',
        'controller' => '\\Foostart\\Filemanager\\Controllers\\RedirectController@getFile',
        'as' => 'foostart.lfm.generated::ABX7KZrEL5HdgXeY',
        'namespace' => '\\Foostart\\Filemanager\\Controllers',
        'prefix' => 'package-filemanager',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'file_name' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.login.google' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.login.google',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\LoginController@redirectToProvider',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\LoginController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.login.google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.login.google.callback',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\LoginController@handleProviderCallback',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\LoginController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.admin.login',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getAdminLogin',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getAdminLogin',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.loginGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.loginGet',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getClientLogin',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getClientLogin',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.logout',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getLogout',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getLogout',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.login.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postAdminLogin',
        'as' => 'user.login.process',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postAdminLogin',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.loginPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postClientLogin',
        'as' => 'user.loginPost',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postClientLogin',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.change-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'can_see',
        ),
        'as' => 'user.change-password',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getChangePassword',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getChangePassword',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.recovery-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/recovery-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.recovery-password',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getReminder',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@getReminder',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.reminder.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postChangePassword',
        'as' => 'user.reminder.process',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postChangePassword',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.change-password-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/change-password-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":344:{@0hfPEk21pPvAtF9KdVDlYcrDijLhG/753RrxQH2WxYM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:111:"function () {
                return \\view(\'package-acl::client.auth.change-password-success\');
            }";s:5:"scope";s:57:"Foostart\\Acl\\Authentication\\AuthenticationServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000004a6f1e030000000050791629";}}',
        'as' => 'user.change-password-success',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.reminder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postReminder',
        'as' => 'user.reminder',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\AuthController@postReminder',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.reminder-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/reminder-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":328:{@5X8jbGVso5/jqyc+pqyLoJwpqs0m+aab6VnizEeBdOU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:96:"function () {
            return \\view(\'package-acl::client.auth.reminder-success\');
        }";s:5:"scope";s:57:"Foostart\\Acl\\Authentication\\AuthenticationServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000004a6f1e060000000050791629";}}',
        'as' => 'user.reminder-success',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.signup.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@postSignup',
        'as' => 'user.signup.process',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@postSignup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@signup',
        'as' => 'user.signup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@signup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.captcha-ajax.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'captcha-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'before' => 'captcha-ajax',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@refreshCaptcha',
        'as' => 'user.captcha-ajax.process',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@refreshCaptcha',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.email-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/email-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@emailConfirmation',
        'as' => 'user.email-confirmation',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@emailConfirmation',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.signup-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/signup-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@signupSuccess',
        'as' => 'user.signup-success',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@signupSuccess',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.default' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'dashboard.default',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\DashboardController@base',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\DashboardController@base',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.list',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@getList',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@getList',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'admin.home',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\DashboardController@base',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\DashboardController@base',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.editGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.editGet',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editUser',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editUser',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.editPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.editPost',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@postEditUser',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@postEditUser',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.delete',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@deleteUser',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@deleteUser',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.restore',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@restoreUser',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@restoreUser',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.groups.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/groups/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.groups.add',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@addGroup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@addGroup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.groups.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/groups/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.groups.delete',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@deleteGroup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@deleteGroup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.edit.permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/editpermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.edit.permission',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editPermission',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editPermission',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/profile/editGet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.profile.edit',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editProfile',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editProfile',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.profile.editPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.profile.editPost',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@postEditProfile',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@postEditProfile',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.profile.addfield' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/profile/addField',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.profile.addfield',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@addCustomFieldType',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@addCustomFieldType',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.profile.deletefield' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/profile/deleteField',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.profile.deletefield',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@deleteCustomFieldType',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@deleteCustomFieldType',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.profile.changeavatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/profile/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.profile.changeavatar',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@changeAvatar',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@changeAvatar',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.profile.changeselfavatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/profile/selfavatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.profile.changeselfavatar',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@changeSelfAvatar',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@changeSelfAvatar',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.selfprofile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/profile/self',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.selfprofile.edit',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editOwnProfile',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@editOwnProfile',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.langGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.langGet',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@lang',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@lang',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.langPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'users.langPost',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@lang',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\UserController@lang',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'groups.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'groups.list',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@getList',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@getList',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'groups.editGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'groups.editGet',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@editGroup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@editGroup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'groups.editPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/groups/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'groups.editPost',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@postEditGroup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@postEditGroup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'groups.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'groups.delete',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@deleteGroup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@deleteGroup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'groups.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groups/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'groups.restore',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@restoreGroup',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@restoreGroup',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'groups.edit.permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/groups/editpermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'groups.edit.permission',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@editPermission',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\GroupController@editPermission',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'permissions.list',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@getList',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@getList',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions.editGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'permissions.editGet',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@editPermission',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@editPermission',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions.editPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permissions/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'permissions.editPost',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@postEditPermission',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@postEditPermission',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'permissions.delete',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@deletePermission',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@deletePermission',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissions/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin_logged',
          2 => 'can_see',
        ),
        'as' => 'permissions.restore',
        'uses' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@restorePermission',
        'controller' => 'Foostart\\Acl\\Authentication\\Controllers\\PermissionController@restorePermission',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BYMZoAz2x5LcptzT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@g5T17ViH2rHjDQwolqr4ARirREVY0XNmz4RmN/RfdJ4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004a6f1d640000000050791629";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BYMZoAz2x5LcptzT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
