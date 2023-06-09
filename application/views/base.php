
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD CI3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>CRUD en CI3</h2>
            </div>

            <div class="mb-5">
                <?php echo form_open('Labase/agregar', ['id' => 'form-persona']); ?>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="">Apellido Paterno</label>
                            <input type="text" name="ap" class="form-control" required placeholder="Apellido Paterno" id="ap">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="">Apellido Materno</label>
                            <input type="text" name="am" class="form-control" required placeholder="Apellido Materno" id="am">
                        </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="">Fecha de Nacimeinto</label>
                            <input type="date" name="fn" class="form-control" required id="fn">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="">Genero</label>
                            <input type="text" name="genero" class="form-control" required placeholder="F o M" id="genero">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-plug">Guardar</button>
                    </div>
                <?php echo form_close(); ?>
            </div>

            <div class="row">
                <div class="card col-12">
                    <div class="card-header">
                        <h4>Tabla de Personas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha de Nacieinto</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $count = 0;
                                    foreach($personas as $persona){
                                        echo'
                                            <tr>
                                                <td>'.++$count.'</td>
                                                <td>'.$persona->nombre.' '.$persona->ap.' '.$persona->am.'</td>
                                                <td>'.$persona->fn.'</td>
                                                <td>'.$persona->genero.'</td>
                                                <td><button type="button" class="btn btn-warning text=white" onclick"llenar_datos('.$persona->id.',`'.$persona->nombre.'`, `'.$persona->ap.'`, `'.$persona->am.'`, `'.$persona->fn.'`,`'.$persona->genero.'`)"</td>
                                                <td><a href="'.base_url('Labase/eliminar/'.$persona->id).'" type="button" class="btn btn danger">Eliminar</a></td>
                                            </tr
                                        '; 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let url = "<?php echo base_url('Labase/editar'); ?>";
            const llenar_datos = (id, nombre, ap, am, fn, genero) => {
                let path = url+"/"+id;
                document.getElementById('form_persona').setAttribute('action', path);
                document.getElementById('nombre').value=nombre;
                document.getElementById('ap').value=ap;
                document.getElementById('am').value=am;
                document.getElementById('fn').value=fn;
                document.getElementById('genero').value=ggenero;
            }
        </script>
    </body>
</html>