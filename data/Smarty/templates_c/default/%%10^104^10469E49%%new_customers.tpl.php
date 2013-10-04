<?php /* Smarty version 2.6.26, created on 2013-10-04 10:55:52
         compiled from /Applications/XAMPP/xamppfiles/htdocs/nejikuru//data/Smarty/templates/default/frontparts/bloc/new_customers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/Applications/XAMPP/xamppfiles/htdocs/nejikuru//data/Smarty/templates/default/frontparts/bloc/new_customers.tpl', 9, false),)), $this); ?>
<div class="new_customers">
                	<div id="new_customers_pa">
                        <h4>初めてのご利用のお客様</h4>
                        <div class="new_customers_description">
                        注文履歴管理やお気に入り登録など会員専用昨日が利用できます。
                        </div>
                    </div>
                    <div class="new_customers_btn">
                    	<a href=""><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/joinfree_bt.gif" alt=""></a>
                    </div>
                </div>