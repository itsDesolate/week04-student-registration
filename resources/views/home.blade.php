<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }

        .navbar {
            background: #2563eb;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
            font-size: 22px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            max-width: 1000px;
            margin: 60px auto 30px;
            padding: 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            color: #6b7280;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 13px 22px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .primary {
            background: #2563eb;
            color: white;
        }

        .primary:hover {
            background: #1d4ed8;
        }

        .secondary {
            background: white;
            color: #2563eb;
            border: 1px solid #2563eb;
        }

        .secondary:hover {
            background: #eff6ff;
        }

        .cards {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin-top: 0;
            color: #2563eb;
        }

        .card p {
            color: #6b7280;
            line-height: 1.5;
        }

        footer {
            text-align: center;
            color: #6b7280;
            padding: 30px 20px;
        }

        @media (max-width: 700px) {
            .hero h1 {
                font-size: 32px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 15px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Student Registration System</h2>

        <a href="{{ route('students.index') }}">
            Students
        </a>
    </div>

    <section class="hero">

        <h1>Welcome to the Student Registration System</h1>

        <p>
            Manage student information, registration records,
            and profile details in one place.
        </p>

        <div class="buttons">

            <a
                href="{{ route('students.create') }}"
                class="button primary"
            >
                Register a Student
            </a>

            <a
                href="{{ route('students.index') }}"
                class="button secondary"
            >
                View Students
            </a>

        </div>

    </section>

    <section class="cards">

        <div class="card">
            <h3>Register</h3>

            <p>
                Add a new student with complete personal,
                academic, and contact information.
            </p>
        </div>

        <div class="card">
            <h3>Manage</h3>

            <p>
                View and update student records whenever
                information needs to be changed.
            </p>
        </div>

        <div class="card">
            <h3>Profiles</h3>

            <p>
                View individual student profiles including
                their uploaded profile picture.
            </p>
        </div>

    </section>

    <footer>
        Student Registration System &copy; {{ date('Y') }}
    </footer>

</body>
</html>