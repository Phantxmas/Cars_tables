@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('Models.store') }}" method="post">
                    @csrf
                    <div class="card">

                        <div class="card-header">Add new model</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input name="name" type="text" value="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Car</label>
                                <select name="lecturer_id" class="form-select">
                                    @foreach($marks as $mark)
                                        <option value="{{ $mark->id }}">{{ $mark->name }} {{$mark->surname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-success">Add</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
