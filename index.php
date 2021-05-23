Link : https://stackoverflow.com/questions/49339711/heroku-and-laravel-passport


Add these few lines into your composer.json under the "scripts" property, then commit et deploy into heroku.

"post-install-cmd": [ 
        "php artisan clear-compiled",
        "chmod -R 777 storage", 
        "php artisan passport:keys"
    ]

BUT : after that you have to delete the keys from the table "oauth-clients" , then regenerate these keys with :
  
  php artisan passport:install

