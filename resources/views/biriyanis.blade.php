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
		<p class=" text-gray-700">{{$price}}tk</p>
		<p class=" text-gray-700">{{$type}}</p>

		@if ($price > 550)
			<p class="text-red-400 font-bold ">This biriyani is expensive</p>
		@elseif ($price < 250)
			<p class="text-green-400 font-bold ">This biriyani is cheap and affordable</p>
		@else
			<p class="text-blue-400 font-bold ">This biriyani is normally priced</p>
		@endif

		@unless ($type == 'Kacchi')
			<p class="text-red-600 font-bold text-3xl">where kacchi</p>
		@endunless
	</body>
</html>
