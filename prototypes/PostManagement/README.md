

## Références 

- https://www.akilischool.com/cours/laravel-crud-avec-upload-dimage


## Commandes

- php artisan make:model Post -m
- php artisan migrate
- php artisan make:controller PostController --resource --model=Post
- php artisan route:list

## Seed 

- php artisan make:seeder PostSeeder

Puis créer un lien symbolique /public/storage/ connecté à /storage/app/public/ en exécutant la commande

- php artisan storage:link