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

# Episode 2
1. difference between jetstream and fortify
2. configure jetstream
   1. enable Features::profilePhotos(),
   2. pa storage:link
3. configure fortify
   1. Enable Features::emailVerification(),
   2. implement MustVerifyEmail in User model
4. Setup mailtrap.io
   1. create account
   2. update .env file
      1. `MAIL_MAILER=smtp`
      2. `MAIL_HOST=smtp.mailtrap.io`
      3. `MAIL_PORT=2525`
      4. `MAIL_USERNAME=`
      5. `MAIL_PASSWORD=`
      6. `MAIL_ENCRYPTION=tls`
      7. `MAIL_FROM_ADDRESS=`
      8. `MAIL_FROM_NAME="${APP_NAME}"`
5. register and verify email
6. [TODO] change logo in components `ApplicationLogo.vue`, `ApplicationMark.vue` and `AuthenticationCardLogo.vue`

# Episode 3
1. Make Post resource `pa make:model`
    1. Post
    2. following
       1. Factory
       2. Migration
       3. Resource controller
2. Fill post migration
3. Make Comment resource `pa make:model`
   1. Comment
   2. following
       1. Factory
       2. Migration
       3. Resource controller
4. Fill comment migration
5. Add relations in the models 'User', 'Post' and 'Comment'

# Episode 4
1. Fill in Database/Factories/PostFactory
2. Fill in Database/Factories/CommentFactory
3. Fill in Database/Seeders/DatabaseSeeder

# Episode 5
1. `pa test`
2. Setup phpunit.xml for using MySQL database for testing
3. `pa test -p` for parallel testing (creates more databases)
4. Move existing feature tests to Jetstream folder
5. LazilyRefreshDatabase in Pest to only migrate if you touch the database 

Episode 6
1. Create tests/Feature/Controllers/PostController/IndexTest.php
2. TestCase withoutVite(); to prevent building assets
3. Loop trough NavLink items (defined in AppLayout.vue) to check if they are visible
4. Fill Posts/Index.vue to loop through the posts
5. Build a container to fit all the posts in
