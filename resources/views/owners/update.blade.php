@extends('layouts.app')

@section("content")
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <form action="{{ route('owner.save', $owner->id) }}" method="post">
                   @csrf
               <div class="card">

                   <div class="card-header">Add new owner</div>
                   <div class="card-body">
                       <div class="mb-3">
                           <label class="form-label">Name:</label>
                           <input name="name" type="text" value="{{$owner->name}}" class="form-control" required>
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Surname:</label>
                           <input name="surname" type="text" value="{{$owner->surname}}" class="form-control" required>
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Phone:</label>
                           <input name="phone" type="text" value="{{$owner->phone}}" class="form-control">
                       </div>
                       <button class="btn btn-success">Add</button>

                    </div>
                </div>
               </form>
           </div>
       </div>
   </div>
@endsection
