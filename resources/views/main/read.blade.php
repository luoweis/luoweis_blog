@extends("main.templates.app")
@section("content")
	<section id="page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<article id="page-content" class="clearfix editor-styles">
						<header>
							<h2>{{ $article->title }}</h2>
						</header>
							{!! $article->content !!}
					</article>
				</div>
			</div>
		</div>
	</section>
@endsection