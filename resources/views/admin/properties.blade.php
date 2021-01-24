@extends('layouts.master')

@section('title')
    Properties
@endsection

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/save-prp" methode="GET" >
                    @csrf
                <div class="modal-body">
                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User ID</label>
                            <input type="text" name="id_user" class="form-control" id="name">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type</label>
                            <input type="text" name="type" class="form-control" id="type">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Rent or Sale</label>
                            <input type="text" name="rent_sale" class="form-control" id="name">
                        </div>
                       
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location</label>
                            <input type="text" name="location" class="form-control" id="location">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">area</label>
                            <input type="text" name="area" class="form-control" id="area">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Number of rooms</label>
                            <input type="text" name="nb_rooms" class="form-control" id="nb_rooms">
                        </div>
                    <div class="input-group">
                        <div class="col-md-8">
                            <input name="photo" type="file" id="photo">
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn ">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Properties Table
                        <button type="button" class="btn float-right" data-toggle="modal" data-target="#exampleModal">Add property</button></h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead >
                            <th>
                                ID
                            </th>
                             <th>
                                User ID
                            </th>
                             <th>
                                Type
                            </th>
                            <th>
                                Name
                            </th>
                             <th>
                                Rent or Sale
                            </th>
                            <th>
                                Location
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Area
                            </th>
                            <th>
                                Rooms
                            </th>
                            
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                            </thead>
                            <tbody>
                            @foreach($properties as $data)
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->id_user}}
                                </td>
                                <td>
                                    {{$data->type}}
                                </td>
                                <td>
                                    {{$data->name}}
                                </td>
                                <td>
                                    {{$data->rent_sale}}
                                </td>
                                <td>
                                    {{$data->location}}
                                </td>
                                <td>
                                    {{$data->price}}
                                </td>
                                <td>
                                    {{$data->area}}
                                </td>
                                <td>
                                    {{$data->nb_rooms}}
                                </td>
                                
                                <td>
                                    <a href="edit-prp/{{$data->id}}" class="btn" class="edit">Edit</a>
                                </td>
                                <td>
                                    <form action="delete-prp/{{$data->id}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                    <button type="submit" class="btn" classe="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
