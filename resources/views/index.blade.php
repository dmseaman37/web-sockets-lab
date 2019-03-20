<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Web Socket Demo</title>
</head>
<body>
	<div contenteditable="true">
		Test
	</div>
	<script>
		let connection = new WebSocket('wss://dseaman-ws-server.herokuapp.com/');
		connection.onopen = () => {
			console.log('connected from the frontend');
		};

		connection.onerror = () => {
			console.log('failed to connect from the frontend');
		};

		connection.onmessage = (event) => {
			console.log(event);

			let div = document.querySelector('div');
			div.innerText = event.data;
		};

		document.querySelector('div').addEventListener('input', (event) => {
			event.preventDefault();

			let text = document.querySelector('div').innerText;
			console.log(text);
			connection.send(text);
		});
	</script>
</body>
</html>