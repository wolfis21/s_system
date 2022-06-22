<h4 align="right"><a href="?c=Usuario&a=Index">Cerrar Sesion</a></h4>

<h1 class="page-header">
    <div class="well well-sm text-right">
        <p align="left"> Seccion de Clientes </p>
    </div>
</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->idCliente; ?></td>
                <td><?php echo $r->idCedula; ?></td>
                <td><?php echo $r->Nombre; ?></td>
                <td><?php echo $r->Apellido; ?></td>
                <td><?php echo $r->Direccion; ?></td>
                <td><?php echo $r->Telefono;  ?></td>
                <td><?php echo $r->Correo; ?></td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Cliente&a=Eliminar2&id=<?php echo $r->idCliente; ?>">Eliminar</a>
                </td>
                <!--agregar un btn que te direccione a agregar el equipo de una sola vez (implementar) -->
            </tr>
        <?php endforeach; ?>
    </tbody>
    <div class="well well-sm text-right">
        <div align="right">
            <a href="javascript: history.go(-1)" class="btn btn-primary">Volver atrás</a>
        </div>
    </div>
</table>
<br>