<!--@extends('base')-->
@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
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
      <form method="post" action="{{ route('resident.store') }}">
          @csrf
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name"/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="last_name">Middle Name:</label>
                    <input type="text" class="form-control" name="middle_name"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>
                
                <div class="col-md-6 form-group">
                    <label for="last_name">Extention Name:</label>
                    <input type="text" class="form-control" name="extention_name"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Birthday:</label>
                    <input type="text" class="form-control" name="birthday"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Martial Status</label>
                    <input type="text" class="form-control" name="marital_status"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Relationship to Household Head:</label>
                    <input type="text" class="form-control" name="rel_head"/>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 form-group">    
                    <label for="first_name">Address 1</label>
                    <input type="text" class="form-control" name="address_1"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">    
                    <label for="first_name">Address 2</label>
                    <input type="text" class="form-control" name="address_2"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Height:</label>
                    <input type="text" class="form-control" name="height"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Weight</label>
                    <input type="text" class="form-control" name="weight"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Telephone Number:</label>
                    <input type="text" class="form-control" name="telephone_num"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile_num"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Email Address:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">Educational Attainment</label>
                    <input type="text" class="form-control" name="education"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">    
                    <label for="first_name">Business Name:</label>
                    <input type="text" class="form-control" name="business_name"/>
                </div>
                <div class="col-md-6 form-group">    
                    <label for="first_name">House Built</label>
                    <input type="text" class="form-control" name="house_built"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">    
                    <label for="first_name">Employment Records:</label>
                    <textarea  class="form-control" name="employment_record"></textarea>
                </div>
            </div>
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection