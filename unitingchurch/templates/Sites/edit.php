<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Site $site
 * @var string[]|\Cake\Collection\CollectionInterface $programs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $site->site_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $site->site_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sites form content">
            <?= $this->Form->create($site) ?>
            <fieldset>
                <legend><?= __('Edit Site') ?></legend>
                <?php
                    echo $this->Form->control('site_address');
                    echo $this->Form->control('site_postcode');
                    echo $this->Form->control('site_contact');
                    echo $this->Form->control('site_contact_no');
                    echo $this->Form->control('site_ph_no');
                    echo $this->Form->control('site_contact_direct_ph_no');
                    echo $this->Form->control('site_lga');
                    echo $this->Form->control('site_dhhs_area');
                    echo $this->Form->control('programs._ids', ['options' => $programs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
