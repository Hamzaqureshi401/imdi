@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Manage Roles & Permission for {{ $permission }}
@endsection
@section('content')
<form method="post" action="{{ route('update.SubPermission')}} ">
   @csrf
   <input type="hidden" name="permission" value="{{ $permission}}">
   <input type="hidden" name="role_id" value="{{ $role}}">
    <div class="row">
    <div class="col-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="add" name="add" @if ($subPermission->contains('name', 'add')) checked @endif>
            <label class="form-check-label" for="add">
                Add
            </label>
        </div>
    </div>
    <div class="col-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="update" name="update" @if ($subPermission->contains('name', 'update')) checked @endif>
            <label class="form-check-label" for="update">
                Update
            </label>
        </div>
    </div>
    <div class="col-4">
        <div class ="form-check">
            <input class="form-check-input" type="checkbox" id="delete" name="delete" @if ($subPermission->contains('name', 'delete')) checked @endif>
            <label class="form-check-label" for="delete">
                Delete
            </label>
        </div>
    </div>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection