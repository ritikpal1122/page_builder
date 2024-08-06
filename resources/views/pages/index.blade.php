<!DOCTYPE html>
<html lang="en">

<head>
    <title>typof Page Builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .beast-header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #444;
        }

        .table-shadow {
    border-collapse: separate;
    border-spacing: 0 10px;
    box-shadow: 0 1px 5px rgba(10, 18, 75, 0.25) inset;
    border: 1px solid #ddd;
}

.table-shadow thead {
    background-color: #0A124B;
    text-align: center;
    color: #fff;  
    border-bottom: 1px solid #ddd;
}

.table-shadow thead th {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}


    </style>
</head>

<body class="bg-light">

    <div class="beast-header">
        <h1>TypOf Page Builder</h1>
        <p>Simplify Website Creation - Drag, Drop, Done!</p>
    </div>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="text-dark">Page Builder - Drag & Drop</h2>
            </div>

            <a href="{{ route('pages.create') }}" class="btn btn-success">+ Add</a>
        </div>

        <div class="table-responsive table-shadow">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Last Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->short_description }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="{{ route('pages.show', $item->id) }}" class="btn btn-primary">
                                <i class="far fa-eye"></i> Preview
                            </a>
                            <a href="{{ route('pages.edit', $item->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('pages.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this page?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>