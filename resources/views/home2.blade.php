@extends('details')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form method="get" action="/my_profile" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname" value="{{Auth::user()->fname}}">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="{{Auth::user()->lname}}">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" id="country" value="{{Auth::user()->country}}">
                    </div>

                    <div class="form-group">
                        <label>phone number</label>
                        <input type="text" class="form-control" name="phone"
                               id="phone" value="{{Auth::user()->phone}}">
                    </div>

                    <div class="form-group">
                        <label>E-mail adress</label>
                        <input type="text" class="form-control" name="mail"
                               id="mail" value="{{Auth::user()->email}}">
                    </div>
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
    </div>
  </div>
</div>

    <div class="container">
        <div class="row mb-4">
            <div >
                <h1></h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update Profile</button>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                {{--dump($prop)--}}

                @foreach($prop as $prop )
                    <div class="col-lg-4 col-sm-10 mx-auto mb-2">
                        <div class="card">
                            <img src="{{asset('immobiliers/'.$prop->photo)}}" class="home__img card-img-top" />
                            <div class="card-body">
                                <div class="card-tile">
                                    <h3 class="home__name text-muted">{{$prop->name}}</h3>
                                </div>
                                <span class="left">
                                    <p>{{$prop->type}} </p>
                                <p><i class="fas fa-map-marker-alt"></i> {{$prop->location}} </p>

                                <p><i class="fas fa-key"></i> ${{$prop->price}}</p>
                            </span>
                                <span class="right">
                                    <p>for {{$prop->rent_sale}} </p>

                                <p><i class="fas fa-user-friends"></i> {{$prop->nb_rooms}} rooms </p>
                                <p><i class="fas fa-chart-area"></i> {{$prop->area}} m<sup>2</sup></p>
                            </span>
                            </div>
                            <div class="btn-group">
                                 <a href="contact/{{$prop->id}}" class="btn btn-sm btn-outline-primary" role="button">Contact</a>
                                <a href="edit/{{$prop->id}}" class="btn btn-sm btn-outline-primary" class="edit">Edit</a>
                            <form action="delete/{{$prop->id}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-sm btn-outline-primary" classe="delete">Delete</button>
                                    </form>
                           
                            </div>
                        </div>
                    </div>
                
                @endforeach
            </div>
        </div>
        </div>
    </div>

@endsection
