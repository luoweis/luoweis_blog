@extends('main.templates.app')
@section('content')
	<section id="page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-8 column">
					@foreach($articles as $article)
					<article class="post">
						<header>
							<!--
							<div class="media">
								<a href="#"><img src="assets/img/home/1.jpg" alt=""></a>
							</div>
							-->
							<h3><a href="#">{{$article->title}}</a></h3>
							<span>{{ $article->published_at }} / tag: <a href="#">{{ $article->level2}}</a> / <a href="#">4 Comments</a></span>
						</header>
						<div class="editor-styles">
							{!! $article->content !!}
						</div>
						<footer>
							<div>
								<a href="{{url('/read',$article->id)}}">Continue Reading...</a>
							</div>
							<hr>
						</footer>
					</article>
					@endforeach
					<nav id="post-nav">
						<a href="#">Older Posts »</a>
					</nav>
				</div>
				<div class="col-lg-4 col-sm-4 column space">
					<aside id="sidebar">
						<div class="widget">
							<div class="search-form clearfix">
								<input type="text" name="s" placeholder="Search...">
								<button type="submit"><i class="fa fa-search"></i></button>
							</div>
						</div>
						<div class="widget">
							<h4>About</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.</p>
						</div>
						<div class="widget">
							<h4>Find me on</h4>
							<p>
								<a href="#" class="social-1"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-1"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-1"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="social-1"><i class="fa fa-linkedin"></i></a>
							</p>
						</div>
						<div class="widget">
							<h4>Latest Posts</h4>
							<ul>
								<li><a href="#">My journey into the unkown.</a></li>
							</ul>
						</div>
						<div class="widget">
							<h4>Categories</h4>
							<ul>
								<li><a href="#">Travel</a> (4)</li>
								<li><a href="#">Lifestyle</a> (3)</li>
								<li><a href="#">Video</a> (1)</li>
								<li><a href="#">Music</a> (5)</li>
							</ul>
						</div>
						<div class="widget tagcloud">
							<h4>Tags</h4>
							<a href="#">travel</a>
							<a href="#">blog</a>
							<a href="#">lifestyle</a>
							<a href="#">feature</a>
							<a href="#">mountain</a>
							<a href="#">design</a>
							<a href="#">restaurant</a>
							<a href="#">journey</a>
							<a href="#">classic</a>
							<a href="#">sunset</a>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
@endsection
