# Model

```sh
php artisan tinker
```

```php
factory(App\User::class, 50)->create()
```

# Rate Limit

Add first video

```php
Video::create(['name' => 'laravel learning', 'views' => 1])
```

Increase view by calling below method by one

```js
[...Array(55)].forEach(() => fetch("http://localhost:8000/api/video/1/view"));
```
