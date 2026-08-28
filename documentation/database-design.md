# Database Design

## Students Table

The Student Registration System uses a MySQL `students` table to store registered student information.

### Main Fields

| Field | Description |
|---|---|
| id | Primary key |
| student_id | Unique student identifier |
| first_name | Student's first name |
| middle_name | Student's middle name |
| last_name | Student's last name |
| email | Student's email address |
| mobile_number | Student's mobile number |
| gender | Student's gender |
| date_of_birth | Student's date of birth |
| program | Student's academic program |
| year_level | Student's year level |
| address | Student's address |
| profile_picture | Path to the uploaded profile picture |
| created_at | Record creation time |
| updated_at | Record update time |

## Database Purpose

The database stores the information submitted through the student registration form. Laravel migrations are used to create and modify the database structure.

The `student_id` and `email` fields are unique to help prevent duplicate student records.

The database structure can also be viewed using phpMyAdmin.