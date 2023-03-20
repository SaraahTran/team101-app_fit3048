<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Site> $sites
 */
?>
<div class="sites index content">
    <?= $this->Html->link(__('New Site'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sites') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('site_id') ?></th>
                    <th><?= $this->Paginator->sort('site_address') ?></th>
                    <th><?= $this->Paginator->sort('site_postcode') ?></th>
                    <th><?= $this->Paginator->sort('site_contact') ?></th>
                    <th><?= $this->Paginator->sort('site_contact_no') ?></th>
                    <th><?= $this->Paginator->sort('site_ph_no') ?></th>
                    <th><?= $this->Paginator->sort('site_contact_direct_ph_no') ?></th>
                    <th><?= $this->Paginator->sort('site_lga') ?></th>
                    <th><?= $this->Paginator->sort('site_dhhs_area') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sites as $site): ?>
                <tr>
                    <td><?= $this->Number->format($site->site_id) ?></td>
                    <td><?= h($site->site_address) ?></td>
                    <td><?= h($site->site_postcode) ?></td>
                    <td><?= h($site->site_contact) ?></td>
                    <td><?= h($site->site_contact_no) ?></td>
                    <td><?= h($site->site_ph_no) ?></td>
                    <td><?= h($site->site_contact_direct_ph_no) ?></td>
                    <td><?= h($site->site_lga) ?></td>
                    <td><?= h($site->site_dhhs_area) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $site->site_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $site->site_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $site->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $site->site_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>