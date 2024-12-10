<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <style>
        form{
    display: block;
    width: 450px;
    margin:auto;
    background-color: rgb(107, 104, 104);
    padding: 40px;
}
        label, input{
            padding: 5px; 
            margin: auto;
            width: 100%;
            outline: none;
        }
    </style>   
    <!--padding aumenta o tamanho do campo-->
    <!--width apresenta o tamanho do caderno-->
    <form action method="post">
        <h1>Formulário</h1>
        <label>Aluno: </label>
        <input type="text" name="Aluno" id="Aluno" required="required">
        <label>Nº da Chamada: </label>
        <input type="number" name="nº da chamada" id="nº da chamada" required="required">
        <label>RM: </label>
        <input type="number" name="RM" id="RM" required="required"><br>
        <label>Patrimônio da Máquina: </label>
        <input type="number" name="Patrimônio da Máquina" id="Patrimõnio da Máquina" required="required">
        <label>Nº da Máquina: </label>
        <input type="number" name="nº da máquina" id="nº da máquina" required="required">
        <label>ST (Service Tag): </label>
        <input type="number" name="Service Tag" id="Service Tag" required="required">
        <label>Foto da Máquina: </label>
        <input type="file" name="Foto da Máquina" id="Foto da Máquina" required="required">

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
</body>
</html>