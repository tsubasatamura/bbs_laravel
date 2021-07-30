@extends('layout.layout')

@section('title','簡易掲示板forLaravel')


@section('content')
<a href='insert'>新規投稿</a>
@foreach ($posts as $post)
<table class="table table-bordered border-secondary text-nowrap my-4">
	<tr>
		<th class="bg-info" style="width:30%">タイトル：{{$post->title}}</th>
		<th class="bg-info" style="width:30%">投稿者：{{$post->name}}</th>
		<th class="bg-info" style="width:40%">投稿日時：{{$post->date}}</th>
	</tr>
	<tr class="bg-white text-start">
		<td colspan="3" ><div class="text-left">{!! nl2br(e($post->text)) !!}</div></td>
	</tr>
	<tr class="bg-white text-end">
		<td colspan="2">
			<form action="update" method="post">
			@csrf
			<input type="submit" value="変更">
			<input type="hidden" name='id' value="{{$post->id}}">	
			</form>
		</td>
		<td>
			<form action="delete" method="post">
			@csrf
			<input type="submit" value="削除">
			<input type="hidden" name='id' value="{{$post->id}}">	
			</form>
		</td>
		
	</tr>
</table>
@endforeach
<div class="d-flex justify-content-center">{{$posts->links()}}<div>
@endsection
