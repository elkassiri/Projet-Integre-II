@extends('home')
@section('content')
@section('title')
    <h1 class=" display-2">Properties</h1>
@endsection
		  <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                {{--dump($immobilier)--}}

                @foreach($immobiliers as $immobilier )
                    <div class="col-lg-4 col-sm-10 mx-auto mb-2">
                        <div class="card">
                             <div class="inner">
                    <img src="{{asset('immobiliers/'.$immobilier->photo)}}" class="home__img card-img-top" />
                    </div>
                            <div class="card-body">
                                <div class="card-tile">
                                    <h3 class="home__name text-muted">{{$immobilier->name}}</h3>
                                </div>
                                <span class="left">
								<p><i class="fas fa-map-marker-alt"></i> {{$immobilier->location}} </p>

								<p><i class="fas fa-key"></i> ${{$immobilier->price}}</p>
							</span>
                                <span class="right">

								<p><i class="fas fa-user-friends"></i> {{$immobilier->nb_rooms}} rooms </p>
								<p><i class="fas fa-chart-area"></i> {{$immobilier->area}} m<sup>2</sup></p>
							</span>
                            </div>
                            <a href="property/{{$immobilier->id}}" type="submit" class="btn btn-primary  mb-2 mr-sm-2">View more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
