## About Application
This is a sample API that returns `php artisan inspire` command line result.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Documentation
Postman Documentation is accessible [here](https://documenter.getpostman.com/view/4821859/SVSPp7ix?version=latest)

Postman collection `Inspire API.postman_collection.json`

## Installation

Run migrations:
```
php artisan migrate
```

Generate secret tokens:
```
php artisan passport:install
```

Create a new client:
```
php artisan passport:client --personal
```

Run:
```
php artisan serve
```