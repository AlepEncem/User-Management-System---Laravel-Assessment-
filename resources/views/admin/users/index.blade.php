<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>User Management System</h1>
        
        <div class="card mt-4">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>Users List</h3>
                    </div>
                    <div class="col text-end">
                        <a href="/admin/users/create" class="btn btn-primary">Add New User</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>
                                <span class="badge bg-{{ $user->status == 'active' ? 'success' : 'warning' }}">
                                    {{ $user->status }}
                                </span>
                            </td>
                            <td>
                                <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/users/{{ $user->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{ $users->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</body>
</html>