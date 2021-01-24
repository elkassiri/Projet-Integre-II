@extends('details')

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="/save-msg" methode="GET" >
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">First name</label>
                            <input type="text" class="form-control" id="f_name" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">E-mail</label>
                            <input type="text" class="form-control" id="mail" name="mail">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone number</label>
                            <input type="text" class="form-control" id="p_number" name="phone">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ID annonce</label>
                            <input type="text" class="form-control" id="id_prop" name="id_prop" value="{{$immobilier->id}}">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <main role="main">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1 class=" display-2"></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('immobiliers/'.$immobilier->photo)}}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 >{{$immobilier->name}}</h2>
                  <div class="row">
                    <span class="left">
								<p><i class="fas fa-map-marker-alt"></i> {{$immobilier->location}} </p>

								<p><i class="fas fa-key"></i> ${{$immobilier->price}}</p>
							</span>
                    <span class="right">

								<p><i class="fas fa-user-friends"></i> {{$immobilier->nb_rooms}} rooms </p>
								<p><i class="fas fa-chart-area"></i> {{$immobilier->area}} m<sup>2</sup></p>
							</span>
                  </div>
                   <div class="row"> <p>{{$immobilier->description}}</p></div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact seller</button>

                </div>
            </div>
        </div>

    </main>
@endsection
