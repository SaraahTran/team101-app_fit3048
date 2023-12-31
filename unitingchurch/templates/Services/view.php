















<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>

<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Service</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="services view content">
                                <table class="table table-bordered" id="dataTable" width="100%">
                                    <tr>
                                        <th><?= __('Program') ?></th>
                                        <td><?= $service->has('program') ? $this->Html->link($service->program->program_name, ['controller' => 'Programs', 'action' => 'view', $service->program->program_id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Service Type') ?></th>
                                        <td><?= $service->has('service_type') ? $this->Html->link($service->service_type->service_type_name, ['controller' => 'ServiceTypes', 'action' => 'view', $service->service_type->service_type_id]) : '' ?></td>
                                    </tr>

                                    <tr>
                                        <th><?= __('Service Active Client') ?></th>
                                        <td><?= $this->Number->format($service->service_active_client) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Service Staff Number') ?></th>
                                        <td><?= $this->Number->format($service->service_staff_number) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Service FTE') ?></th>
                                        <td><?= $this->Number->format($service->service_fte) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Service Riskman') ?></th>
                                        <td><?= $this->Number->format($service->service_riskman) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Service Description') ?></th>
                                        <td><?= h($service->service_description) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div></div>
            </div>

        </div>

    </div>

    <div class="col-md-3">
        <div class="card" style="height: 100%;" >
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                <div class="card-body">


                    <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->service_id], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->service_id], ['confirm' => __('Are you sure you want to delete #this service: id {0}?', $service->service_id), 'class' => 'btn btn-primary btn-block']) ?>

                    </aside>


                </div></div></div></div></div>



</div>





