@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('owner.filter') }}">
                            @csrf

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Surname') }}</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                            <tr>
                                <th>
                                    <input class="form-control" name="filterName" value="">
                                </th>
                                <th></th>
                                <th></th>
                                <th>
                                    <button class="btn btn-success">Filter</button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($owners as $owner)
                                <tr>
                                    <td>{{ $owner->name }}</td>
                                    <td>{{ $owner->surname }}</td>
                                    <td>{{ $owner->phone }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route("owner.update", $owner->id) }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ route("owner.delete", $owner->id) }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
