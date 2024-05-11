@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('Models.create') }}" class="btn btn-info" >Add new model</a>
                       <hr>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Model name</th>
                                    <th>Cars</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($models as $model)
                                <tr>
                                    <td>{{ $model->name }}</td>
                                    <td>{{ $model->cars->name }} {{ $model->cars->surname }}</td>

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
