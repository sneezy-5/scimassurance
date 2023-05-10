@extends('layouts.admin')

@section('content')

<div class="pd-20 card-box mb-30">
@if ($errors->any())
			<div class="alert alert-danger">
				<ul class="list-unstyled">
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
					<form method="POST" action="{{route('actualites.store')}}" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Type</label>
							<div class="col-sm-12 col-md-10">
							<div class="form-group row">
								<label for="exampleSelectGender">Type de actualité</label>
								<select class="form-control" id="exampleSelectGender" name="type" style="width:1000px;">
								<option value="assuranceauto">assurance auto</option>
								<option value="assurancemaladie">assurance maladie</option>
								<option value="assurancetransport">assurance transport</option>
								<option value="assurancevoyage">assurance voyage</option>
								<option value="multirisquehabitation">multirisque habitation</option>
								<option value="multirisqueprofessionnel">multirisque professionnel</option>
								<option value="tousrisquechantier">tousrisque chantier</option>
								</select>
							</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Titre</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Titre" name="title">
							</div>
						</div>
						<div class="form-group">
                            <label>Description </label>
                            <textarea class="form-control" name="description"></textarea>
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




