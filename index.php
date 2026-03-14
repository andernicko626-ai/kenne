<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    body{
       font-family: sans-serif; 
    }
    button{
        padding: 10px;
        margin-left: 300px;
        align-items: center;
        background-color: blueviolet;
        border-radius: 30px;
    }
    button:hover{
        background:linear-gradient(135deg,#4a0990,#5d0bb9);
  transform:translateY(-2px);
    }
    h1{
        text-align: center;
        align-items: center;
        font-size: 40px;
    }
    fieldset{
       border: 300px;
    }
    .form-box{background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 6px 16px rgba(0,0,0,0.1);
    width:350px;}
    
    input{width:100%;
    padding:10px;
    margin:8px 0;
    border:1px solid #ccc;
    border-radius:6px;}
    .envoyer{width:100%;
    padding:12px;
    background:#5d0bb9;
    color:#fff;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
    </style>
   <u><h1>Gestion de classe</h1></u> 
    <button onclick="openModal();">crees classe</button>
    <DIAlog id="modale" >
    <div class="form-box">
    <H2>creation de la classe</H2>
    <form action="traitement.php" method="post">
       NOM DE LA CLASSE: <input type="text" name="nom" placeholder="entrez le nom de la classe"><br>
       CODE DE LA CLASSE : <input type="text" name="code" placeholder="entrez le code de la classe"><br>
       CYCLE DE LA CLASSE : <input type="number" name="cycle"><br>
       SECTION : <select name="section" id=""><br>
        <option value="1">Francophone</option>
        <option value="2">Anglophone</option>
       </select>
      <input type="submit" class="envoyer" value="crees une classe" name="envoyer">
    </form>
    </div>
</DIAlog>
<script>
    function openModal(){
        var d = document.getElementById("modale");
        d.showModal();

    }
</script>
</body>
</html>