


@extends('layouts.admin')

@section('content')
<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Actualites</h4>
						
						</div>
					
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Titre</th>
								<th scope="col">Description</th>
								<th scope="col">Image</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($actualites as $actualite)
							<tr>
								<th scope="row">{{$actualite->id}}</th>
								<td>{{$actualite->title}}</td>
								<td>{{$actualite->description}}</td>
								<td><img src="{{asset('storage/image/'.$actualite->image)}}" alt="article-image" width="100" height="100"></td>
                                <td>
                            <p>
                            <a href="{{route('actualites.edit',['actualite'=>$actualite->id])}}"><i class="fa fa-edit"  style='font-size:36px'></i></a> 
                            <!-- <a href="{{route('actualites.show',['actualite'=>$actualite->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a> -->
                            <form action="{{route('actualites.destroy',['actualite'=>$actualite->id])}}" method="post">
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