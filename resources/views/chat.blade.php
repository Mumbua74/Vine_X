<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Chat Module</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">

		<style>
			.list-group{
				overflow-y: scroll;
				height: 200px; 
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row" id="app">
				<div class="offset-2 col-8">
					<li class="list-group-item active">Chat Page</li>
					<ul class="list-group" v-chat-scroll>
					<message
					v-for = "value in chat.message"
					:key = value.index
					color = 'warning'
					>
						@{{ value }}
					</message>

					
				</ul>	
				<input type="text" class="form-control" placeholder="Type your question here..." v-model ='message' @keyup.enter='send'>				
				</div>
				
				
			</div>
		</div>
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html> 