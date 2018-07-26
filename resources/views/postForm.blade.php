<form action="{{route('postForm')}}" method="post">
	{{ csrf_field() }}
	<input type="text" name="HoTen"><br>
	<input type="text" name="Tuoi"><br>
	<input type="submit">
</form>