# Upload TFA6 to GitHub Using Visual Studio Code

## Open the correct folder

1. Extract the ZIP before opening it.
2. Open Visual Studio Code.
3. Select **File > Open Folder**.
4. Select the inner `tfa6-laravel-pos` folder that contains `artisan`, `composer.json`, `app`, `database`, `resources`, and `routes`.
5. Select **Yes I trust the authors** if VS Code asks.

## Test the project before uploading

Open **Terminal > New Terminal** and run:

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
New-Item database\database.sqlite -ItemType File -Force
php artisan migrate:fresh --seed
php artisan test
php artisan serve
```

Open `http://127.0.0.1:8000`, then verify `/about`, `/customers`, and `/users`. Press **Ctrl+C** in the terminal to stop the server.

## Publish through VS Code Source Control

1. Click the **Source Control** icon on the far-left toolbar. It looks like a branching line with three circles.
2. Click **Initialize Repository**.
3. Review the files under **Changes**.
4. Confirm that `.env`, `vendor`, `node_modules`, and `database/database.sqlite` are not listed.
5. Type this commit message:

   ```text
   Complete TFA6 Laravel Eloquent POS
   ```

6. Click **Commit**. If VS Code asks to stage all changes, click **Yes**.
7. Click **Publish Branch** or **Publish to GitHub**.
8. Sign in to GitHub through the browser authorization page if asked.
9. Name the new repository `tfa6-laravel-pos`.
10. Choose **Public repository** if your instructor must open it without an invitation.
11. Wait for publishing to finish, then click **Open on GitHub**.
12. Copy the repository URL for submission.

## Terminal method if Publish Branch is missing

Create an empty repository on GitHub named `tfa6-laravel-pos`. Do not add a README or `.gitignore` on GitHub. Then run:

```powershell
git init
git add .
git status
git commit -m "Complete TFA6 Laravel Eloquent POS"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/tfa6-laravel-pos.git
git push -u origin main
```

Replace `YOUR-USERNAME` with your GitHub username.

## Final submission checklist

- The GitHub repository contains migrations, `PosSeeder.php`, both Eloquent models, controllers, Blade views, tests, and the README.
- `.env`, `vendor`, `node_modules`, and `database.sqlite` are absent from GitHub.
- The Customers page shows five records from the database.
- The Users page shows five records with unique usernames.
- `php artisan test` passes.
- The GitHub repository URL is accessible to the instructor.
- A separate Laravel-compatible hosted application URL is available if required.
