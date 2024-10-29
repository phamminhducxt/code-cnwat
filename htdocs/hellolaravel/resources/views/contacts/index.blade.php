@extends('layouts.base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Contacts</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Họ và tên</td>
                    <td>Email</td>
                    <td colspan=2></td>
                </tr>
            </thead>
            <tbody>
                @foreach($all_contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->first_name}} {{$contact->last_name}}</td>
                    <td>{{$contact->email}}</td>
                    <td> <a href="{{ route('contacts.edit',$contact->id)}}" class="btn
btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    @endforeach
            </tbody>
        </table>
        <a type="button" href="{{ route('contacts.create') }}" class="btn btn-info">Thêm contact</a>
    </div>
</div>
@endsection