<?php /* Smarty version 2.6.6, created on 2014-10-24 13:41:34
         compiled from error.tpl */ ?>
<?php if ($this->_tpl_vars['error'] != ""): ?>
<p class="form-message error middle"><?php echo $this->_tpl_vars['error']; ?>
<br /></p>
<?php elseif ($this->_tpl_vars['message'] != ""): ?>
<p class="form-message success middle"><?php echo $this->_tpl_vars['message']; ?>
<br /></p>
<?php endif; ?>