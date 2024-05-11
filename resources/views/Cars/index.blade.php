@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('Cars.create') }}" class="btn btn-info" >{{ __('Add new Car') }}</a>
                        <hr>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Car</th>
                                    <th>Model name</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->name }}</td>
                                    <td>
                                        @foreach($car->courses as $models)
                                            {{ $models->name }},
                                        @endforeach
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
