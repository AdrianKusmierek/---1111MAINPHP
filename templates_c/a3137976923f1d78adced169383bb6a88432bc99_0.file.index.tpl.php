<?php
/* Smarty version 4.3.0, created on 2022-11-29 12:45:42
  from 'C:\Users\maksi\Documents\Projects 2022 Laptop\---1111MAINPHP\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6385fef6e29b59_45368347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3137976923f1d78adced169383bb6a88432bc99' => 
    array (
      0 => 'C:\\Users\\maksi\\Documents\\Projects 2022 Laptop\\---1111MAINPHP\\index.tpl',
      1 => 1669725942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6385fef6e29b59_45368347 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if (date_format(date_create(date("Y-m-01")),"N") == 1) {?>
                <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['pml']->value;?>
</div>
            <?php } elseif (date_format(date_create(date("Y-m-01")),"N") == 2) {?>
                <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pml']->value+1 - ($_smarty_tpl->tpl_vars['pml']->value) : $_smarty_tpl->tpl_vars['pml']->value-($_smarty_tpl->tpl_vars['pml']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['pml']->value, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                    <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-01")),"N") == 3) {?>
                <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pml']->value+1 - ($_smarty_tpl->tpl_vars['pml']->value-1) : $_smarty_tpl->tpl_vars['pml']->value-1-($_smarty_tpl->tpl_vars['pml']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['pml']->value-1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                    <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-01")),"N") == 4) {?>
                <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pml']->value+1 - ($_smarty_tpl->tpl_vars['pml']->value-2) : $_smarty_tpl->tpl_vars['pml']->value-2-($_smarty_tpl->tpl_vars['pml']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['pml']->value-2, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                    <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-01")),"N") == 5) {?>
                <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pml']->value+1 - ($_smarty_tpl->tpl_vars['pml']->value-3) : $_smarty_tpl->tpl_vars['pml']->value-3-($_smarty_tpl->tpl_vars['pml']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['pml']->value-3, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                    <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-01")),"N") == 6) {?>
                <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pml']->value+1 - ($_smarty_tpl->tpl_vars['pml']->value-4) : $_smarty_tpl->tpl_vars['pml']->value-4-($_smarty_tpl->tpl_vars['pml']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['pml']->value-4, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                    <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-01")),"N") == 7) {?>
                <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pml']->value+1 - ($_smarty_tpl->tpl_vars['pml']->value-5) : $_smarty_tpl->tpl_vars['pml']->value-5-($_smarty_tpl->tpl_vars['pml']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['pml']->value-5, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                    <div class="pm-days"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</div>
                <?php }
}
?>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['y']->step = 1;$_smarty_tpl->tpl_vars['y']->total = (int) ceil(($_smarty_tpl->tpl_vars['y']->step > 0 ? $_smarty_tpl->tpl_vars['ml']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['ml']->value)+1)/abs($_smarty_tpl->tpl_vars['y']->step));
if ($_smarty_tpl->tpl_vars['y']->total > 0) {
for ($_smarty_tpl->tpl_vars['y']->value = 1, $_smarty_tpl->tpl_vars['y']->iteration = 1;$_smarty_tpl->tpl_vars['y']->iteration <= $_smarty_tpl->tpl_vars['y']->total;$_smarty_tpl->tpl_vars['y']->value += $_smarty_tpl->tpl_vars['y']->step, $_smarty_tpl->tpl_vars['y']->iteration++) {
$_smarty_tpl->tpl_vars['y']->first = $_smarty_tpl->tpl_vars['y']->iteration === 1;$_smarty_tpl->tpl_vars['y']->last = $_smarty_tpl->tpl_vars['y']->iteration === $_smarty_tpl->tpl_vars['y']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['y']->value == smarty_modifier_date_format(time(),"%e")) {?>
                    <div class="now day-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</div>
                <?php } elseif (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['y']->value))),"N") == $_smarty_tpl->tpl_vars['fday']->value) {?>
                    <div class="cm-days day-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
" style="grid-column: <?php echo $_smarty_tpl->tpl_vars['fday']->value;?>
;"><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</div>
                <?php } else { ?>
                    <div class="cm-days day-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</div>
                <?php }?>
            <?php }
}
?>
            <?php if (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['ml']->value))),"N") == 1) {?>
                <?php
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int) ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 13+1 - (1) : 1-(13)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0) {
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++) {
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration === 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration === $_smarty_tpl->tpl_vars['z']->total;?>
                    <div class="nm-days"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['ml']->value))),"N") == 2) {?>
                <?php
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int) ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0) {
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++) {
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration === 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration === $_smarty_tpl->tpl_vars['z']->total;?>
                    <div class="nm-days"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['ml']->value))),"N") == 3) {?>
                <?php
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int) ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 11+1 - (1) : 1-(11)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0) {
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++) {
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration === 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration === $_smarty_tpl->tpl_vars['z']->total;?>
                    <div class="nm-days"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['ml']->value))),"N") == 4) {?>
                <?php
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int) ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0) {
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++) {
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration === 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration === $_smarty_tpl->tpl_vars['z']->total;?>
                    <div class="nm-days"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['ml']->value))),"N") == 5) {?>
                <?php
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int) ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 9+1 - (1) : 1-(9)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0) {
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++) {
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration === 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration === $_smarty_tpl->tpl_vars['z']->total;?>
                    <div class="nm-days"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</div>
                <?php }
}
?>
            <?php } elseif (date_format(date_create(date("Y-m-".((string)$_smarty_tpl->tpl_vars['ml']->value))),"N") == 6) {?>
                <?php
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int) ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 8+1 - (1) : 1-(8)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0) {
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++) {
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration === 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration === $_smarty_tpl->tpl_vars['z']->total;?>
                    <div class="nm-days"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</div>
                <?php }
}
?>
            <?php }?>
        </div>
    </main>
</body>
</html><?php }
}
