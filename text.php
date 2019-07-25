composer create-project --prefer-dist laravel/laravel .

 sudo apt install php7.2-mbstring

 sudo apt install php7.2-dom

 composer install

 sudo apt install mc

 mc

 php artisan list

 sudo nano /etc/nginx/sites-enabled/default 

 location ~ \.php$ {
                fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
                include fastcgi_params;
        }

 sudo chmod -R 777 ./

 php artisan key:generate
