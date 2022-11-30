<?php
/* Smarty version 4.3.0, created on 2022-11-30 09:29:41
  from 'C:\Users\maksi\Documents\Projects 2022 Laptop\---1111MAINPHP\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_638722852f0499_09256057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3137976923f1d78adced169383bb6a88432bc99' => 
    array (
      0 => 'C:\\Users\\maksi\\Documents\\Projects 2022 Laptop\\---1111MAINPHP\\index.tpl',
      1 => 1669800539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638722852f0499_09256057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\maksi\\Documents\\Projects2022Laptop\\---1111MAINPHP\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<html>
<head>
    <title>page</title>
    <link rel="stylesheet" href="style.css">
<head>
<body>
    <main>
        <div class="week-days">
            <p><?php echo smarty_modifier_date_format(time(),"%B %Y");?>
</p>
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
            <?php echo $_smarty_tpl->tpl_vars['mainout']->value;?>

        </div>
    </main>
</body>
</html><?php }
}
