@extends('layouts.app')

@section('title', 'Johny Burnz - Staff')


@section('content')
    <div class="row">
        <col-12>
            <h1>Staff List</h1>
        </col-12>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="staff" method="post" class="pb-4">
                <div class="form-group pb-1">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" />
                    <span class="pb-2" style="color: #ff0000"><strong>{{ $errors->first('first_name') }}</strong></span>
                </div>

                <div class="form-group pb-1">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" />
                    <span class="pb-2" style="color: #ff0000"><strong>{{ $errors->first('last_name') }}</strong></span>
                </div>

                <div class="form-group pb-1">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" />
                    <span class="pb-2" style="color: #ff0000"><strong>{{ $errors->first('email') }}</strong></span>
                </div>

                <button type="submit" class="btn btn-primary">Add New User</button>
                @csrf
            </form>
        </div>
    </div>
    <hr>


    <div class="row">
        <div class="col-12">
            <ul>
                @foreach($staff as $user)
                    <li>{{ $user->first_name }} {{ $user->last_name }} <span class="text-muted pl-2">({{ $user->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
