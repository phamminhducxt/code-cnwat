@extends('layouts.base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <form method="post" action="{{ route('contacts.update',
$contact->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $contact->first_name }} />
            </div>
            <div class="form-group">
                <label for="first_name">Last name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $contact->last_name }} />
            </div>
            <div class="form-group">
                <label for="first_name">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection