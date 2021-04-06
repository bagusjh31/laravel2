@extends('contact')

@section('main')
	<div class="row">
		<div class="col-md-8 offset-sm-2">
			<h2 class="display-6">Edit Data</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-sm-2">
			<form action="{{ url("/contact/{$contact->id}") }}" method="post">
				@method('PATCH')
				@csrf
				<div class="form-group">
					<label for="namalengkap">Nama Lengkap:</label>
					<input value="{{$contact->namalengkap}}" class="form-control" type="text" name="namalengkap">
				</div>

				<div class="form-group">
					<label for="alamat">Alamat :</label>
					<textarea class="form-control" name="alamat">{{$contact->alamat}}</textarea>
				</div>

				<div class="form-group">
					<label for="profesi"> Profesi :</label>
					<input value="{{$contact->profesi}}" class="form-control" type="text" name="profesi">
				</div>

				<div class="form-group">
					<select class="form-control select2" style="width: 100%;" name="jabatan_id" id="jabatan_id">
						<option disabled value>Pilih Jabatan</option>
						<option value="{{$contact->jabatan_id}}">{{$contact->jabatan->jabatan}}</option>
							@foreach ($jab as $contact)
							<option value="{{$contact->id}}">{{$contact->jabatan}}</option>
							@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="gaji">gaji :</label>
					<input value="{{$contact->gaji}}" class="form-control" type="text" name="gaji">
				</div>

				<div class="form-group">
					<label for="jumlahsaudara">jumlah saudara :</label>
					<input value="{{$contact->jumlahsaudara}}" class="form-control" type="text" name="jumlahsaudara">
				</div>
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</form>
		</div>
	</div>
@endsection