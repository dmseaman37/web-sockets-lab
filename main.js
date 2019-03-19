let connection = new WebSocket('ws://localhost:8080');
connection.onopen = () => {
	console.log('connected from the frontend');

	// connection.send('hello');
};

connection.onerror = () => {
	console.log('failed to connect from the frontend');
};

connection.onmessage = (event) => {

};

document.querySelector('div').addEventListener('input', (event) => {
	event.preventDefault();

	let text = document.querySelector('div').value;
	connection.send(text);
});