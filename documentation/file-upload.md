# Profile Picture Upload

## Purpose

The Student Registration System allows a user to upload a profile picture during registration.

## Upload Process

The profile picture is submitted together with the student's registration information. Laravel validates the uploaded file before it is stored.

The general process is:

```text
User Selects Image
       ↓
Submit Registration Form
       ↓
Laravel Receives File
       ↓
File Validation
       ↓
Store Uploaded File
       ↓
Save File Path
       ↓
Display Profile Picture