<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>IMC</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="content">

    <div id="logo">
    </div>
    <div id="calculadora">
        <form name="calc" method="get" enctype="multipart/form-data" action="resultado.php" class="form">
        	
            <fieldset class="f">
            	
                <label>
                <span class="span">Seu Peso</span>
                <br/>
                <input type="text" name="peso" class="in" />
                </label>
                
                <br />
                <label>
                <span class="span">Sua Altura (Use Pontuação: 1.99 Em METROS)</span>
                <br/>
                <input type="text" name="altura" class="in"/>
                </label>
                
                <input type="submit" name="envia" value="IMC!" class="btn">
            
            </fieldset>
        
        </form>
    </div>
</div>
    
</body>
</html>