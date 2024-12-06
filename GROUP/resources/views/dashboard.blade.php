<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/bag.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('storage/css/dashboard.css') }}">
    <title>Dashboard</title>
    <style>
        .admin img{
            border-radius: 50%;
        }

        .admin span{
            font-size: 14px;
        }
    </style>

</head>

<body>
    <main>
        <div style="row-gap: 5px;display: flex; flex-direction: column; align-items: flex-end;">
            <!-- ADMIN VIEW -->
            <div
                style="cursor: default; display: flex; background: rgb(0, 255, 38); font-size: 1.2rem; color: black; padding: 8px 14px; border-radius: 7px; flex-direction: row; flex-wrap: nowrap; justify-content: center; align-items: center; column-gap: 5px;" class="admin">
                <img src="{{ asset('storage/images/default.jpg') }}" width="25px" height="25px"
                    alt="admin"><span>Admin</span>
            </div>
            <!-- ADMIN TABLE -->
            <table class="resume_table">
                <thead>
                    <tr class="resume_header">
                        <th class="userid_header">ID</th>
                        <th class="picture_header">Picture</th>
                        <th class="firstname_header">Name</th>
                        <th class="status_header">Status</th>
                        <th class="action_header">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr class="resume_row">
                            <td class="userid_td">{{ $admin->id }}</td>
                            <td class="picture_td">
                                @if ($admin->picture)
                                <img src="{{ asset('storage/'. $admin->picture) }}"
                                    alt="user image" width="50px" height="50px">
                                @else
                                <img src="{{ asset('storage/images/default.jpg') }}"
                                alt="user image" width="50px" height="50px">
                                @endif
                            </td>
                            <td class="username_td">{{ ucwords($admin->name) ?? 'N/A' }}</td>
                            {{-- <td class="status_td">{{ $admin->status ?? 'N/A' }}</td> --}}
                            <td class="status_td">
                                <form action="{{route('resume.update', $admin->id)}}" method="post">
                                    @csrf

                                    @method('PUT')
                                    <select id="status_select" name="application_status" onchange="this.form.submit()">
                                        <option value="N/A" {{ $admin->applicationStatus == 'N/A' ? 'selected' : '' }}>N/A</option>
                                        <option value="Received" {{ $admin->applicationStatus == 'Received' ? 'selected' : '' }}>
                                            Received</option>
                                        <option value="Reviewed" {{ $admin->applicationStatus == 'Reviewed' ? 'selected' : '' }}>
                                            Reviewed</option>
                                        <option value="Referred" {{ $admin->applicationStatus == 'Referred' ? 'selected' : '' }}>
                                            Referred</option>
                                        <option value="Selected" {{ $admin->applicationStatus == 'Selected' ? 'selected' : '' }}>
                                            Selected</option>
                                        <option value="Hired" {{ $admin->applicationStatus == 'Hired' ? 'selected' : '' }}>Hired
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="action_td">
                                <a href="{{ route('resume.show', $admin->id) }}"><button class="view-button">
                                        View</button></a>
                                <a href="{{ route('resume.edit', $admin->id) }}"><button class="view-button">
                                        Edit</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- ADMIN LOGOUT -->
            <form action="{{route('logout')}}" method="post">
                @csrf

                <button class="logout"><span>Logout</span></button>
            </form>

        </div>
    </main>
</body>

</html>
