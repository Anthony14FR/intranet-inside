## Installation

```bash
git clone git@github.com:Anthony14FR/intranet-inside.git
cd intranet-inside/
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --force
php artisan migrate:fresh --seed
php artisan serve
```

[http://localhost:8000/api/documentation](http://localhost:8000/api/documentation)

Ou utilisez Postman avec la collection : **Intranet Inside.postman_collection.json**
```
