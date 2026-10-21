# Todo Website

A simple todo app I'm building by hand to practise Laravel.

**Stack:** Laravel 13 · Blade · Bootstrap 5 · MySQL

## Setup (Laragon)

1. Start Laragon (**Start All**) so MySQL is running.
2. Install dependencies:
   ```
   composer install
   npm install
   ```
3. Copy the env file and generate a key (skip if `.env` already exists):
   ```
   cp .env.example .env
   php artisan key:generate
   ```
4. Do **TODO 1** (the migration columns) first, then run:
   ```
   php artisan migrate
   ```
   It will offer to create the `todo_website` database. Say yes.
   > Ran migrate before finishing TODO 1? Run `php artisan migrate:fresh` to rebuild the tables.
   > (This deletes all data, which is fine while practising.)

## Run it (two terminals)

```
php artisan serve     # http://127.0.0.1:8000  <- open this one
npm run dev           # Vite: loads Bootstrap and reloads the page when you save
```

## Build steps

Follow the TODO numbers. Each TODO says what to build and gives a hint, not the answer.

### Backend
- [ ] **1** Migration columns: `database/migrations/..._create_todos_table.php`
- [ ] **2** Model `$fillable`: `app/Models/Todo.php`
- [ ] **3** Routes: `routes/web.php`
- [ ] **4–6** `index`, `store`, `edit`: `app/Http/Controllers/TodoController.php`

### Frontend (Blade + Bootstrap)
- [ ] **7** Add form: `resources/views/todos/index.blade.php`
- [ ] **8** Todo list with done / edit / delete: same file
- [ ] **9** Success message: `resources/views/layouts/app.blade.php`
- [ ] **10** Edit form: `resources/views/todos/edit.blade.php`

### Finish the backend
- [ ] **11** `update`: rename **and** toggle done
- [ ] **12** `destroy`

### Stretch goals
- [ ] Filter: All / Active / Done (hint: a query string like `?filter=done`)
- [ ] "Clear completed" button
- [ ] Ask "Are you sure?" before deleting
- [ ] Pagination (`->paginate(10)` and `{{ $todos->links() }}`)
- [ ] Feature tests: `php artisan make:test TodoTest`

## Useful commands

| Command | What it does |
|---|---|
| `php artisan route:list` | Show every route, its URL, method and name |
| `php artisan migrate:fresh` | Drop all tables and run the migrations again |
| `php artisan tinker` | Try out PHP and Eloquent live, e.g. `App\Models\Todo::all()` |

## Docs
- Laravel: https://laravel.com/docs
- Blade: https://laravel.com/docs/blade
- Bootstrap: https://getbootstrap.com/docs/5.3
