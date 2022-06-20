@extends('layouts.main')
@section('title', 'Members Applications')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Membership Applications</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Resume</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Jane Doe</td>
                            <td>janedoe@gmail.com</td>
                            <td>Link</td>
                            <td><a class="btn btn-circle btn-sm btn-primary" href="#" role="button"><i
                                        class="fa-solid fa-search"></i></a>

                                <a class="btn btn-circle btn-sm btn-danger" href="#" role="button"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
