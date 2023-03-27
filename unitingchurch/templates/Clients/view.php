




<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="container">

    <div class="row" >


        <div class="col-sm-8" >
            <div class="card">
                <div class="card-body" >
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Client</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="clients view content">
                                <h3><?= h($client->client_id) ?></h3>
                                <table>
                                    <tr>
                                        <th><?= __('Client First Name') ?></th>
                                        <td><?= h($client->client_first_name) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Client Last Name') ?></th>
                                        <td><?= h($client->client_last_name) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Client Id') ?></th>
                                        <td><?= $this->Number->format($client->client_id) ?></td>
                                    </tr>
                                </table>
                                <div class="text">
                                    <strong><?= __('Client Location') ?></strong>
                                    <blockquote>
                                        <?= $this->Text->autoParagraph(h($client->client_location)); ?>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->clientr_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id), 'class' => 'btn btn-primary btn-block']) ?>


                    </div></div></div></div>
        <br>
    </div>
</div>




