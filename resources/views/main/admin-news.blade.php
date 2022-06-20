@extends('layouts.main')
@section('title', 'News Updates')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Uploaded News</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-news') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($news as $n)
                            <tr>
                                <th>{{ $n->id }}</th>
                                <td>{{ \Carbon\Carbon::parse($n->date)->format('F d, Y') }}</td>
                                <td>{{ $n->title }}</td>
                                <td><a class="btn btn-circle btn-sm btn-primary" href="#" role="button"><i
                                            class="fa-solid fa-search"></i></a>

                                    <form action="{{ route('delete.news') }}" method="post" style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $n->id }}">
                                        <button class="btn btn-circle btn-sm btn-danger" role="button"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
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
