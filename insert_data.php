<?php
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "Blog"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO users (email, password, bio, gender, age, firstname, lastname) VALUES ?";
  var values = [
    ['John1@gm.com', john12, my name is john, M, 22, john, miller],
    ['Peter1@gm.com', peter12, me peter gerory, M, 23, peter, gerory]
  ];
  con.query(sql, [values], function (err, result) {
    if (err) throw err;
    console.log("Number of records inserted: " + result.affectedRows);
  });
});
?>