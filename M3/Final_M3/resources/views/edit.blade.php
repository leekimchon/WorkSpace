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
        <div class="row mt-5 ">
            <form action="{{ route('update', ['id' => $book->id]) }}" method="POST">
                @csrf
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Book Name</label>
                            <input name="name" value="{{ $book->name ?? old('name') }}" type="input" class="form-control" id="exampleInputEmail1">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input name="isbn" value="{{ $book->ISBN ?? old('isbn') }}" type="input" class="form-control" id="isbn">
                            <span class="text-danger">{{ $errors->first('isbn') }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="number_of_pages" class="form-label">number_of_pages</label>
                            <input name="number_of_pages" value="{{ $book->number_of_pages ?? old('number_of_pages') }}" type="input" class="form-control" id="number_of_pages">
                            <span class="text-danger">{{ $errors->first('number_of_pages') }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Author</label>
                            <select name="author" id="disabledSelect" class="form-select">
                                <option value="Author 1">Author 1</option>
                                <option value="Author 2">Author 2</option>
                                <option value="Author 3">Author 3</option>
                                <option value="Author 4">Author 4</option>
                                <option value="Author 5">Author 5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelectq" class="form-label">Categories</label>
                            <select name="category_id" id="disabledSelectq" class="form-select">
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                                <option value="Category 4">Category 4</option>
                                <option value="Category 5">Category 5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="publishing_year" class="form-label">publishing_year</label>
                            <input name="publishing_year" value="{{ $book->publishing_year ?? old('publishing_year') }}" type="input" class="form-control" id="publishing_year">
                            <span class="text-danger">{{ $errors->first('publishing_year') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
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
