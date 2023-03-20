<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramType $programType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Program Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programType form content">
            <?= $this->Form->create($programType) ?>
            <fieldset>
                <legend><?= __('Add Program Type') ?></legend>
                <?php
                    echo $this->Form->control('program_type_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
