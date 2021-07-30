@extends('layout.layout')

@section('title','投稿の削除')


@section('content')
@if (isset($error))
	<p>{{$error}}</p>
@endif
<form action="deleteExecute" method="post">
@csrf
	<table class="table table-bordered border-secondary align-middle text-nowrap" >
		<tbody>
		<tr class="bg-white">
			<th class="bg-info">タイトル</th>
			<td class="text-start" colspan="2">{{$post->title}}</td>
		</tr>
		<tr class="bg-white">
			<th class="bg-info">名前</th>
			<td class="text-start" colspan="2">{{$post->name}}</td>
		</tr>
		<tr class="bg-white">
			<th class="bg-info">内容</th>
			<td class="text-start" colspan="2">{!! nl2br(e($post->text)) !!}</td>
		</tr>
		<tr class="bg-white">
			<th class="bg-info">編集用パスワード</th>
			<td><input class="form-control" type="password" name="pw" required></td>
			<td colspan="2"><input type="submit" value="削除"></td>
		</tr>
		<tr class="bg-white">
			<td colspan="3"><a href="{{ url()->previous() }}">掲示板に戻る</a></td>
		</tr>
		<input type="hidden" name="id" value="{{$post->id}}">
		</tbody>
	</table>
	</form>

@endsection