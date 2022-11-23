@extends('app')

@section('associers')
	<div class="associers">
		<div class="div-tete">
			Mes associers
		</div>

		@if(Session::has('succes'))
			<div class="message_1">
				{{ Session::get('succes') }}
			</div>
		@endif

		@if(Session::has('erreur'))
			<div class="message_2">
				{{ Session::get('erreur') }}
			</div>
		@endif

		<form action="{{ route('autorisation') }}" method="POST" class="form">
			@csrf
			<div class="div-inputs">
				<div class="div-label">
					<label>Email</label>
				</div>
				<div class="div-input">
					<input type="email" name="email" class="input" required>
				</div>
			</div>
			<div class="div-inputs">
				<div class="div-label">
					<label>Expertise 1</label>
				</div>
				<div class="div-input">
					<select name="expertise_1" class="select" required>
						<option></option>
						@foreach($expertises as $expertise)
							<option value="{{ $expertise->id }}">{{ $expertise->expertise }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="div-inputs">
				<div class="div-label">
					<label>Expertise 2</label>
				</div>
				<div class="div-input">
					<select name="expertise_2" class="select">
						<option></option>
						@foreach($expertises as $expertise)
							<option value="{{ $expertise->id }}">{{ $expertise->expertise }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="div-inputs">
				<div class="div-label">
					<label>Expertise 3</label>
				</div>
				<div class="div-input">
					<select name="expertise_3" class="select">
						<option></option>
						@foreach($expertises as $expertise)
							<option value="{{ $expertise->id }}">{{ $expertise->expertise }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="div-inputs">
				<div class="div-label">
					<label>Mot de passe</label>
				</div>
				<div class="div-input">
					<input type="password" name="password" class="input" placeholder="*******" required>
				</div>
			</div>
			<div class="div-btn">
				<button type="submit" class="btn">Envoyez</button>
			</div>
		</form>
		<div class="div-associers">
			<table>
				<thead>
					<th>N</th>
					<th>Email</th>
					<th>Expertise 1</th>
					<th>Expertise 2</th>
					<th>Expertise 3</th>
					<th>Code aut</th>
				</thead>
				<tr>
					@foreach($codes as $code)
						<td>{{ $numero++ }}</td>
						<td>{{ $code->email }}</td>
						<td>{{ $code->expertise1 }}</td>
						<td>{{ $code->expertise2 }}</td>
						<td>{{ $code->expertise3 }}</td>
						<td>{{ $code->code }}</td>
					@endforeach
				</tr>
			</table>

			<table>
				<thead>
					<th>N</th>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Expertise 1</th>
					<th>Expertise 2</th>
					<th>Expertise 3</th>
					<th>Plus</th>
				</thead>
				<tr>
					@foreach($codes as $code)
						<td>{{ $numero++ }}</td>
						<td>{{ $code->email }}</td>
						<td>{{ $code->expertise1 }}</td>
						<td>{{ $code->expertise2 }}</td>
						<td>{{ $code->expertise3 }}</td>
						<td>{{ $code->code }}</td>
						<td>{{ $code->code }}</td>
					@endforeach
				</tr>
			</table>
		</div>
	</div>
@endsection