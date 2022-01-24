const express = require("express");
const app = express();

app.use(express.static(__dirname + "/threeJsOrelsanDisk/index.html"));

app.listen(9999, () => console.log("Visit http://127.0.0.1:9999"));
