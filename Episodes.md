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

# Episode 6
1. Create tests/Feature/Controllers/PostController/IndexTest.php
2. TestCase withoutVite(); to prevent building assets
3. Loop trough NavLink items (defined in AppLayout.vue) to check if they are visible
4. Fill Posts/Index.vue to loop through the posts
5. Build a container to fit all the posts in

# Episode 7
1. Create a temporary route for testing purposes of resources
2. Apis can need 'Resources', such as 'UserResource
   1. to tell which attributes should show
   2. Not using 'hidden' or 'visible' within the model
3. Wrap a Eloquent result in a Resource

# Episode 8
1. Add Pagination.vue 
   1. Create the component
   2. Add Vue elements from https://tailwindui.com/components/application-ui/navigation/pagination
   3. Change static values to the link values
2. use "with" method for eager loading of user
   1. This prevents the N+1 problem
3. Within the appServiceProvider, set Model::preventLazyLoading(!app()->isProduction());
   1. This prevents lazy loading in production
   2. This will throw an exception if you try to lazy load in production

# Episode 9
1. Create a macro for testing resources and resource collections
    1. check if the key exists in the resource
    2. check if the value is the same in the resource
    3. place the macro's in a new serviceprovider, TestServiceProvider
2. update the postController@index with sorting on latest first, also sorted on id (for testing purposes)

# Episode 10
1. Write a ShowTest for a new method, show
2. add a route for showing a single post
3. add a Show.vue for showing a single post
4. prettify the Show.vue

# Episode 11
1. link index page to show page
   1. update our test to link the user to the post
   2. Add user to the post resource
   3. Add Link tag to the Post/Index.vue

# Episode 12
1. Add comments to each post (by seeder and controller)
2. Add a test for the comments
3. Add a Comment.vue component
4. Extract formattedDate as function in date.js 
