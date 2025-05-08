📅 Schedule Maker – CRUD Scheduler with Login System

Schedule Maker is a simple yet effective web application built with CodeIgniter, HTML, and CSS. It allows users to create, read, update, and delete (CRUD) schedules with basic authentication functionality.

🔧 Features

👤 User Features

User Authentication: Secure login and signup system to manage individual schedules.

CRUD for Schedules:

Create: Add new schedule entries (e.g., meetings, tasks, reminders)

Read: View your full list of scheduled items

Update: Edit any existing schedule details

Delete: Remove schedules no longer needed

🖥️ UI & UX

Clean, minimal interface built with vanilla HTML and CSS

Responsive and user-friendly design

🧰 Tech Stack

Framework: CodeIgniter (PHP-based MVC)

Frontend: HTML and CSS

Local Server: XAMPP (Apache + MySQL)

⚙️ How to Run the Project

🔽 Prerequisites

XAMPP installed (https://www.apachefriends.org/)

Place project folder inside htdocs

📝 Setup Steps

Start Apache and MySQL via XAMPP Control Panel

Import the Database:

Open phpMyAdmin (http://localhost/phpmyadmin)

Create a new database (e.g., schedule_db)

Import the .sql file provided in the project folder

Configure Database in CodeIgniter:

Go to application/config/database.php

Set your DB credentials (e.g., username: root, password: '', and database: schedule_db)

Run the Project:
Open your browser and visit:👉 http://localhost/Main/start

🛠 Folder Structure

application/
├── controllers/
│   └── Main.php
├── models/
│   └── Schedule_model.php
├── views/
│   ├── login.php
│   ├── signup.php
│   ├── dashboard.php
│   └── schedule_form.php

📌 Notes

No external libraries used — pure CodeIgniter MVC pattern

User sessions are handled using native CI session management

Schedule entries are user-specific and secured

👩‍💻 Developer - Faye
- This was a finals project in college
