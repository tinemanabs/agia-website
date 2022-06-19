@extends('layouts.main')
@section('title', 'Trainings')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Scheduled Trainings</h5>
                <a class="btn btn-primary" href="{{ route('admin-create-training') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Training Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Training Title</td>
                            <td>Otto</td>
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
