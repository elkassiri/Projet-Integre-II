@extends('details')

@section('content')


<div class="container">
    <div class="row mb-4">   <div><h1></h1></div></div> 
    <div class="row mb-4">
        <div >
            <h1>Add new property</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
    <form method="get" action="/sav-prp" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Rent or Sale</label>
            <input type="text" name="rent_sale" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location"
                   id="location">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price"
                   id="price">
        </div>

        <div class="form-group">
            <label>Area</label>
            <input type="text" class="form-control" name="area"
                   id="area">
        </div>

        <div class="form-group">
            <label>Room Number</label>
            <input type="text" class="form-control" name="nb_rooms"
                   id="nb_rooms">
        </div>

        <div class="form-group">
                <label>Photo</label>
            <input name="photo" type="file" id="photo">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" id="description"
                      rows="4"></textarea>
        </div>
        <div class="input-group mb-2 mr-sm-2">
            <input type="submit" class="btn btn-primary " value="Submit" name="send">
        </div>

    </form>
        </div>
    </div>
</div>

@endsection