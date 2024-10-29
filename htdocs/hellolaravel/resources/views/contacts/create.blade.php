@extends('layouts.base')
@section('main')
<!-- The Modal -->

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <form method="post" action="{{ route('contacts.store') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">Họ, đệm:</label>
                <input type="text" class="form-control" name="first_name" />
            </div>
            <div class="form-group">
                <label for="last_name">Tên:</label>
                <input type="text" class="form-control" name="last_name" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div id="btnSubmit" class="btn btn-primary">Add contact</div>
            <!-- Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div style="display: flex; align-items: center; justify-content: space-between">
                        <p style="margin: 0;">Bạn có chắc muốn thêm contact ?</p>
                        <span class="close">&times;</span>
                    </div>
                    <button type="submit" id="btnSubmit2" class="btn btn-primary">Confirm</button>
                </div>

            </div>
        </form>

    </div>
</div>
@endsection