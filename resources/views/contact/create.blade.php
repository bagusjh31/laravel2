@extends('contact')

@section('main')
<div class="row">
	<div class="col-md-8 offset-sm2">
	<h2 class="dispaly-6"> Add new</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-8 offset-sm2">
		<form action="{{ url('/contact') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="namalengkap">Nama Lengkap</label>
				<input class="form-control" type="text" name="namalengkap">	
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input class="form-control" type="text" name="alamat">	
			</div>
			
			<div class="form-group">
				<label for="profesi">Profesi</label>
				<input class="form-control" type="text" name="profesi">	
			</div>

			<div class="form-group">
				<select class="form-control select2" style="width: 100;" name="jabatan_id" id="jabatan_id">
					<option disabled value>Pilih Jabatan</option>
					@foreach ($jab as $data)
					<option value="{{ $data->id }}">{{ $data->jabatan }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="gaji">Gaji</label>
				<input class="form-control" type="text" name="gaji">	
			</div>
			<div class="form-group">
				<label for="jumlahsaudara">Jumlah Saudara:</label>
				<textarea class="form-control" name="jumlahsaudara" ></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Save</button>
			
		</form>
	</div>
	
</div>

@endsection