<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 19:35:24
  from 'C:\xampp\htdocs\MVC\MVC\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeba5dca236a0_24193519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3592460c7db32413f902dccf59ab579dea9936' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\MVC\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1592343338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5eeba5dca236a0_24193519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <div id="CONTENIDO">
            <form method="post" action="usuarios.php">
                <div class="form-group">
                    <label for="User">User</label>
                    <input type="text" name="User" class="form-control" placeholder="Ingrese Usuario" required>
                </div>
                <div class="form-group">
                    <label for="Password">Pass</label>
                    <input type="password" class="form-control" name="Password" placeholder="Ingrese PIN" required>
                </div>
                <div class="form-group" align="center">
                    <input type="submit" value="Ingreso" class="btn btn-primary btn-lg" required>
                </div>

            </form>
        </div>
    </section>

    <footer align="center" id="PIE">
        <p> Jhonatan Oseida &copy; 2020 </p>
    </footer>
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
