

let http = require("http").createServer(webServer),
    path = require("path"),
    fs = require("fs"),
    url = require("url"),
    urls = [
        {
            id: 1,
            route: "",
            output: "assets/index.html",
        },
        {
            id: 2,
            route: 'acerca',
            output: "assets/acerca.html",
        },
        {
            id: 3,
            route: 'contacto',
            output: "assets/contacto.html",
        }
    ]

function webServer(req, res) {
    let pathURL = path.basename(req.url),
        id = url.parse(req.url, true).query.id

    console.log("path: " + pathURL, " id: "+ id)

    urls.forEach(function (pos) {
        if (pos.route == pathURL || pos.id == id) {
            res.writeHead(200, {
                "Content-Type": "text/html"
            })
            fs.readFile(pos.output, readFile)
        }
    });
 
    if (!res.finished) {
        res.writeHead(404, {
            "Content-Type": "text/html"
        })
        fs.readFile("assets/error.html", readFile)
    }

    function readFile(err, data) {
        if (err) throw err
        res.end(data);
    }

}

http.listen(3000)

console.log("Servidor corriendo en http://localhost:3000/")

