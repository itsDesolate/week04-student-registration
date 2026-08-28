<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #2563eb;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .required {
            color: #dc2626;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            font-family: inherit;
        }

        textarea {
            min-height: 90px;
            resize: vertical;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        .current-picture {
            margin-bottom: 15px;
        }

        .current-picture img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #2563eb;
            display: block;
            margin-top: 8px;
        }

        .file-help {
            font-size: 13px;
            color: #6b7280;
            margin-top: 5px;
        }

        .error-box {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error-box ul {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .button {
            flex: 1;
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .submit-button {
            background: #2563eb;
            color: white;
            border: none;
        }

        .submit-button:hover {
            background: #1d4ed8;
        }

        .cancel-button {
            background: #e5e7eb;
            color: #374151;
        }

        .cancel-button:hover {
            background: #d1d5db;
        }

        @media (max-width: 650px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 20px;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Student</h1>

    <p class="subtitle">
        Update the student's information below.
    </p>

    @if ($errors->any())

        <div class="error-box">

            <strong>Please correct the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form
        action="{{ route('students.update', $student) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')

        <div class="section-title">
            Personal Information
        </div>

        <div class="form-group">

            <label for="student_id">
                Student ID <span class="required">*</span>
            </label>

            <input
                type="text"
                id="student_id"
                name="student_id"
                value="{{ old('student_id', $student->student_id) }}"
                required
            >

        </div>

        <div class="form-row">

            <div class="form-group">

                <label for="first_name">
                    First Name <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    value="{{ old('first_name', $student->first_name) }}"
                    required
                >

            </div>

            <div class="form-group">

                <label for="middle_name">
                    Middle Name <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="middle_name"
                    name="middle_name"
                    value="{{ old('middle_name', $student->middle_name) }}"
                    required
                >

            </div>

        </div>

        <div class="form-group">

            <label for="last_name">
                Last Name <span class="required">*</span>
            </label>

            <input
                type="text"
                id="last_name"
                name="last_name"
                value="{{ old('last_name', $student->last_name) }}"
                required
            >

        </div>

        <div class="form-row">

            <div class="form-group">

                <label for="date_of_birth">
                    Date of Birth <span class="required">*</span>
                </label>

                <input
                    type="date"
                    id="date_of_birth"
                    name="date_of_birth"
                    value="{{ old('date_of_birth', $student->date_of_birth) }}"
                    required
                >

            </div>

            <div class="form-group">

                <label for="gender">
                    Gender <span class="required">*</span>
                </label>

                <select
                    id="gender"
                    name="gender"
                    required
                >

                    <option value="">Select Gender</option>

                    <option
                        value="Male"
                        {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}
                    >
                        Male
                    </option>

                    <option
                        value="Female"
                        {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}
                    >
                        Female
                    </option>

                </select>

            </div>

        </div>

        <div class="section-title">
            Contact Information
        </div>

        <div class="form-row">

            <div class="form-group">

                <label for="email">
                    Email Address <span class="required">*</span>
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email', $student->email) }}"
                    required
                >

            </div>

            <div class="form-group">

                <label for="mobile_number">
                    Mobile Number <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="mobile_number"
                    name="mobile_number"
                    value="{{ old('mobile_number', $student->mobile_number) }}"
                    required
                >

            </div>

        </div>

        <div class="form-group">

            <label for="address">
                Complete Address <span class="required">*</span>
            </label>

            <textarea
                id="address"
                name="address"
                required
            >{{ old('address', $student->address) }}</textarea>

        </div>

        <div class="section-title">
            Academic Information
        </div>

        <div class="form-row">

            <div class="form-group">

                <label for="course">
                    Program / Course <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="course"
                    name="course"
                    value="{{ old('course', $student->course) }}"
                    required
                >

            </div>

            <div class="form-group">

                <label for="year_level">
                    Year Level <span class="required">*</span>
                </label>

                <select
                    id="year_level"
                    name="year_level"
                    required
                >

                    <option value="">Select Year Level</option>

                    <option
                        value="1st Year"
                        {{ old('year_level', $student->year_level) == '1st Year' ? 'selected' : '' }}
                    >
                        1st Year
                    </option>

                    <option
                        value="2nd Year"
                        {{ old('year_level', $student->year_level) == '2nd Year' ? 'selected' : '' }}
                    >
                        2nd Year
                    </option>

                    <option
                        value="3rd Year"
                        {{ old('year_level', $student->year_level) == '3rd Year' ? 'selected' : '' }}
                    >
                        3rd Year
                    </option>

                    <option
                        value="4th Year"
                        {{ old('year_level', $student->year_level) == '4th Year' ? 'selected' : '' }}
                    >
                        4th Year
                    </option>

                </select>

            </div>

        </div>

        <div class="section-title">
            Profile Picture
        </div>

        @if ($student->profile_picture)

            <div class="current-picture">

                <strong>Current Profile Picture</strong>

                <img
                    src="{{ asset('storage/' . $student->profile_picture) }}"
                    alt="Current Profile Picture"
                >

            </div>

        @endif

        <div class="form-group">

            <label for="profile_picture">
                Replace Profile Picture
            </label>

            <input
                type="file"
                id="profile_picture"
                name="profile_picture"
                accept=".jpg,.jpeg,.png"
            >

            <div class="file-help">
                Leave this empty to keep the current picture.
                Accepted formats: JPG, JPEG, PNG. Maximum size: 2 MB.
            </div>

        </div>

        <div class="button-group">

            <a
                href="{{ route('students.show', $student) }}"
                class="button cancel-button"
            >
                Cancel
            </a>

            <button
                type="submit"
                class="button submit-button"
            >
                Update Student
            </button>

        </div>

    </form>

</div>

</body>
</html>