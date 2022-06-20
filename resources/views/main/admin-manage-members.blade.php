@extends('layouts.main')
@section('title', 'Members Management')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Registered Members</h5>
                <a class="btn btn-primary" href="{{ route('admin.register-member') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Member</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Jane Doe</td>
                            <td>janedoe@gmail.com</td>
                            <td>@janedoe</td>
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
