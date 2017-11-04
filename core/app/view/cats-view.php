<?php if(isset($_GET["opt"]) && $_GET["opt"] == "all"):
$cats = CategoryData::getAll();
?>    
     <section class="content-header">
      <h1>
        Categorias
      </h1>
      <a href="./?view=cats&opt=new" class="btn btn-default">Nueva Categoria</a>
      
      
      <!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
      -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Categorias</h3>

        </div>
        <div class="">
        
        <?php if(count($cats)>0):?>
        <table class="table table-bordered table-hover">
            <thead>
                <th>Nombre</th>
                <th></th> 
            </thead>
            <?php foreach($cats as $ca):?>
            <tr>
                <td><?=$ca->name;?></td>
                <td>
                    <a href="./?view=cats&opt=edit&id=<?=$ca->id;?>" class="btn btn-warning btn-xs">Editar</a>
                    <a href="./?action=cats&opt=del&id=<?=$ca->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else:?>
           <div class="box-body">
            <p class="alert alert-warning">No hay categorias!</p>
            </div>
        <?php endif;?>
        </div>
      </div>

    </section>
    <?php elseif(isset($_GET["opt"]) && $_GET["opt"] == "new"):?>

    <section class="content-header">
      <h1>
        Nueva Categorias
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

 <form method="post" action="./?action=cats&opt=add">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

    </section>
    
<?php elseif(isset($_GET["opt"]) && $_GET["opt"] == "edit"):
$cat = CategoryData::getById($_GET["id"]);
?>
    <section class="content-header">
      <h1>
        Editar Categorias
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

 <form method="post" action="./?action=cats&opt=upd">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" required value="<?=$cat->name;?>" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <input type="hidden" name="id" value="<?=$cat->id; ?>">
  <button type="submit" class="btn btn-success">Actualizar</button>
</form>

    </section>
    
    <?php endif; ?>
    
   
  