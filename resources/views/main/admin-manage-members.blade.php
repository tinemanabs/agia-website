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
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.member') }}">Delete All Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Name of Member</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $user->id }}"></td>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ '@' .  $user->username }}</td>
                                <td><button type="button" class="btn btn-circle btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#id{{ $user->id }}">
                                        <i class="fa-solid fa-search"></i>
                                    </button>

                                <form style="display: inline;" action="{{ route('delete.member') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                                    <button class="btn btn-circle btn-sm btn-danger" type="submit">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="id{{ $user->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>ID</strong></div>
                                                    <div class="col-9">{{ $user->id }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Name</strong></div>
                                                    <div class="col-9">{{ $user->name }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Email</strong></div>
                                                    <div class="col-9"> {{ $user->email }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Username</strong></div>
                                                    <div class="col-9">{{ '@' .  $user->username }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-9"> <strong>Membership Application</strong></div>
                                                    <iframe src="{{ 'uploads/application/' . $user->cv }}"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
