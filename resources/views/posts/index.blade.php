<style>
	table, th, td {
  border: 1px solid black;
}	
</style>
<div class="container">
	<table>
		<tr>
			<td>title</td>
			<td>text</td>
			<td>short description</td>
			<td>can post</td>
		</tr>
		@foreach ($products as $product)
			<tr>
				<td>{{$product->title}}</td>
				<td>{{$product->text}}</td>
				<td>{{$product->short_description}}</td>
				<td>{{$product->can_add}}</td>

			</tr>
		@endforeach
	</table>
	
</div>