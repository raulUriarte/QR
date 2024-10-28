<?php
$host = "sqlsrv:server=siga_nube.mssql.somee.com;database=siga_nube";
$user = "SQLrauluriate_hbc";
$pass = "10635015ch1t0";

try {
    $pdo = new PDO($host, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtén el código de barras del parámetro GET
    $codigo_barra = isset($_GET['codigo_barra']) ? $_GET['codigo_barra'] : '';

    // Consulta para obtener el equipo por su código de barras
    $query = "SELECT * FROM equipos WHERE codigo_barra = :codigo_barra";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['codigo_barra' => $codigo_barra]);
    $equipo = $stmt->fetch(PDO::FETCH_ASSOC);

    // Retorna los datos en formato JSON
    echo json_encode($equipo);
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
