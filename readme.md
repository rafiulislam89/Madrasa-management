🎓 Laravel School/Madrasa Management System (LAVSMS)
LAVSMS is a Laravel 8-based management system built for schools, madrasas, and colleges to streamline administration and academic operations.

📸 Screenshots
Dashboard
<img src="https://i.ibb.co/D4T0z6T/dashboard.png" alt="dashboard" border="0">

Login
<img src="https://i.ibb.co/Rh1Bfwk/login.png" alt="login" border="0">

Student Marksheet
<img src="https://i.ibb.co/GCgv5ZR/marksheet.png" alt="marksheet" border="0">

System Settings
<img src="https://i.ibb.co/Kmrhw69/system-settings.png" alt="system-settings" border="0">

Print Marksheet
<img src="https://i.ibb.co/5c1GHCj/capture-20210530-115521-crop.png" alt="print-marksheet">

Print Tabulation Sheet & Marksheet
<img src="https://i.ibb.co/QmscPfn/capture-20210530-115802.png" alt="tabulation-sheet" border="0">

👥 User Roles
There are 7 types of user accounts:

Super Admin

Admin

Librarian

Accountant

Teacher

Student

Parent

⚙️ Requirements
Make sure you meet the Laravel 8 requirements.

PHP >= 8.1

Composer

MySQL

Laravel CLI (optional)

Node.js & npm (if using frontend assets)

Git

🛠️ Installation Guide
1. Clone the Repository
bash
Copy
Edit
git clone https://github.com/your-username/lavsms.git
cd lavsms
2. Install PHP Dependencies
bash
Copy
Edit
composer install
3. Install JavaScript Dependencies (if needed)
bash
Copy
Edit
npm install
npm run dev
4. Copy & Configure .env File
bash
Copy
Edit
cp .env.example .env
Update the following fields in .env:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
5. Generate Application Key
bash
Copy
Edit
php artisan key:generate
6. Run Database Migrations
bash
Copy
Edit
php artisan migrate
7. Seed Database with Demo Data
bash
Copy
Edit
php artisan db:seed
🔐 Login Credentials
Role	Username	Email	Password
Super Admin	cj	cj@cj.com	cj
Admin	admin	admin@admin.com	cj
Teacher	teacher	teacher@teacher.com	cj
Parent	parent	parent@parent.com	cj
Accountant	accountant	accountant@accountant.com	cj
Student	student	student@student.com	cj
🧩 Features by Role
👑 Super Admin
Can delete any record

Create any user account

🧑‍💼 Admin / Super Admin
Manage classes and sections

View student marksheets

Manage users, exams, grades, and subjects

Manage noticeboard (calendar integration)

Edit system settings

Handle fee management

💰 Accountant
Manage fees and payments

Print receipts

📚 Librarian
Manage library books

👨‍🏫 Teacher
Handle assigned classes/sections

Record exam data

Upload study materials

Edit own profile and timetable

🧑‍🎓 Student
View teachers and subjects

See own marks, timetable, payments

Access library and notices

Manage own profile

👪 Parent
View child's marksheet, timetable, payments

Download/Print PDF marksheets

See notices and events

Manage own profile

🛡 Security Vulnerabilities
If you discover a security issue, please contact CJ Inspired at:
📧 cjay.pub@gmail.com
All reports will be addressed promptly.

🚧 Work in Progress
The following features are still under development and will be updated soon:

Noticeboard/calendar dashboard integration

Librarian/accountant specific UI

Library resources and student study material module

🤝 Contributing
Your contributions are welcome! Please fork the repository and create a pull request for any changes or suggestions.

📞 Contact
Rafiul islam
📧 Email: rafiulislamshanto2@gmail.com

