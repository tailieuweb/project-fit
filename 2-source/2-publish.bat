php artisan vendor:publish --force
php artisan vendor:publish --provider="Foostart\Company\CompanyServiceProvider" --force
php artisan vendor:publish --provider="Foostart\Courses\CoursesServiceProvider" --force
php artisan migrate
php artisan db:seed --class=CompanySeeder
php artisan db:seed --class=CourseSeeder
