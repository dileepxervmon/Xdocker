@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="media-block">
	<ul class="list-group">
@foreach ($accounts as $account)
  		<li class="list-group-item">
			<div class="media">
				<a class="pull-left" href="#">
				    <img class="media-object img-circle" src="http://placehold.it/260x180" alt="">
				</a>
				<a href="#" class="btn btn-inverse pull-right" role="button">Deploy</a>
				<div class="media-body">
					<h6 class="media-heading"><a href="">{{ String::title($account->title) }}</a></h6>
				    <p>
				    	{{ String::tidy(Str::limit($account->content, 200)) }}
					</p>
					<hr>
					<p>
						<span class="glyphicon glyphicon-calendar"></span> <!--Sept 16th, 2012-->{{{ $account->date() }}}
					</p>
				</div>
			</div>
		</li>
@endforeach
	</ul>
</div>

@stop
