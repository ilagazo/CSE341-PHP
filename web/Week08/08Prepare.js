// Accessing libraries and local css file
const http = require("http");
var url = require("url");

// Connect to server and listen for specified port #
var server = http.createServer(onRequest);
server.listen(8888);

// Debug code
console.log("Sever is now listening");

const homeURL = "/home";
const dataURL = "/getData";
const mathURL = "/multiply";
var jsonObj = { name: "Ivanro Lagazo", class: "cs341" };

// Callback function to handle URL requests and what is sent
function onRequest(req, res) {
  console.log("Recieved a request for: " + req.url);
  var parsedURL = url.parse(req.url, true);
  if (parsedURL.pathname === homeURL) {
    res.writeHead(200, { "Content-Type": "text/html" });
    res.write("<h1>Welcome to the Home Page!</h1>");
  } else if (parsedURL.pathname === dataURL) {
    res.writeHead(200, { "Content-Type": "application/json" });
    res.end(JSON.stringify(jsonObj));
  } else if (parsedURL.pathname === mathURL) {
    var qData = parsedURL.query;
    var firstNum = qData.multiply;
    var secNum = qData.by;
    var total = firstNum * secNum;

    // IF statement to check if query is not set
    if(firstNum || secNum) {
        firstNum, secNum = 0;
    } 

    res.writeHead(200, { "Content-Type": "text/html" });
    res.write("<h1>Welcome to the Multiply Function!</h1>");
    res.write("Multiply " + firstNum + " by " + secNum + ". Total is: " + total + "<br><br>");
    res.write("<b>Change what you multiply by adding \"?multiply=InsertNumberHere&by=InsertNumberHere\" at the end of the URL.</b>");
  } else {
    res.writeHead(404, { "Content-Type": "text/html" });
    res.write("<h1>Error 404: Page Not Found</h1>");
  }

  // Always End responses with end
  res.end();
}
