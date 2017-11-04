<?php if(isset($_GET["opt"]) && $_GET["opt"] == "all"):
$cats = ClientData::getAll();
?>    
    
                
        <section class="content">
<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="./?view=clients&opt=new" class="btn btn-default"><i class='fa fa-smile-o'></i> Nuevo Cliente</a>
<div class="btn-group pull-right">
</div>
</div>
		<h1>Directorio de Clientes</h1>
<br>
		<div class="box box-primary">
<div class="box-body">
            <?php if(count($cats)>0):?>
			<table class="table table-bordered datatable table-hover">
			<thead>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Credito</th>
			<th>Limite</th>
			<th></th>
			</thead>
                <?php foreach($cats as $ca):?>
							<tr>
				<td><?=$ca->code;?></td>
				<td><?=$ca->name;?></td>
				<td><?=$ca->lastname;?></td>
				<td><?=$ca->address;?></td>
				<td><?=$ca->email;?></td>
				<td><?=$ca->phone;?></td>
				<td><?=$ca->credit;?></td>
				<td><?=$ca->creditlim;?></td>
				<td style="width:50px;">
				<a href="./?view=clients&opt=edit&id=<?=$ca->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="./?action=clients&opt=del&id=<?=$ca->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
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
			

	</div>
</div>
</section>
    
    
    
    
    
     <section class="content-header">
      <h1>
        Directorio de Clientes
      </h1>
      <a href="./?view=client&opt=new" class="btn btn-default">Nuevo Cliente</a>
      
    </section>


    <?php elseif(isset($_GET["opt"]) && $_GET["opt"] == "new"):?>

   
   <section class="content">
<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Cliente</h1>
	<br>
<div class="box box-primary"><br>
		<form class="form-horizontal" method="post" id="addproduct" action="./?action=clients&opt=add" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-md-6">
      <input type="text" name="code" class="form-control" id="no" placeholder="Codigo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control" id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Activar Credito</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="credit">
    </label>
  </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Limite de credito</label>
    <div class="col-md-6">
      <input type="text" name="creditlim" class="form-control" id="" placeholder="Limite de credito">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Activar Acceso</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_active">
    </label>
  </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Password</label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" id="phone1" placeholder="Password">
    </div>
    </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>
</div>
	</div>
</div>
</section>      

   
   
   
   
   
   
   
   
   
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
    
   
  