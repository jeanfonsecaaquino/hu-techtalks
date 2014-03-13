<?php

$db = new SQLiteDatabase('db.sqlite');
$db->queryExec('insert registry (name, type, rg ,birthdate, enterprise_name, city, state, email, phone) value ("Robson", 0, "21121212", "1988-02-05", "HU", "Rio de Janeiro", "RJ", "robsonvnt@gmail.com", "3232323");');
echo "test";