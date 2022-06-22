@extends('layouts.main')
@section('title', 'Members Applications')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Membership Applications</h5>
            </div>
            <div class="table-responsive">
                <table class="table" id="myTable">
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
                        @forelse ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="uploads/resume/{{ $user->cv }}" target="_blank">Link</a></td>
                                <td>
                                    <form action="{{ route('accept.application') }}" method="post" style="display: inline;">
                                    @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                                        <button class="btn btn-circle btn-sm btn-success" role="button"><i
                                                    class="fa-solid fa-check"></i></button>
                                    </form>

                                    <a class="btn btn-circle btn-sm btn-danger" href="#" role="button"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">
                                    <div class="card-header border-0 text-center">No data available in table</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
