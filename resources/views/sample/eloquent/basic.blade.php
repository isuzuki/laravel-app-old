<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Laravel App</title>
</head>
<body>
	<div class="container">
		<div>
			<h3>Eloquent 単純なループで関連データの取得</h3>
			<div>
				<p>artist名 : {{ $artist->name}}</p>
				<p>discography数 : {{ $artist->discographies->count() }}</p>
			</div>
			<div>
				<h4>artistに紐づくdiscography取得</h4>
				@foreach ($artist->discographies as $discography)
					<p>discography名 : {{ $discography->name }}</p>
				@endforeach
			</div>
			<div>
				<h4>discographyに紐づくmusic取得</h4>
				@foreach ($artist->discographies as $discography)
					<p>discography名 : {{ $discography->name }}</p>
					@foreach ($discography->musics as $music)
						<p>music名 : {{ $music->name }}</p>
					@endforeach
				@endforeach
			</div>
		</div>

		<div>
			<h3>artistから一度にmusicまで取得</h3>
			@foreach ($artist->musics as $music)
				<p>{{ $music->name }}</p>
			@endforeach
		</div>
	</div>
</body>
</html>
