@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <a href="" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Add student</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <!-- Modal Add student -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="disabledTextInput" class=" form-label">Student name</label>
                                            <input type="text" id="disabledTextInput" class="name form-control"
                                                placeholder="Disabled input">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Age</label>
                                            <input type="text" id="disabledTextInput" class="age form-control"
                                                placeholder="Disabled input">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary add_student">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add student -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".add_student").click(function() {
                data = {
                    "name": $(".name").val(),
                    "age": $(".age").val()
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: "/students",
                    data: data,
                    dataType: "json",
                    success: function(data) {
                        console.log(data)
                    }
                });
            })
        });
    </script>
@endsection
