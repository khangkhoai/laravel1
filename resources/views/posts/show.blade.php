@extends('main')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>
        <h3>{{$post->desc}}</h3>
        <h3>{{$post->category}}</h3>
    </div>
    <div class="col-md-4">
	    <div class="well">
			<dl class="dl-horizontal">
				<dt>Create At:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
			</dl>	
            <dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        <input class="btn btn-default" type="submit" value="Delete"  class="btn btn-danger"/>
                        {!! method_field('delete') !!}
                        {!! csrf_field() !!}
                    </form>
		</div>
	</div>
</div>
@endsection