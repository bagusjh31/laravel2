@extends('contact')

@section('main')
<a href="{{ url('contact/create') }}" class="btn btn-success mb-1 ">add New</a>
	<div class="row">
		<div class="col-md-12">
			<table class=" table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Profesi</th>
						<th>Jabatan</th>
						<th>Gaji</th>
						<th>Jumlah Saudara</th>
						<th colspan="2"> Action </th>
					</tr>
				</thead>
				<tbody>
					@foreach ($contact as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->namalengkap}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->profesi}}</td>
						<td>{{$data->jabatan}}</td>
						<td>{{$data->gaji}}</td>
						<td>{{$data->jumlahsaudara}}</td>
						<td>
						<a class="btn btn-primary" href="{{ url("contact/{$data->id}/edit") }}">EDIT</a>
						</td>
						<td>
                           <form action="{{url("contact/{$data->id}")}}" method="post">
                           	@csrf
                           	@method('DELETE')
                           	<button class="btn btn-danger">DELETE</button>
							
                           </form>
						
                        </td>
                    </tr>
					@endforeach
				
				</tbody>
			</table>
		</div>
		
	</div>
	@endsection