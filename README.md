# 📝 Task List App (Laravel)

A simple task manager built with Laravel that allows users to create, view, update, and delete tasks. This app demonstrates CRUD operations, form validation, pagination, and session-based flash messages — all styled with Tailwind CSS.

---

## 🚀 Features

- Create new tasks with validation
- View individual task details
- Edit and update existing tasks
- Delete tasks with confirmation
- Paginated task listing (7 per page)
- Flash messages for user feedback
- Clean routing using Laravel closures
- Tailwind CSS for styling

---

## 🧰 Tech Stack

- PHP 8.x
- Laravel 10+
- MySQL (or any other supported DB)
- Tailwind CSS
- Vite (for asset bundling)
- XAMPP / Valet / Laravel Sail (local environment)

---

## 🔧 Installation

```bash
git clone https://github.com/your-username/task-list-app.git
cd task-list-app
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve

🗺️ Routes
Method	URI	Description
GET	/tasks	Show all tasks
GET	/tasks/create	Show create form
POST	/tasks	Store new task
GET	/tasks/{task}	Show task details
GET	/tasks/{task}/edit	Edit task
PUT	/tasks/{task}	Update task
DELETE	/tasks/{task}/delete	Delete task

Example Validation Rules
Defined in TaskRequest:

title → required, string, max:255

description → optional

long_description → optional

📦 Future Ideas
Mark tasks as completed

User authentication (multi-user support)

Search and filter tasks

REST API support

🤝 Contributing
Pull requests are welcome! For major changes, please open an issue first to discuss what you’d like to change.