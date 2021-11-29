<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Monitoramento estratégico do distanciamento social - Covid 19</title>
  </head>
  <body>
    <div class="p-4 text-center text-white bg-dark">
       <h1> Pós Graduação - Desenvolvimento Web <?=date('Y');?> </h1>
       <h2> O uso de padrões de projeto no gerenciamento de uma matriz de risco </h2>
    </div>
    <div class="container mt-4">
        <form id="formProcessamento">
            <div class="form-row">
                <label for="" class="col-form-label font-weight-bold">Processamento: </label>
                <div class="col">
                    <select class="form-control" id="selectProcessamento">
                        <option value=""> Selecione: </option>
                        <option value="processamentoEstrutural"> Modelo Estrutural </option>
                        <option value="processamentoPadroes"> Modelo Padrões de Projeto </option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div id="containerMatriz" class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <figure class="figure">
                    <img src="src/assets/img/matriz.jpeg" id="matriz" class="figure-img img-fluid rounded" alt="Matriz de Risco - Covid 19" title="Mariz de Risco - Covid 19">
                    <figcaption class="figure-caption text-right"> Imagem ilustrativa para monitoramento - Fonte: Prefeitura de Maringá</figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <div class="card border-secondary mb-3">
                    <div class="card-header text-center font-weight-bold">
                        Informe as taxas (%) para processamento <small> <b> (somente números) </b> </small>
                    </div>
                    <form id="processar" action="" method="POST">
                        <div class="card-body text-secondary">
                            <div class="form-group">
                                <label for="taxa_positividade">Digite a taxa de positividade: </label>
                                <input type="text" class="form-control" id="input_taxa_positividade" name="input_taxa_positividade" required>
                            </div>
                            <div class="form-group">
                                <label for="taxa_uti">Digite a taxa de ocupação de UTI: </label>
                                <input type="text" class="form-control" id="input_taxa_uti" name="input_taxa_uti" required>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <input type="submit" id="btn_processar" class="btn btn-dark" value="Processar">
                        </div>
                    </form>
                </div>
                <div class="card border-secondary mt-4">
                    <div class="card-header text-center font-weight-bold">
                        Resultados
                    </div>
                    <div class="card-body text-secondary">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="resultado_taxa_positividade">Taxa de positividade:</label>
                                <span id="resultado_taxa_positividade"> </span>
                            </div>
                            <div class="form-group">
                                <label for="resultado_taxa_de_uti">Taxa de ocupação de UTI:</label>
                                <span id="resultado_taxa_de_uti"> </span>
                            </div>
                            <div class="form-group">
                                <label for="resultado_risco">Risco:</label>
                                <span id="resultado_risco"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  </body>
    <script src="src/assets/js/script.js"></script>
</body>
</html>