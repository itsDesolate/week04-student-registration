# Week 04 – Student Registration System

A Laravel-based Student Registration System developed as part of the Week 04 activity. The application allows users to register students, validate submitted information, upload profile pictures, view student records, edit existing records, and delete student records.

## Introduction

The Student Registration System is a web application developed using Laravel and MySQL. It demonstrates the use of Laravel routing, controllers, models, migrations, Blade templates, form validation, database operations, file uploads, and session flash messages.

The system provides a simple interface for managing student registration information while demonstrating the basic Laravel request lifecycle from a browser request to database interaction and response rendering.

## Objectives

The main objectives of this project are to:

- Develop a functional student registration system using Laravel.
- Create and manage student records using MySQL.
- Implement Laravel routing and controller actions.
- Apply server-side form validation.
- Store uploaded student profile pictures.
- Display stored student information and profile pictures.
- Implement CRUD operations for student records.
- Demonstrate Laravel's request lifecycle.
- Document the application's database structure and registration flow.

## Technologies Used

- Laravel
- PHP
- MySQL
- Blade Templates
- HTML
- CSS
- JavaScript
- XAMPP
- Git
- GitHub
- Visual Studio Code

## System Features

### Student Registration

The application provides a registration form where users can enter student information such as:

- Student ID
- First Name
- Middle Name
- Last Name
- Date of Birth
- Gender
- Email
- Mobile Number
- Complete Address
- Course / Program
- Year Level
- Profile Picture

### Form Validation

The application validates required student information before saving the record.

Validation prevents incomplete or invalid information from being submitted to the database.

### Profile Picture Upload

Users can upload a profile picture during student registration.

Uploaded images are stored using Laravel's public storage system and can be displayed through the application.

### Student Records

Registered students can be viewed through the student list.

The system provides functionality to:

- View student records
- View individual student profiles
- Edit student information
- Delete student records

### Flash Success Message

After a successful registration or update, the application displays a success message to provide feedback to the user.

## Laravel Request Lifecycle

The basic request lifecycle used by this application is:

1. The user accesses a URL through the browser.
2. Laravel receives the HTTP request.
3. The route defined in `routes/web.php` determines which controller action should handle the request.
4. The `StudentController` processes the request.
5. Validation is performed when required.
6. The `Student` model communicates with the MySQL database.
7. Uploaded profile pictures are stored using Laravel's storage system.
8. The controller returns a response or redirects the user.
9. Blade renders the resulting page in the browser.

The general flow is:

```text
Browser
   |
   v
HTTP Request
   |
   v
routes/web.php
   |
   v
StudentController
   |
   +------> Validation
   |
   +------> Student Model
   |             |
   |             v
   |          MySQL
   |
   +------> File Storage
   |
   v
Redirect / View
   |
   v
Blade Template
   |
   v
Browser Response