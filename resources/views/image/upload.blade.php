<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Laravel App</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/image.js"></script>
</head>
<body>
	<div class="container">
		<div>
			<h3>画像アップロード</h3>
			<form action="/image/upload" method="post" enctype="multipart/form-data">
				<div class="img-input">
					<input type="file" name="image">
					<img src="/img/uploaded/uploaded.png" class="img-view">
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" value="アップロード">
			</form>
		</div>
	</div>
</body>
</html>
