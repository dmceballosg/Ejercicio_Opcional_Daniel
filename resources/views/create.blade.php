
<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>

    @if(session('mensaje'))
    <div class="alert alert-success"> {{session('mensaje')}}</div>
    @endif

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> <strong>Registro de vehículos</strong> </div>
                        <div class="card-body">
                            <form name="my-form" action="{{ url('vehiculos') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre completo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombre" class="form-control" name="nombre">
                                        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}  
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cedula" class="col-md-4 col-form-label text-md-right">Cédula</label>
                                    <div class="col-md-6">
                                        <input type="text" id="cedula" class="form-control" name="cedula">
                                        {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}  
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="placa" class="col-md-4 col-form-label text-md-right">Placa</label>
                                    <div class="col-md-6">
                                        <input type="text" id="placa" class="form-control" name="placa">
                                        {!! $errors->first('placa', '<p class="help-block">:message</p>') !!}  
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>
                                    <div class="col-md-6">
                                        <select name="marca" id="marca" class="form-control">
                                            <option value="toyota">Toyota</option>
                                            <option value="mazda">Mazda</option>
                                            <option value="chevrolet">Chevrolet</option>
                                        </select>
                                        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!} 
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>
</html>


