<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

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
            max-width: 1150px;
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

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
        }

        .button {
            display: inline-block;
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            white-space: nowrap;
        }

        .button:hover {
            background: #1d4ed8;
        }

        .search-form {
            display: flex;
            gap: 8px;
            margin-bottom: 25px;
        }

        .search-input {
            flex: 1;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .search-button {
            padding: 11px 18px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-button:hover {
            background: #1d4ed8;
        }

        .clear-button {
            padding: 11px 18px;
            background: #e5e7eb;
            color: #374151;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f1f5f9;
        }

        .profile-picture {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .view-link,
        .edit-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        .view-link:hover,
        .edit-link:hover {
            text-decoration: underline;
        }

        .delete-button {
            background: #dc2626;
            color: white;
            border: none;
            padding: 7px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button:hover {
            background: #b91c1c;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #666;
        }

        .search-result {
            color: #6b7280;
            margin-bottom: 15px;
        }

        @media (max-width: 900px) {
            .container {
                overflow-x: auto;
            }

            table {
                min-width: 950px;
            }
        }

        @media (max-width: 650px) {
            .top-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .button {
                text-align: center;
            }

            .search-form {
                flex-wrap: wrap;
            }

            .search-input {
                width: 100%;
                flex-basis: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student List</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="top-bar">

        <span>
            Total Students: {{ $students->count() }}
        </span>

        <a href="{{ route('students.create') }}" class="button">
            Register New Student
        </a>

    </div>

    <form
        action="{{ route('students.index') }}"
        method="GET"
        class="search-form"
    >

        <input
            type="text"
            name="search"
            class="search-input"
            placeholder="Search by ID, name, email, or course..."
            value="{{ $search ?? '' }}"
        >

        <button type="submit" class="search-button">
            Search
        </button>

        @if (!empty($search))
            <a
                href="{{ route('students.index') }}"
                class="clear-button"
            >
                Clear
            </a>
        @endif

    </form>

    @if (!empty($search))
        <div class="search-result">
            Search results for:
            <strong>{{ $search }}</strong>
        </div>
    @endif

    @if ($students->count() > 0)

        <table>

            <thead>
                <tr>
                    <th>Picture</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($students as $student)

                    <tr>

                        <td>
                            @if ($student->profile_picture)

                                <img
                                    src="{{ asset('storage/' . $student->profile_picture) }}"
                                    alt="Profile Picture"
                                    class="profile-picture"
                                >

                            @else

                                No Picture

                            @endif
                        </td>

                        <td>
                            {{ $student->student_id }}
                        </td>

                        <td>
                            {{ $student->first_name }}
                            {{ $student->middle_name }}
                            {{ $student->last_name }}
                        </td>

                        <td>
                            {{ $student->email }}
                        </td>

                        <td>
                            {{ $student->course }}
                        </td>

                        <td>
                            {{ $student->year_level }}
                        </td>

                        <td>

                            <div class="actions">

                                <a
                                    href="{{ route('students.show', $student) }}"
                                    class="view-link"
                                >
                                    View
                                </a>

                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="edit-link"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('students.destroy', $student) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this student?');"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="delete-button"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <div class="empty">

            @if (!empty($search))
                No students found matching "{{ $search }}".
            @else
                No students registered yet.
            @endif

        </div>

    @endif

</div>

</body>
</html>