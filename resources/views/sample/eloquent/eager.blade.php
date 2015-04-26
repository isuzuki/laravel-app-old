<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Laravel App</title>
</head>
<body>
	<div class="container">
		<div>
			<h3>Eloquent 単純なループで全取得</h3>
			<div>
				@foreach ($discography->all() as $item)
					<p>{{ $item->artist->name }}</p>
				@endforeach
			</div>
			<h3>Eloquent eagerローディングで全取得</h3>
			<div>
				@foreach ($discography->with('artist')->get() as $item)
					<p>{{ $item->artist->name }}</p>
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>
