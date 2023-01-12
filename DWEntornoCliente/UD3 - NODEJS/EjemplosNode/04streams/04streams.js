"use strict"

let fs = require("fs"),
    readStream = fs.createReadStream("nombres.txt"),
    writeStream = fs.createWriteStream("nombres_copia.txt");

readStream.pipe(writeStream);

readStream.on("data", function (chunck) {
    console.log(
        "He leído: ",
        chunck.length,
        "caracteres"
    )
});