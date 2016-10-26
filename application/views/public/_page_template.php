<?php if (isset($this->resources->data['page']->modules)): ?>
<?php foreach ($this->resources->data['page']->modules as $module): ?>
    <?php $this->load->view($module->module_path); ?>
<?php endforeach; ?>
<?php endif; ?>