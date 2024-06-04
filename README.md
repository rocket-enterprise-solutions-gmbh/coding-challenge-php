# Interview test project

## Requirements

* Local PHP CLI (ideally 8.3 or later).
* Local composer CLI

## Setup

1. clone the repository
2. run `composer install`
3. run `cp .env.example .env`
4. run `php artisan migrate`
4. run `php artisan key:generate`
3. run `php artisan serve`

## Task

Run `tests/create-multiple-tasks.http` and refactor at your hearts content
