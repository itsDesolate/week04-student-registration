# System Testing

## Purpose

The Student Registration System was tested to verify that the main registration features work correctly.

## Test Cases

| Test Case | Expected Result | Status |
|---|---|---|
| Open registration page | Registration form is displayed | Passed |
| Submit incomplete form | Validation errors are displayed | Passed |
| Submit valid student information | Student record is created | Passed |
| Use duplicate Student ID | Validation prevents duplicate record | Passed |
| Use duplicate email | Validation prevents duplicate record | Passed |
| Upload valid profile picture | Image is uploaded successfully | Passed |
| Successful registration | Success message is displayed | Passed |
| View registered student | Student information is displayed | Passed |
| Check database | Student record appears in MySQL | Passed |

## Validation Testing

Invalid and incomplete form submissions were tested to verify that server-side validation prevents incorrect information from being stored.

## Database Testing

After successful registration, the student record was checked in the MySQL database using phpMyAdmin.

## File Upload Testing

The profile picture upload was tested to verify that the image is stored and can be displayed on the student profile.

## Result

The tested registration features produced the expected results. The application successfully handled valid submissions, validation errors, database storage, and profile picture uploads.