<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <!-- <?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id], ['class' => 'side-nav-item']) ?> -->
            <?= $this->Form->postLink(__('Borrar Registro'), ['action' => 'delete', $contact->id], ['confirm' => __('Está seguro de borrar el registro # {0}?', $contact->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Registros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contacts view content">
            <h3><?= h($contact->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contact->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document') ?></th>
                    <td><?= h($contact->document) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($contact->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($contact->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($contact->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($contact->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= h($contact->region) ?></td>
                </tr>
                <?php if(strlen(h($contact->cotizacion))>15) : ?>
                <tr>
                    <th><?= __('Vivienda') ?></th>
                    <td><?= h($contact->vivienda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zona PDA') ?></th>
                    <td><?= h($contact->pda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Existe persona enferma') ?></th>
                    <td><?= h($contact->enferma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Desea sistema de recuperación') ?></th>
                    <td><?= h($contact->recuperacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cant. personas hogar') ?></th>
                    <td><?= $this->Number->format($contact->personas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cant. Banos') ?></th>
                    <td><?= $this->Number->format($contact->banos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cant. Dormitorios') ?></th>
                    <td><?= $this->Number->format($contact->dormitorios) ?></td>
                </tr>
                <tr>
                    <th><?= __('Superficie vivienda') ?></th>
                    <td><?= $this->Number->format($contact->superficie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingreso Aire') ?></th>
                    <td><?= h($contact->ingreso_aire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingreso Aire Cant') ?></th>
                    <td><?= $this->Number->format($contact->ingreso_aire_cant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Traspaso Aire') ?></th>
                    <td><?= h($contact->traspaso_aire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Traspaso Aire Cant') ?></th>
                    <td><?= $this->Number->format($contact->traspaso_aire_cant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extraccion Cocina') ?></th>
                    <td><?= h($contact->extraccion_cocina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extraccion Cocina Cant') ?></th>
                    <td><?= $this->Number->format($contact->extraccion_cocina_cant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extraccion Bano') ?></th>
                    <td><?= h($contact->extraccion_bano) ?></td>
                </tr>
                <tr>
                    <th><?= __('Extraccion Bano Cant') ?></th>
                    <td><?= $this->Number->format($contact->extraccion_bano_cant) ?></td>
                </tr>
                <?php endif; ?>
            </table>
            <div class="text">
                <strong><?= __('Mensaje') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contact->mensaje)); ?>
                </blockquote>
            </div>
            <!--div class="text">
                <strong><?= __('Cotizacion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contact->cotizacion)); ?>
                </blockquote>
            </div-->
        </div>
    </div>
</div>