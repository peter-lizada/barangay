@extends('layouts.app', ['activePage' => 'test', 'titlePage' =>'Add Contact'])
@section('content')
<div class="content">
<div class="container-fluid">
<div class="row">

 <div class="col-sm-12 ">
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('resident.update', $resident->id) }}">
            @method('PATCH')
          @csrf
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="{{ $resident->first_name }}"/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="last_name">Middle Name:</label>
                    <input type="text" class="form-control" name="middle_name" value="{{ $resident->middle_name }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $resident->last_name }}"/>
                </div>
                
                <div class="col-md-6 form-group">
                    <label for="last_name">Extention Name:</label>
                    <input type="text" class="form-control" name="extention_name" value="{{ $resident->extention_name }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Birthday:</label>
                    <input type="text" class="form-control" name="birthday" value="{{ $resident->birthday }}"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Martial Status</label>
                    <input type="text" class="form-control" name="marital_status" value="{{ $resident->marital_status }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Relationship to Household Head:</label>
                    <input type="text" class="form-control" name="rel_head" value="{{ $resident->rel_head }}"/>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 form-group">    
                    <label for="first_name">Address 1</label>
                    <input type="text" class="form-control" name="address_1" value="{{ $resident->address_1 }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">    
                    <label for="first_name">Address 2</label>
                    <input type="text" class="form-control" name="address_2" value="{{ $resident->address_2 }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Height:</label>
                    <input type="text" class="form-control" name="height" value="{{ $resident->height }}"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Weight</label>
                    <input type="text" class="form-control" name="weight" value="{{ $resident->weight }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Telephone Number:</label>
                    <input type="text" class="form-control" name="telephone_num" value="{{ $resident->telephone_num }}"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile_num" value="{{ $resident->mobile_num }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Email Address:</label>
                    <input type="text" class="form-control" name="email" value="{{ $resident->email }}"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Educational Attainment</label>
                    <input type="text" class="form-control" name="education " value="{{ $resident->education }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Business Name:</label>
                    <input type="text" class="form-control" name="business_name" value="{{ $resident->business_name }}"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">House Built</label>
                    <input type="text" class="form-control" name="house_built" value="{{ $resident->house_built }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">    
                    <label for="first_name">Employment Records:</label>
                    <textarea  class="form-control" name="employment_record">{{ $resident->employment_record }} </textarea>
                </div>
            </div>
          <button type="submit" class="btn btn-primary">Edit contact</button>
      </form>
  </div>
</div>
</div></div>
@endsection