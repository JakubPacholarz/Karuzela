/opt/lampp/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab8;" # Linux

/Applications/xampp/xamppfiles/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab8;"  # Mac

php -r "copy('.env.example', '.env');"

composer install

php artisan migrate

php artisan db:seed

php artisan key:generate

php artisan storage:link

code .
