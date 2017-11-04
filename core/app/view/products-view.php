<?php if(isset($_GET["opt"]) && $_GET["opt"] == "all"):
$cats = ProductData::getAll();
?>    
     <section class="content-header">
      <h1>
        Productos
      </h1>
      <a href="./?view=products&opt=new" class="btn btn-default">Nuevo Producto</a>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Productos</h3>

        </div>
        <div class="">
        
        <?php if(count($cats)>0):?>
        <table class="table table-bordered table-hover">
            <thead>
                <th>Codigo</th>
                <th>Nombre</th> 
                <th>Unidad</th> 
                <th>Precio Entrada</th> 
                <th>Precio Salida</th> 
                <th>Categoria</th> 
                <th></th> 
            </thead>
            <?php foreach($cats as $ca):?>
            <tr>
                <td><?=$ca->code;?></td>
                <td><?=$ca->name;?></td>
                <td><?=$ca->unit;?></td>
                <td>$ <?=$ca->price_in;?></td>
                <td>$ <?=$ca->price_out;?></td>
                <td><?php
                    if($ca->category_id!=null){
                        $catx = CategoryData::getById($ca->category_id);
                        echo $catx->name;
                    }else{
                        echo "[Sin categoria]";
                    }
                    ?>
               </td>
                <td>
                    <a href="./?view=products&opt=edit&id=<?=$ca->id;?>" class="btn btn-warning btn-xs">Editar</a>
                    <a href="./?action=products&opt=del&id=<?=$ca->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else:?>
           <div class="box-body">
            <p class="alert alert-warning">No hay productos!</p>
            </div>
        <?php endif;?>
        </div>
      </div>

    </section>
    
    <?php elseif(isset($_GET["opt"]) && $_GET["opt"] == "new"):?>

    <section class="content-header">
      <h1>
        Nuevo Producto
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-8">
        
             <form method="post" action="./?action=products&opt=add">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Codigo</label>
                    <input type="text" name="code" required class="form-control" placeholder="Codigo">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="name" required class="form-control" placeholder="Nombre">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <textarea name="description" class="form-control" placeholder="Descripcion"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio de entrada</label>
                    <input type="text" name="price_in" required class="form-control" placeholder="Precio de entrada">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio de salida</label>
                    <input type="text" name="price_out" required class="form-control" placeholder="Precio de salida">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select name="category_id" class="form-control">
                        <option value="">--  SELECCIONE  --</option>
                        <?php foreach(CategoryData::getAll() as $cat): ?>
                        <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
                        <?php endforeach; ?>
                    </select>  
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Unidad</label>
                    <input type="text" name="unit" class="form-control" placeholder="Unidad">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Minima en inventario</label>
                    <input type="text" name="inventary_min" required class="form-control" placeholder="Minima en inventario">
                  </div>

  
  <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
        </div>
        </div>
    </section>
    
<?php elseif(isset($_GET["opt"]) && $_GET["opt"] == "edit"):
$product = ProductData::getById($_GET["id"]);
?>
    <section class="content-header">
      <h1>
        Editar Producto
      </h1>
    </section>

    <!-- Main content -->
       <section class="content">
        <div class="row">
        <div class="col-md-8">
        
             <form method="post" action="./?action=products&opt=upd">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Codigo</label>
                    <input type="text" name="code" value="<?php echo $product->code; ?>" required class="form-control" placeholder="Codigo">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="name" value="<?php echo $product->name; ?>" required class="form-control" placeholder="Nombre">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <textarea name="description" class="form-control" placeholder="Descripcion"><?php echo $product->description; ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio de entrada</label>
                    <input type="text" name="price_in" value="<?php echo $product->price_in; ?>" required class="form-control" placeholder="Precio de entrada">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio de salida</label>
                    <input type="text" name="price_out" value="<?php echo $product->price_out; ?>" required class="form-control" placeholder="Precio de salida">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select name="category_id" class="form-control">
                        <option value="">--  SELECCIONE  --</option>
                        <?php foreach(CategoryData::getAll() as $cat): ?>
                        <option value="<?php echo $cat->id; ?>" <?php if($cat->id==$product->category_id){ echo "selected"; }?>><?php echo $cat->name; ?></option>
                        <?php endforeach; ?>
                    </select>  
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Unidad</label>
                    <input type="text" name="unit" value="<?php echo $product->unit; ?>" class="form-control" placeholder="Unidad">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Minima en inventario</label>
                    <input type="text" name="inventary_min" value="<?php echo $product->inventary_min; ?>" required class="form-control" placeholder="Minima en inventario">
                  </div>

                 <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                  <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
        </div>
        </div>
    </section>
    
    <?php endif; ?>
    
   
  