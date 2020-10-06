<div class="container">
	<form action="{{ route('storeposts') }}" method="POST">		
		@csrf
		<input type="" class="form-control" name="title">
		<textarea name="text">	
		</textarea>
		<textarea name="text2">	
		</textarea>
		<button>
			save
		</button>
	</form>

</div>
