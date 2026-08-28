# Student Registration Flow

## Registration Process

The Student Registration System follows this process:

1. The user opens the student registration page.
2. The user enters the required student information.
3. The user selects and uploads a profile picture.
4. The registration form is submitted.
5. Laravel receives the request through the student route.
6. The `StudentController` validates the submitted information.
7. If validation fails, the user is returned to the form with validation errors.
8. If validation succeeds, the student information is saved to the MySQL database.
9. The uploaded profile picture is stored using Laravel Storage.
10. A success flash message is displayed.
11. The registered student's information can be viewed on the student profile page.

## Flow

```text
Registration Page
       ↓
Fill Out Form
       ↓
Submit Registration
       ↓
Laravel Validation
    ↙       ↘
 Invalid     Valid
    ↓          ↓
Show Errors   Save Student
               ↓
          Store Picture
               ↓
          Success Message
               ↓
        Student Profile