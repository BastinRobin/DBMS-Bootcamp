<form action="{{ URL::route('put_edit_item', $item->id) }}" method="POST">
	<input type="hidden" name="_method" value="PUT" />
	{{ csrf_field() }}
	<input type="text" value="{{ $item->content }}" name="content">
	<button class="btn btn-success" type="submit">Update</button>
</form>