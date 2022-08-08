<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>Books List</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('create') }}" class="btn btn-primary float-end">Add</a>
                </div>
            </div>
            <div class="row">
                <span class="text-success">{{ Session::get('flash_message_successfully') ?? '' }}</span>
            </div>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">category</th>
                        <th scope="col">number_of_pages</th>
                        <th scope="col">publishing_year</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->ISBN }}</td>
                            <td>{{ $book->category }}</td>
                            <td>{{ $book->number_of_pages }}</td>
                            <td>{{ $book->publishing_year }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $book->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('destroy', ['id' => $book->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12">
                {{ $books->links() }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
