<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contacts form content">
            <?= $this->Form->create($contact) ?>
            <fieldset>
                <legend><?= __('Edit Contact') ?></legend>
                <?php
                    echo $this->Form->control('document');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('region');
                    echo $this->Form->control('mensaje');
                    echo $this->Form->control('cotizacion');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('vivienda');
                    echo $this->Form->control('pda');
                    echo $this->Form->control('enferma');
                    echo $this->Form->control('recuperacion');
                    echo $this->Form->control('personas');
                    echo $this->Form->control('banos');
                    echo $this->Form->control('dormitorios');
                    echo $this->Form->control('superficie');
                    echo $this->Form->control('ingreso_aire');
                    echo $this->Form->control('ingreso_aire_cant');
                    echo $this->Form->control('traspaso_aire');
                    echo $this->Form->control('traspaso_aire_cant');
                    echo $this->Form->control('extraccion_cocina');
                    echo $this->Form->control('extraccion_cocina_cant');
                    echo $this->Form->control('extraccion_bano');
                    echo $this->Form->control('extraccion_bano_cant');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
