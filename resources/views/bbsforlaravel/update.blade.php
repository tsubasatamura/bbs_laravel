@extends('layout.layout')

@section('title','投稿の変更')


@section('content')

@if (isset($error))
	<p>{{$error}}</p>
@endif

<form action="updateExecute" method="post">
@csrf
	<table class="table table-bordered border-secondary align-middle text-nowrap" >
		<tbody>
		<tr class="bg-white">
			<th class="bg-info">タイトル</th>
			<td class="text-start" colspan="2"><input class="form-control" type="text" name="title" value="{{old('title',$post->title)}}"required></td>
		</tr>
		<tr class="bg-white">
			<th class="bg-info">名前</th>
			<td class="text-start" colspan="2"><input class="form-control" type="text" name="name" value="{{old('name',$post->name)}}" required></td>
		</tr>
		<tr class="bg-white">
			<th class="bg-info">内容</th>
			<td class="text-start" colspan="2"><textarea class="form-control" name="text" cols="30" rows="10" required>{{old('text',$post->text)}}</textarea></td>
		</tr>
		<tr class="bg-white">
			<th class="bg-info">編集用パスワード</th>
			<td><input class="form-control" type="password" name="pw" required></td><td colspan="2"><input type="submit" value="変更"></td>
		</tr>
		<tr class="bg-white">
			<td colspan="3"><a href="{{ url()->previous() }}">掲示板に戻る</a></td>
		</tr>
		<input type="hidden" name="id" value="{{old('id',$post->id)}}">
		</tbody>
	</table>
	</form>
@endsection