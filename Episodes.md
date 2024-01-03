# Episode 1
1. setup new repo
   1. `composer create-project laravel/laravel build_a_forum_with_laravel_2`
   2. `composer require laravel/jetstream`
   3. `php artisan jetstream:install`
2. setup database
   1. create new MySQL database
   2. update .env file
      1. `DB_CONNECTION=mysql`
      2. `DB_HOST=
   3. `php artisan migrate`
