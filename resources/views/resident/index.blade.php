@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($residents as $resident)
        <tr>
            <td>{{$resident->id}}</td>
            <td>{{$resident->first_name}} {{$resident->last_name}}</td>
            <td>
                <a href="{{ route('resident.edit',$resident->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('resident.destroy', $resident->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection