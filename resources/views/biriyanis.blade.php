<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
<style>
body {
font-family: 'Nunito', Arial;
}
</style>
    </head>

	 <body class="antialiased text-center">

		<h1 class=" my-24 text-gray-700 text-4xl">Biriyanis</h1>
			
		<ul>

			@foreach($biriyanis as $biriyani)
				<li>
					{{$loop->index + 1}}: {{ $biriyani['name'] }} - {{$biriyani['price']}} - {{$biriyani['customer_review']}}
				</li>
			@endforeach
		</ul>

	</body>
</html>
