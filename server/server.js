"use strict"

var http = require('http');

var server = http.createServer().listen(8080);

server.on('request', function(request, response) {
	response.writeHead(200);
	response.write('Hello from Node.js');
	response.end();
});

server.on('listening', function() {
	console.log('Listen: 8080...');
});

server.on('request', function(request, response) {
	console.log('Request:', request.method);
});