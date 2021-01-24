@extends('details')

@section('content')
		<div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1 class=" display-2"></h1>
                </div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="card">
        				<div class="card-header">
                    <h4 class="card-title"> Contacts Table</h4>

                </div>
        	     <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead >
                             <th>
                                First Name
                            </th>
                             <th>
                                Last Name
                            </th>
                            <th>
                                E-mail
                            </th>
                            <th>
                                Phone number
                            </th>
                             <th>
                                Message
                            </th>
                 
                            </thead>
                            <tbody>
                            @foreach($contacts as $data)
                            <tr>
                                <td>
                                   {{$data->fname}}
                                </td>
                                <td>
                                    {{$data->lname}}
                                </td>
                                <td>
                                    {{$data->mail}}
                                </td>
                                <td>
                                   {{$data->phone}}
                                </td>
                                <td>
                                   {{$data->message}}
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
    </div>













@endsection