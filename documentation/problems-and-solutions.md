# Problems Encountered and Solutions

## 1. MySQL Connection Issue

### Problem

The application encountered a MySQL connection problem because another MySQL service was already using port 3306.

### Solution

The running MySQL service was identified and checked. The database connection settings were verified so Laravel could communicate with the MySQL server.

## 2. Validation Testing

### Problem

The registration form needed to prevent incomplete or invalid student information from being submitted.

### Solution

Laravel server-side validation was implemented and tested using invalid and incomplete form submissions. Validation error messages were verified in the browser.

## 3. Profile Picture Upload

### Problem

The uploaded profile picture needed to be stored correctly and displayed on the student profile.

### Solution

Laravel Storage was configured for uploaded images. The public storage link was created and the uploaded image was tested through the student profile page.

## 4. Git and GitHub

### Problem

The project needed to be tracked using Git and submitted through GitHub.

### Solution

A Git repository was initialized inside the project directory. The project was committed and pushed to the GitHub repository using the `main` branch.

## Result

After addressing these issues, the Student Registration System was successfully tested with registration, validation, database storage, profile picture upload, and student profile display.