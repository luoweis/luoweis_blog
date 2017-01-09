<!DOCTYPE HTML>
<html>
<head>
	<title>Luoweis</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/main.css">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/main/js/jquery-1.8.3.min.js"></script>
	<script src="/main/css/5grid/init.js?use=mobile,desktop,1200px,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
	<noscript>
		<link rel="stylesheet" href="/main/css/5grid/core.css" />
		<link rel="stylesheet" href="/main/css/5grid/core-desktop.css" />
		<link rel="stylesheet" href="/main/css/5grid/core-1200px.css" />
		<link rel="stylesheet" href="/main/css/5grid/core-noscript.css" />
		<link rel="stylesheet" href="/main/css/style.css" />
		<link rel="stylesheet" href="/main/css/style-desktop.css" />
		<link rel="stylesheet" href="/main/css/style-1200px.css" />

	</noscript>
</head>
<body class="left-sidebar">


<div id="wrapper" style="height:120%">

	<!-- Content -->
	<div id="content" class="mobileUI-main-content">
		<div id="content-inner">
			<!-- Post -->
			@foreach($articles as $article)
			<article class="is-post is-post-excerpt">
				<header>
					<div class="main_title"><a href="{{ url('/read',$article->id) }}">{{ $article->title }}</a></div>
					<span class="byline">{{ $article->intro }}</span>
				</header>
				<div class="info">
					<span class="date"><span class="month">Jan<span>uary</span></span> <span class="day">14</span><span class="year">, 2013</span></span>
					<ul class="stats">
						<li><a href="#" class="link-icon24 link-icon24-1">16</a></li>
						<li><a href="#" class="link-icon24 link-icon24-2">32</a></li>
						<li><a href="#" class="link-icon24 link-icon24-3">64</a></li>
						<li><a href="#" class="link-icon24 link-icon24-4">128</a></li>
					</ul>
				</div>
				<!--如果添加图像
				<a href="#" class="image image-full"><img src="/main/images/n33-robot-invader.jpg" alt="" /></a>
				-->
				<div class="main_content">
					{!! $article->content !!}
				</div>
			</article>
			@endforeach
			<!-- Pager -->
			<div class="pager main_page">
				<!--<a href="#" class="button previous">Previous Page</a>-->
				<div class="pages">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<span>&hellip;</span>
					<a href="#">20</a>
				</div>
				<a href="#" class="button next">Next Page</a>
			</div>

		</div>
	</div>

	<!-- Sidebar -->
	<div id="sidebar">

		<!-- Logo -->
		<div id="logo">
			<h1 class="mobileUI-site-name">Luoweis</h1>
		</div>
		<div class="username">
			<div class="username_left">
				<strong>{{ Auth::user()->name }}</strong>
			</div>
			<div class="username_right">
				<a href="{{ url('/logout') }}"
				   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					Logout
				</a>

				<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</div>
		</div>
		<!-- Search -->
		<section class="is-search is-first">
			<form method="post" action="#">
				<input type="text" class="text" name="search" placeholder="Search" />
			</form>
		</section>
		<!-- 可伸展的导航栏 -->
		<div>
			<div class="container-fluid">
				<div class="accordion tags" id="accordion2">
					<div class="accordion-group tags_div">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								Linux
							</a>
						</div>
						<div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
							<div class="accordion-inner">
								<ul>
									<li><a href="#">tag1</a></li>
									<li><a href="#">tag1</a></li>
									<li><a href="#">tag1</a></li>
									<li><a href="#">tag1</a></li>
									<li><a href="#">tag1</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-group tags_div">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								Part II
							</a>
						</div>
						<div id="collapseTwo" class="accordion-body collapse">
							<div class="accordion-inner">
								tag1
							</div>
						</div>
					</div>
					<div class="accordion-group tags_div">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								Part  III
							</a>
						</div>
						<div id="collapseThree" class="accordion-body collapse">
							<div class="accordion-inner">
								tag1
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Recent Posts -->
		<section class="is-recent-posts ">
			<header>
				<h2>最新发布</h2>
			</header>
			<ul>
				@foreach($articles as $article)
					<li><a href="{{url('/read',$article->id)}}">{{$article->title}}</a></li>
				@endforeach


			</ul>
		</section>
		<!-- Copyright -->
		<div id="copyright">
			<p>
				&copy; 2017 Power by larave author by luoweis.
			</p>
		</div>

	</div>

</div>
</body>
</html>