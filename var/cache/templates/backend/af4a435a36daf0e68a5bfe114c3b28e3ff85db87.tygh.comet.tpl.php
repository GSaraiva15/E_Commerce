<?php /* Smarty version Smarty-3.1.21, created on 2021-05-17 17:38:08
         compiled from "C:\xampp\htdocs\E_Commerce\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23954559460a27fd005a599-84637256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4a435a36daf0e68a5bfe114c3b28e3ff85db87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\E_Commerce\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '23954559460a27fd005a599-84637256',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60a27fd0078670_95989509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60a27fd0078670_95989509')) {function content_60a27fd0078670_95989509($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
