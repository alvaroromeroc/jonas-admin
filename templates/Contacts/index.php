<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<div class="contacts index content">
    <!-- <?= $this->Html->link(__('New Contact'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <h3><?= __('Registros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="actions"><?= __('Actions') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('document') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('region') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('vivienda') ?></th>
                    <th><?= $this->Paginator->sort('pda') ?></th>
                    <th><?= $this->Paginator->sort('enferma') ?></th>
                    <th><?= $this->Paginator->sort('recuperacion') ?></th>
                    <th><?= $this->Paginator->sort('personas') ?></th>
                    <th><?= $this->Paginator->sort('banos') ?></th>
                    <th><?= $this->Paginator->sort('dormitorios') ?></th>
                    <th><?= $this->Paginator->sort('superficie') ?></th>
                    <th><?= $this->Paginator->sort('ingreso_aire') ?></th>
                    <th><?= $this->Paginator->sort('ingreso_aire_cant') ?></th>
                    <th><?= $this->Paginator->sort('traspaso_aire') ?></th>
                    <th><?= $this->Paginator->sort('traspaso_aire_cant') ?></th>
                    <th><?= $this->Paginator->sort('extraccion_cocina') ?></th>
                    <th><?= $this->Paginator->sort('extraccion_cocina_cant') ?></th>
                    <th><?= $this->Paginator->sort('extraccion_bano') ?></th>
                    <th><?= $this->Paginator->sort('extraccion_bano_cant') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $contact->id]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $contact->id], ['confirm' => __('Está seguro de borrar el registro # {0}?', $contact->id)]) ?>
                    </td>
                    <td><?= $this->Number->format($contact->id) ?></td>
                    <td><?= h($contact->document) ?></td>
                    <td><?= h($contact->nombre) ?></td>
                    <td><?= h($contact->correo) ?></td>
                    <td><?= h($contact->telefono) ?></td>
                    <td><?= h($contact->region) ?></td>
                    <td><?= h($contact->fecha) ?></td>
                    <td><?= h($contact->vivienda) ?></td>
                    <td><?= h($contact->pda) ?></td>
                    <td><?= h($contact->enferma) ?></td>
                    <td><?= h($contact->recuperacion) ?></td>
                    <td><?= $this->Number->format($contact->personas) ?></td>
                    <td><?= $this->Number->format($contact->banos) ?></td>
                    <td><?= $this->Number->format($contact->dormitorios) ?></td>
                    <td><?= $this->Number->format($contact->superficie) ?></td>
                    <td><?= h($contact->ingreso_aire) ?></td>
                    <td><?= $this->Number->format($contact->ingreso_aire_cant) ?></td>
                    <td><?= h($contact->traspaso_aire) ?></td>
                    <td><?= $this->Number->format($contact->traspaso_aire_cant) ?></td>
                    <td><?= h($contact->extraccion_cocina) ?></td>
                    <td><?= $this->Number->format($contact->extraccion_cocina_cant) ?></td>
                    <td><?= h($contact->extraccion_bano) ?></td>
                    <td><?= $this->Number->format($contact->extraccion_bano_cant) ?></td>
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