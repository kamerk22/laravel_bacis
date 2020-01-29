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

# Route List

| Method    | URI                 | Action  | Route Name    |
| --------- | ------------------- | ------- | ------------- |
| GET       | /video              | index   | video.index   |
| GET       | /video/create       | create  | video.create  |
| POST      | /video              | store   | video.store   |
| GET       | /video/{video}      | show    | video.show    |
| GET       | /video/{video}/edit | edit    | video.edit    |
| PUT/PATCH | /video/{video}      | update  | video.update  |
| DELETE    | /video/{video}      | destroy | video.destroy |

```sh
php artisan route:cache
```
