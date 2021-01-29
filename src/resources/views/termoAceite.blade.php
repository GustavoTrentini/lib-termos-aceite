<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Termos de Aceite / {{env('APP_NAME')}}</title>
</head>

<body>
    <form action="{{route('termo.accepted', ['id' => $termo->id ])}}" method="post">
        @csrf
        <div class="container">
            <div class="row my-2 mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="{{env('APP_LOGO', false) ? asset(env('APP_LOGO')) : 'https://applysystem.com.br/site/wp-content/uploads/2019/03/logo-apply-site-seguro.png' }}" alt="{{env('APP_NAME')}}" width="200">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="my-textarea" class="h3">Termos de aceite <small style="font-size: 12px;">(V{{$termo->version}})</small></label>
                        <textarea id="my-textarea" class="form-control" name="" disabled rows="15">{{$termo->termo}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required name="aceite" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Declaro que li e concordo com os termos acima.
                        </label>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <button class="btn btn-success btn-lg" type="submit">Aceitar termos de uso</button>
            </div>
        </div>
    </form>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
