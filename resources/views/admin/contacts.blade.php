


@extends('layouts.admin')

@section('content')
<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Services</h4>
						
						</div>
					
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nom complet</th>
								<th scope="col">addresse mail</th>
								<th scope="col">sujet</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($contacts as $contacts)
							<tr>
								<th scope="row">{{$contact->id}}</th>
								<td>{{$contact->nom_complet}}</td>
								<td>{{$contact->address_mail}}</td>
                                <td>{{$contact->sujet}}</td>
								<td><img src="{{asset('storage/image/'.$service->image)}}" alt=""></td>
                                <td>
                            <p>
                    
                            <form action="{{route('services.destroy',['service'=>$service->id])}}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit"><i class="fa fa-trash" style='font-size:36px;color:red'></i></button>
                            </form>
                         
                            
                            </p>
                
                      
                          </td>
							</tr>
                            @endforeach
						
						</tbody>
					</table>
				</div>
@endsection