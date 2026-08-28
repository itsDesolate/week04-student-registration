# Week 4 – Student Registration System

## 1. Project Title

**Student Registration System**

## 2. Introduction

The Student Registration System is a Laravel-based web application developed to replace a paper-based student registration process with a digital registration system.

The system allows students to submit their personal and academic information through an online registration form. The application validates the submitted information, stores student records in a MySQL database, handles profile picture uploads, displays success and validation messages, and provides a student profile page after successful registration.

This project demonstrates how Laravel can be used to develop structured, secure, and database-driven web applications.

## 3. Objectives

The objectives accomplished during this activity are:

- Build a student registration system using Laravel.
- Create Blade templates for the registration interface.
- Implement server-side request validation.
- Store student information in a MySQL database.
- Implement profile picture uploads using Laravel Storage.
- Display success and validation error messages.
- Display registered student information.
- Understand the Laravel request lifecycle.
- Practice Git and GitHub version control.
- Build a professional GitHub portfolio project.

## 4. Functional Requirements

The system allows users to:

- Register a student.
- Upload a profile picture.
- Validate required fields.
- Display success notifications.
- Display validation error messages.
- Store student information in MySQL.
- View registered student details after successful registration.

## 5. Required Student Information

The registration form contains:

- Student ID
- First Name
- Middle Name
- Last Name
- Email Address
- Mobile Number
- Date of Birth
- Gender
- Program
- Year Level
- Address
- Profile Picture

## 6. Laravel Features Implemented

### Blade Forms

Blade templates are used to create the student registration, student listing, and student profile interfaces.

### Request Validation

Server-side validation is implemented in the `StudentController` to verify student information before it is stored in the database.

The registration process validates the following information:

- **Student ID** – required and must be unique.
- **First Name** – required and must be a valid string.
- **Last Name** – required and must be a valid string.
- **Email Address** – required, must use a valid email format, and must be unique.
- **Mobile Number** – required and must contain numeric information.
- **Date of Birth** – required.
- **Gender** – required.
- **Program** – required.
- **Year Level** – required.
- **Address** – required.
- **Profile Picture** – required and must be a supported image file.

Validation prevents incomplete or invalid information from being stored in the `students` table.

Server-side validation is especially important because client-side checks can be bypassed. The server must independently verify submitted data before processing the registration request.

Validation also improves database integrity by ensuring that required information is present and that unique fields such as the Student ID and email address do not create duplicate records.

### Flash Messages

A success notification is displayed after successful registration:

> Student registered successfully!

Validation errors are also displayed when submitted information does not meet the required rules.

### File Upload

The application allows users to upload a student profile picture.

Laravel Storage is used to handle uploaded images. The uploaded file path is stored in the database, while the actual image is stored using Laravel's public storage system.

The storage link is created using:

```bash
php artisan storage:link