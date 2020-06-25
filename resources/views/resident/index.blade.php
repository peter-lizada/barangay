@extends('layouts.app', ['activePage' => 'test', 'titlePage' =>' '])
@section('content')
<div class="row"><div class="container">
  <div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>
  <div class="col-sm-12">
      <h1 class="display-3">Contacts</h1>    
      <div>
      <a style="margin: 19px;" href="{{ route('resident.create')}}" class="btn btn-primary">New contact</a>
      </div> 
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($residents as $resident)
          <tr>
              <td>{{$resident->id}}</td>
              <td>{{$resident->first_name}} </td>
              <td>{{$resident->last_name}} </td>
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
</div></div>
@endsection