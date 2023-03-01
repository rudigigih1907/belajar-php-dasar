<?php
// Bernilai true jika kedua nilai true
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);


// Bernilai true jika kedua dan salah satu bernilai true
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

// Bernilai false jika kedua nilai true atau false.
var_dump(true xor false);
var_dump(true xor true);
var_dump(false xor false);