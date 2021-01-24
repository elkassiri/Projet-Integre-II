@extends('layouts.master')

@section('title')
    Properties Edit
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Property Edit Data</h4>
                <form action="/update-prp/{{$properties->id}}" methode="GET" >
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User ID</label>
                            <input type="text" name="id_user" class="form-control" value="{{$properties->id_user}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type</label>
                            <input type="text" name="type" class="form-control" value="{{$properties->type}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$properties->name}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Rent or Sale</label>
                            <input type="text" name="rent_sale" class="form-control" value="{{$properties->rent_sale}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location</label>
                            <input type="text" name="location" class="form-control" value="{{$properties->location}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Price</label>
                            <input type="text" name="price" class="form-control" value="{{$properties->price}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">area</label>
                            <input type="text" name="area" class="form-control" value="{{$properties->area}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Number of rooms</label>
                            <input type="text" name="nb_rooms" class="form-control" value="{{$properties->nb_rooms}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Photo</label>
                            <input type="text" name="photo" class="form-control" value="{{$properties->photo}}">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" name="description" rows="20">{{$properties->description}}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('properties')}}" class="btn " >Back</a>
                        <button type="submit" class="btn ">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
