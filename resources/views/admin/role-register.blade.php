@extends('layouts.master')

@section('title')
    Registered Roles
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Registerd Roles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>
                                ID
                            </th>
                            <th>
                                First name
                            </th>
                            <th>
                                Last name
                            </th>
                            <th>
                                Country
                            </th>
                            <th>
                                phone number
                            </th>
                            <th>
                                E-mail
                            </th>
                            <th>
                                User Type
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                <tr>
                                    <td>
                                        {{$row->id}}
                                    </td>
                                    <td>
                                        {{$row->fname}}
                                    </td>
                                    <td>
                                        {{$row->lname}}
                                    </td>
                                    <td>
                                        {{$row->country}}
                                    </td>
                                    <td>
                                        {{$row->phone}}
                                    </td>
                                    <td>
                                        {{$row->email}}
                                    </td>
                                    <td>
                                        {{$row->usertype}}
                                    </td>
                                    <td >
                                        <a href="#" class="btn" id="edit">EDIT</a>
                                    </td>
                                    <td >
                                        <form action="/role-delet/{{$row->id}}" method="post">
                                         @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn" >DELETE</button>
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
