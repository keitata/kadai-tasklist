# docker-laravel 🐳

■Laravelプロジェクトの配下へ配置する

## docker create[Docker作成コマンド]

docker-compose down 
docker-compose build
docker-compose up -d

docker-compose exec app /bin/sh
php artisan key:generate
php artisan tinker
php artisan migrate
php artisan tinker 
Psy Shell v0.10.11 (PHP 8.0.9 — cli) by Justin Hileman
>>> App\Models\User::create(['name' => 'docker', 'email' => 'laravel_test@example.com', 'password' => bcrypt('laravel'),'category'=>1,'gender'=>1,'height'=>'170','image'=>'a']);
=> App\Models\User {#4484
     name: "docker",
     email: "laravel_test@example.com",
     #password: "$2y$10$G8mfZKe1mt.hRocvbIl9mOwngtVOuMWKRYS4s9K/6BdTqZWLsdH3y",
     updated_at: "2021-12-04 14:55:21",
     created_at: "2021-12-04 14:55:21",
     id: 1,
   }
>>> exit
Exit:  Goodbye




## Dockerが遅い対応策[windowsの場合]
## vendor,node_modules をLinuxへ移動しシンポリックリンクを張る

cp -r vendor /var/www/.
cp -r node_modules /var/www/.
mv vendor vendor_
mv node_modules node_modules_
ln -s /var/www/vendor ./vendor
ln -s /var/www/node_modules ./node_modules

https://i.gyazo.com/1fd38f5f7a8d722effbc6faf148a01fc.png

composer update
