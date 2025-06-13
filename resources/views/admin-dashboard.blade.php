<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .dashboard-header {
            padding: 2rem 1rem;
            background: #0d6efd; /* Bootstrap primary blue */
            color: white;
            box-shadow: 0 2px 6px rgba(13,110,253,.3);
        }
        .logout-btn {
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(220,53,69,.5);
            transition: transform 0.2s ease;
        }
        .logout-btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <header class="dashboard-header d-flex justify-content-between align-items-center">
        <h1 class="h3 mb-0">Admin Dashboard</h1>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger logout-btn">Logout</button>
        </form>
    </header>

    <main class="container bg-white rounded shadow-sm mt-5 p-5">
        <section class="mb-4">
            <h2>Welcome back, Admin!</h2>
        </section>
        <section>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-3 border rounded bg-light text-center">
                        <h3>Blogs</h3>
                        <p class="display-6">{{ $blogCount }}</p>
                        <a href="{{route('blogindex')}}" class="btn btn-primary btn-sm">Manage Blogs</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<<<<<<< HEAD

=======
>>>>>>> blog-updation
</body>
</html>
