<?php
/* Smarty version 4.3.0, created on 2022-12-09 09:59:34
  from 'C:\Users\maksi\Documents\Projects 2022 Laptop\---1111MAINPHP\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63930706efb9c0_77858503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3137976923f1d78adced169383bb6a88432bc99' => 
    array (
      0 => 'C:\\Users\\maksi\\Documents\\Projects 2022 Laptop\\---1111MAINPHP\\index.tpl',
      1 => 1670579970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63930706efb9c0_77858503 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>i officially despise php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
<head>
<body>
    <main>
        <div class="week-days">
            <p><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 2022</p>
            <form action="index.php" method="get">
                <label>Choose the month offset:</label>
                <input type="number" name="m" value="1" max="12" min="1">
                <input type="submit">
            </form>
            <hr>
            <div class="days">
                <div class="week">Mo</div>
                <div class="week">Tu</div>
                <div class="week">We</div>
                <div class="week">Th</div>
                <div class="week">Fr</div>
                <div class="week">Sa</div>
                <div class="week">Su</div>
            </div>
        </div>
        <div class="week-dates">
            <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

        </div>
    </main>
</body>
</html><?php }
}
