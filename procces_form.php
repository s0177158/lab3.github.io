<?php


$user = 'u67293';
$pass = '3126725';
$db = new PDO(
    'mysql:host=localhost;dbname=forma_zapisi2',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);





$sql = "CREATE TRIGGER trg_insert_user_language
AFTER INSERT ON users
FOR EACH ROW
BEGIN
    INSERT INTO forma_zapisi2 (user_id) VALUES (NEW.id_name);
END";
$stmt = $db->prepare($sql);


?>