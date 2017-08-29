var socket 	= require('socket.io'),
	express	= require('express'),
	http 	= require('http'),
	logger 	= require('winston');

logger.remove(logger.transports.Console);
logger.add(logger.transports.Console, { colorize: true, timestamp: true});
logger.info('SocketIO > listening on port ');


var app = express();
var http_server = http.createServer(app).listen(3001);

function emitNewOrder(http_server){
	var io = socket.listen( http_server );
	io.sockets.on('connection',function(socket){

		socket.on("new_order",function(data){
			console.log(data);
			io.emit("new_order",data)
		})
	});
}


emitNewOrder(http_server);

app.get('/', function (req, res) {
	console.log("req")
  res.send('hello world')
})