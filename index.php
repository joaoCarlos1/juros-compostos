<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Simulador de juros compostos</title>

        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    </head>

    <body>
    <section class="container main-section">
        <div class="main-conteudo">
            <h1>Simulador De Juro Composto</h1>
            <p>Ferramenta simular juro composto com base em taxas genéricas</p>
            <form>
                <div class="form-group">
                    <label for="">Capital inical:</label>
                    <div><input id="inicial" type="number" ></div>
                </div>

                <div class="form-group">
                    <label for="">Aporte mensal:</label>
                    <div><input id="aporte" type="number" name=""/></div>
                </div>

                <div class="form-group">
                    <label for="">Taxa de juros:</label>
                    <div><input id="taxa" type="text" name="" /></div>
                </div>

                <div class="form-group">
                    <label for="">Tempo em meses:</label>
                    <div><input id="meses" type="number" name=""/></div>
                </div>

                <div class="form-group">
                    <button type="button" onclick="calcula()">Enviar</button>
                </div>
            </form>

            <div class="clear"></div>
        </div>

        <div class="resultado">
             <p>Resultado: <span id="resultado"></span></p>
        </div>


    </section>

    <script type="text/javascript" src="js/calcula-juros.js"></script>
    </body>
</html>
