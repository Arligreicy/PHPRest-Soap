<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visita</title>
</head>
<body>
    <h1>Agendar Visita</h1>
    <br>
    <form action="#" method="post">
        <label>Data da Visita</label>
        <input type="date" name="data">
        <br><br>
        <label>Cliente</label>
        <select name="cliente">
            <?php
                foreach($cliente as $dado)
                {
                    echo "<option value='{$dado->idcliente}'>{$dado->nome}</option>";
                }
            ?>
        </select>
        <br><br>
        <label>Assistência</label>
        <select name="assistencia">
            <?php
                foreach($assistencia as $dado)
                {
                    echo "<option value='{$dado->idassistencia}'>{$dado->nome}</option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Cadastrar">
</body>
</html>