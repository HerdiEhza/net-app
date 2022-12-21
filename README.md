# cara mengatasi "The Process class relies on proc_open, which is not available on your PHP i nstallation."
# installasi di cpanel running command dibawah ini
composer install --no-scripts

# lalu command ini
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
php artisan cache:clear
php artisan view:clear
php artisan package:discover

<!-- oneline command -->
php artisan key:generate && php artisan cache:clear && php artisan view:clear && php artisan package:discover