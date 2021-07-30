@extends('layout.layout')

@section('title','新規投稿')


@section('content')

<table class="table table-bordered border-secondary align-middle text-nowrap" >
	<tbody>
	<form action="insert" method="post">
	@csrf
	<tr>
		<th class="bg-info">タイトル</th>
		<td><input class="form-control" type="text" name="title" required></td>
	</tr>
	<tr>
		<th class="bg-info">名前</th>
		<td><input class="form-control" type="text" name="name" required></td>
	</tr>
	<tr>
		<th class="bg-info">編集用パスワード</th>
		<td><input class="form-control" type="password" name="pw" required></td>
	</tr>
	<tr>
		<th class="bg-info">内容</th>
		<td><textarea class="form-control" name="text" cols="30" rows="10" required></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="新規投稿"><input type="reset" value="消去"></td>
	</tr>
	<tr>
		<td colspan="2"><a href="{{ url()->previous() }}">掲示板に戻る</a></td>
	</tr>
	</form>
	</tbody>
</table>

@endsection