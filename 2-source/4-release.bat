php artisan vendor:publish --provider="Foostart\Acl\Authentication\AuthenticationServiceProvider" --force
php artisan vendor:publish --provider="Foostart\Post\PostServiceProvider" --force
php artisan vendor:publish --provider="Foostart\Category\CategoryServiceProvider" --force
php artisan vendor:publish --provider="Foostart\Pexcel\PexcelServiceProvider" --force




php artisan migrate
php artisan db:seed --class=LocationSeeder
