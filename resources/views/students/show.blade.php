<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

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
            margin-bottom: 25px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 13px;
            border-radius: 5px;
            margin-bottom: 25px;
            text-align: center;
        }

        .profile {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #2563eb;
        }

        .no-picture {
            width: 150px;
            height: 150px;
            margin: auto;
            border-radius: 50%;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-weight: bold;
        }

        .profile h2 {
            margin: 15px 0 5px;
        }

        .student-id {
            color: #6b7280;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #2563eb;
            border-bottom: 2px solid #2563eb;
            padding-bottom: 8px;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 13px 5px;
            border-bottom: 1px solid #e5e7eb;
            gap: 20px;
        }

        .label {
            font-weight: bold;
            color: #374151;
        }

        .value {
            text-align: right;
            color: #111827;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .button {
            flex: 1;
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            min-width: 150px;
        }

        .back-button {
            background: #e5e7eb;
            color: #374151;
        }

        .back-button:hover {
            background: #d1d5db;
        }

        .edit-button {
            background: #2563eb;
            color: white;
        }

        .edit-button:hover {
            background: #1d4ed8;
        }

        .delete-button {
            background: #dc2626;
            color: white;
        }

        .delete-button:hover {
            background: #b91c1c;
        }

        .register-button {
            background: #16a34a;
            color: white;
        }

        .register-button:hover {
            background: #15803d;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .info-row {
                flex-direction: column;
                gap: 5px;
            }

            .value {
                text-align: left;
            }

            .buttons {
                flex-direction: column;
            }

            .button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Profile</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="profile">

        @if ($student->profile_picture)

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Profile Picture"
            >

        @else

            <div class="no-picture">
                No Picture
            </div>

        @endif

        <h2>
            {{ $student->first_name }}
            {{ $student->middle_name }}
            {{ $student->last_name }}
        </h2>

        <div class="student-id">
            Student ID: {{ $student->student_id }}
        </div>

    </div>

    <div class="section-title">
        Personal Information
    </div>

    <div class="info-row">
        <span class="label">First Name</span>
        <span class="value">{{ $student->first_name }}</span>
    </div>

    <div class="info-row">
        <span class="label">Middle Name</span>
        <span class="value">{{ $student->middle_name }}</span>
    </div>

    <div class="info-row">
        <span class="label">Last Name</span>
        <span class="value">{{ $student->last_name }}</span>
    </div>

    <div class="info-row">
        <span class="label">Date of Birth</span>
        <span class="value">{{ $student->date_of_birth }}</span>
    </div>

    <div class="info-row">
        <span class="label">Gender</span>
        <span class="value">{{ $student->gender }}</span>
    </div>

    <div class="section-title">
        Contact Information
    </div>

    <div class="info-row">
        <span class="label">Email Address</span>
        <span class="value">{{ $student->email }}</span>
    </div>

    <div class="info-row">
        <span class="label">Mobile Number</span>
        <span class="value">{{ $student->mobile_number }}</span>
    </div>

    <div class="info-row">
        <span class="label">Address</span>
        <span class="value">{{ $student->address }}</span>
    </div>

    <div class="section-title">
        Academic Information
    </div>

    <div class="info-row">
        <span class="label">Program / Course</span>
        <span class="value">{{ $student->course }}</span>
    </div>

    <div class="info-row">
        <span class="label">Year Level</span>
        <span class="value">{{ $student->year_level }}</span>
    </div>

    <div class="buttons">

        <a
            href="{{ route('students.index') }}"
            class="button back-button"
        >
            Back to Students
        </a>

        <a
            href="{{ route('students.edit', $student) }}"
            class="button edit-button"
        >
            Edit Student
        </a>

        <a
            href="{{ route('students.create') }}"
            class="button register-button"
        >
            Register Another
        </a>

        <form
            action="{{ route('students.destroy', $student) }}"
            method="POST"
            style="flex: 1;"
            onsubmit="return confirm('Are you sure you want to permanently delete this student?');"
        >

            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="button delete-button"
                style="width: 100%;"
            >
                Delete Student
            </button>

        </form>

    </div>

</div>

</body>
</html>