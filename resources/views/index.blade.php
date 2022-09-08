@extends('layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div>
    <a style="margin: 19px;" href="{{ route('divisions.create')}}" class="btn btn-primary">New Divisi</a>
  </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($division as $divisions)
        <tr>
            <td>{{$divisions->id}}</td>
            <td>{{$divisions->name}}</td>
            <td class="text-center">
                <a href="{{ route('divisions.edit', $divisions->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('divisions.destroy', $divisions->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection