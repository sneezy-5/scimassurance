@extends('layouts.admin')

@section('content')

<div class="pd-20 card-box mb-30">

					<form method="POST" action="{{route('actualites.update',['actualite'=>$actualite->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Type</label>
							<div class="col-sm-12 col-md-10">
							<div class="form-group row">
								<label for="exampleSelectGender">Type de actualité</label>
								<select class="form-control" id="exampleSelectGender" name="type" style="width:1000px;">
								<option value="Assurance auto">assurance auto</option>
								<option value="Assurance maladie">assurance maladie</option>
								<option value="Assurance transport">assurance transport</option>
								<option value="Assurance voyage">assurance voyage</option>
								<option value="Multirisque habitation">multirisque habitation</option>
								<option value="Multirisque professionnel">multirisque professionnel</option>
								<option value="Tousrisque chantier">tousrisque chantier</option>
								</select>
							</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Titre</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Titre" name="title" value="{{$actualite->title}}">
							</div>
						</div>
						<div class="form-group">
                            <label>Description </label>
                            <textarea class="form-control" name="description">{{$actualite->description}}</textarea>
                        </div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"type="file" name="image" >
							</div>
						</div>
                        <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('actualites.index')}}">Annuler</a></button>
					</form>

				</div>

@endsection




