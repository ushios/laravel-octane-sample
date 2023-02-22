# Laravel Octane Sample 

# Getting Started

```
$ cp .env.example .env
$ composer install
$ php artisan octane:start --workers=1 --task-workers=4 --host=0.0.0.0 # Launch server
```

http://localhost:3000 has sleep 10 seconds.

http://localhost:3000/detail response quickly.

http://localhost:3000/api/status response swoole stats.
