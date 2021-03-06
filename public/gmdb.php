<!DOCTYPE html>
<html>
	<head>	
		<title>GMDb - Movies, TV and celebrities - GMDb</title>
		<link rel="stylesheet" type="text/css" href="/css/gmdb_css.css">
	</head>

	<body>
		<div class="header_bar">
			<span>
				<a href="/gmdb.php"><button class="header_bar_button">GMDb</button></a>
				<form method="POST" action="/gmdb.php" class="header_bar_form">
					<input type="text" name="search" class="header_bar_search" placeholder="Search for Movies, TV Shows, Celebrities, etc...">
					<input type="submit" name="submit" class="header_bar_submit" value="Search">
				</form>
				<div class="header_bar_login">
					<p>Sign In</p>
				</div>
			</span>
		</div>
		<div class="nav_bar">
			<span>
				<a href="http://www.imdb.com/movies-in-theaters/?ref_=nv_tp_inth_1" target="_blank"><button class="nav_bar_button" type="button" name="movies">Movies</button></a>
				<a href="http://www.imdb.com/chart/toptv/?ref_=nv_tp_tv250_2" target="_blank"><button class="nav_bar_button" type="button" name="tv">TV</button></a>
				<a href="http://www.imdb.com/showtimes/?ref_=nv_tp_sh_3" target="_blank"><button class="nav_bar_button" type="button" name="showtimes">Showtimes</button></a>
				<a href="http://www.imdb.com/search/name?gender=male,female&ref_=nv_tp_cel_1" target="_blank"><button class="nav_bar_button" type="button" name="celebs">Celebs</button></a>
				<a href="http://www.imdb.com/awards-central/?ref_=nv_tp_awrd_2" target="_blank"><button class="nav_bar_button" type="button" name="events">Events</button></a>
				<a href="http://www.imdb.com/gallery/rg784964352?ref_=nv_tp_ph_3" target="_blank"><button class="nav_bar_button" type="button" name="photos">Photos</button></a>
				<a href="http://www.imdb.com/news/top?ref_=nv_tp_nw_1" target="_blank"><button class="nav_bar_button" type="button" name="news">News</button></a>
				<a href="http://www.imdb.com/boards/?ref_=nv_tp_bd_2" target="_blank"><button class="nav_bar_button" type="button" name="community">Community</button></a>
				<a href="http://www.imdb.com/list/watchlist?ref_=nv_wl_all_0" target="_blank"><button class="nav_bar_button" type="button" name="watchlist">Watchlist</button></a>
			</span>
		</div>
		<div class="top_five">
			<span>
				<a href="http://www.imdb.com/title/tt0080684/?ref_=fn_al_tt_1" target="_blank"><img src="empire_strikes_back_style_a.jpg" height="300px"></a>
				<a href="http://www.imdb.com/title/tt2488496/?ref_=nv_sr_1" target="_blank"><img src="star-wars-force-awakens-official-poster.jpg" height="300px"></a>
				<a href="http://www.imdb.com/title/tt3659388/?ref_=nv_sr_1" target="_blank"><img src="martian2015.jpg" height="300px"></a>
				<a href="http://www.imdb.com/title/tt0082971/?ref_=nv_sr_1" target="_blank"><img src="Raiders_of_the_Lost_Ark_orignial_poster.jpg" height="300px"></a>
				<a href="http://www.imdb.com/title/tt0110912/?ref_=nv_sr_1" target="_blank"><img src="pulpfaug08.jpg" height="300px"></a>
			</span>
		</div>
	</body>
</html>