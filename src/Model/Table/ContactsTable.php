<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @method \App\Model\Entity\Contact newEmptyEntity()
 * @method \App\Model\Entity\Contact newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContactsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contacts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('document')
            ->maxLength('document', 100)
            ->requirePresence('document', 'create')
            ->notEmptyString('document');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 100)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 15)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('region')
            ->maxLength('region', 100)
            ->requirePresence('region', 'create')
            ->notEmptyString('region');

        $validator
            ->scalar('mensaje')
            ->requirePresence('mensaje', 'create')
            ->notEmptyString('mensaje');

        $validator
            ->scalar('cotizacion')
            ->requirePresence('cotizacion', 'create')
            ->notEmptyString('cotizacion');

        $validator
            ->dateTime('fecha')
            ->notEmptyDateTime('fecha');

        $validator
            ->scalar('vivienda')
            ->maxLength('vivienda', 15)
            ->requirePresence('vivienda', 'create')
            ->notEmptyString('vivienda');

        $validator
            ->scalar('pda')
            ->maxLength('pda', 2)
            ->requirePresence('pda', 'create')
            ->notEmptyString('pda');

        $validator
            ->scalar('enferma')
            ->maxLength('enferma', 2)
            ->requirePresence('enferma', 'create')
            ->notEmptyString('enferma');

        $validator
            ->scalar('recuperacion')
            ->maxLength('recuperacion', 2)
            ->requirePresence('recuperacion', 'create')
            ->notEmptyString('recuperacion');

        $validator
            ->integer('personas')
            ->requirePresence('personas', 'create')
            ->notEmptyString('personas');

        $validator
            ->integer('banos')
            ->requirePresence('banos', 'create')
            ->notEmptyString('banos');

        $validator
            ->integer('dormitorios')
            ->requirePresence('dormitorios', 'create')
            ->notEmptyString('dormitorios');

        $validator
            ->integer('superficie')
            ->requirePresence('superficie', 'create')
            ->notEmptyString('superficie');

        $validator
            ->scalar('ingreso_aire')
            ->maxLength('ingreso_aire', 10)
            ->requirePresence('ingreso_aire', 'create')
            ->notEmptyString('ingreso_aire');

        $validator
            ->integer('ingreso_aire_cant')
            ->requirePresence('ingreso_aire_cant', 'create')
            ->notEmptyString('ingreso_aire_cant');

        $validator
            ->scalar('traspaso_aire')
            ->maxLength('traspaso_aire', 10)
            ->requirePresence('traspaso_aire', 'create')
            ->notEmptyString('traspaso_aire');

        $validator
            ->integer('traspaso_aire_cant')
            ->requirePresence('traspaso_aire_cant', 'create')
            ->notEmptyString('traspaso_aire_cant');

        $validator
            ->scalar('extraccion_cocina')
            ->maxLength('extraccion_cocina', 10)
            ->requirePresence('extraccion_cocina', 'create')
            ->notEmptyString('extraccion_cocina');

        $validator
            ->integer('extraccion_cocina_cant')
            ->requirePresence('extraccion_cocina_cant', 'create')
            ->notEmptyString('extraccion_cocina_cant');

        $validator
            ->scalar('extraccion_bano')
            ->maxLength('extraccion_bano', 10)
            ->requirePresence('extraccion_bano', 'create')
            ->notEmptyString('extraccion_bano');

        $validator
            ->integer('extraccion_bano_cant')
            ->requirePresence('extraccion_bano_cant', 'create')
            ->notEmptyString('extraccion_bano_cant');

        return $validator;
    }
}
