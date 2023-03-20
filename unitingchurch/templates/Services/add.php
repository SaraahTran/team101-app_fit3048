<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 * @var \Cake\Collection\CollectionInterface|string[] $serviceTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services form content">
            <?= $this->Form->create($service) ?>
            <fieldset>
                <legend><?= __('Add Service') ?></legend>
                <?php
                    echo $this->Form->control('service_description');
                    echo $this->Form->control('service_active_client');
                    echo $this->Form->control('service_staff_number');
                    echo $this->Form->control('service_fte');
                    echo $this->Form->control('service_riskman_id');
                    echo $this->Form->control('program_id', ['options' => $programs]);
                    echo $this->Form->control('service_type_id', ['options' => $serviceTypes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>