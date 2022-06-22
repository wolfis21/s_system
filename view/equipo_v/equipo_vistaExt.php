
<h4 align="right"><a href="?c=Usuario&a=Index">Cerrar Sesion</a></h4>

<h1 class="page-header">
<div class="well well-sm text-right">
    <p align="left"> Registro de Equipos </p>
    </div>
</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Serial / Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Diagnostico</th>
            <th style="width:120px;">Fecha de ingreso</th>
            <th style="width:60px;">ID Cliente</th>
            <th style="width:60px;">Cliente</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idCodigo?></td>
            <td><?php echo $r->nombre_e; ?></td>
            <td><?php echo $r->descripcion; ?></td>
            <td><?php echo $r->prev_diag; ?></td>
            <td><?php echo $r->fecha_ingre; ?></td>
            <td><?php echo $r->idCedula; ?></td>
            <td><?php echo $r->Nombre." ".$r->Apellido; ?></td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Equipo&a=Eliminar2&idEquipo=<?php echo $r->idEquipo; ?>">Eliminar</a>
            </td> 

        </tr>
    <?php endforeach; ?>
    </tbody>
    <div class="well well-sm text-right">
        <div align="right">
            <a href="javascript: history.go(-1)" class="btn btn-primary">Volver atrás</a>
        </div>
    </div>
</table> 