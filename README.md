# TFA6 Laravel POS From Arrays to Eloquent

This project upgrades the four-page TFA5 Laravel POS application from static PHP arrays to a real database. Customer and user records are defined through Laravel migrations, populated by a seeder, retrieved through Eloquent models, and rendered in the existing Blade views.

## Activity requirements completed

- Customers table with `full_name`, `email`, `phone`, and `created_at`
- Users table with a unique `username`, `full_name`, and `created_at`
- Five realistic customer records and five user records from TFA2
- `Customer` and `User` Eloquent models
- Controllers that retrieve records through Eloquent instead of static arrays
- Blade views that display model records with `@foreach`
- Four working pages: `/`, `/about`, `/customers`, and `/users`
- Feature tests for pages, seeded records, and unique usernames

## Requirements

- PHP 8.2 or later
- Composer 2
- Git
- Visual Studio Code

## Run the project locally on Windows

1. Extract the project ZIP.
2. Open the folder containing `artisan` and `composer.json` in Visual Studio Code.
3. Open **Terminal > New Terminal**.
4. Install PHP dependencies:

   ```powershell
   composer install
   ```

5. Create the local environment file:

   ```powershell
   Copy-Item .env.example .env
   ```

6. Generate the application key:

   ```powershell
   php artisan key:generate
   ```

7. Create the local SQLite database file:

   ```powershell
   New-Item database\database.sqlite -ItemType File -Force
   ```

8. Create the tables and sample records:

   ```powershell
   php artisan migrate:fresh --seed
   ```

9. Start Laravel:

   ```powershell
   php artisan serve
   ```

10. Open `http://127.0.0.1:8000` and test all four pages.

## macOS or Linux setup differences

Use these commands instead of the PowerShell copy and file-creation commands:

```bash
cp .env.example .env
touch database/database.sqlite
```

Then run `php artisan key:generate`, `php artisan migrate:fresh --seed`, and `php artisan serve`.

## Database structure

The schema matches the TFA2 activity:

### Customers

| Column | Type | Rule |
| --- | --- | --- |
| `id` | Integer | Primary key, auto-increment |
| `full_name` | String 100 | Required |
| `email` | String 100 | Required |
| `phone` | String 20 | Optional |
| `created_at` | Timestamp | Required |

### Users

| Column | Type | Rule |
| --- | --- | --- |
| `id` | Integer | Primary key, auto-increment |
| `username` | String 50 | Required and unique |
| `full_name` | String 100 | Required |
| `created_at` | Timestamp | Required |

## Important project files

- `database/migrations/0001_01_01_000000_create_users_table.php`
- `database/migrations/2026_11_17_000000_create_customers_table.php`
- `database/seeders/PosSeeder.php`
- `database/pos_database.sql` - optional MySQL-compatible export
- `app/Models/Customer.php`
- `app/Models/User.php`
- `app/Http/Controllers/CustomerController.php`
- `app/Http/Controllers/UserController.php`
- `resources/views/customers/index.blade.php`
- `resources/views/users/index.blade.php`

## Test the project

Run:

```powershell
php artisan test
```

The tests rebuild and seed a temporary database automatically.

## Reset the sample database

If the database becomes inconsistent, run:

```powershell
php artisan migrate:fresh --seed
```

This deletes the current local tables and recreates the five customer and five user records.

## Upload to GitHub

Follow [GITHUB_UPLOAD_GUIDE.md](GITHUB_UPLOAD_GUIDE.md). The `.gitignore` excludes `.env`, `vendor`, `node_modules`, and local SQLite database files.

## Hosting note

GitHub stores the source code but GitHub Pages cannot execute PHP or Laravel. The required live application link must use a Laravel-compatible host with a configured database. Run migrations and the seeder on the host after deployment.
