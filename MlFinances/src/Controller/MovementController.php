<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movement Controller
 *
 * @property \App\Model\Table\MovementTable $Movement
 */
class MovementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Movement->find();
        $movement = $this->paginate($query);

        $this->set(compact('movement'));
    }

    /**
     * View method
     *
     * @param string|null $id Movement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movement = $this->Movement->get($id, contain: ['Account']);
        $this->set(compact('movement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movement = $this->Movement->newEmptyEntity();
        if ($this->request->is('post')) {
            $movement = $this->Movement->patchEntity($movement, $this->request->getData());
            if ($this->Movement->save($movement)) {
                $this->Flash->success(__('The movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movement could not be saved. Please, try again.'));
        }
        $account = $this->Movement->Account->find('list', limit: 200)->all();
        $this->set(compact('movement', 'account'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movement = $this->Movement->get($id, contain: ['Account']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movement = $this->Movement->patchEntity($movement, $this->request->getData());
            if ($this->Movement->save($movement)) {
                $this->Flash->success(__('The movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movement could not be saved. Please, try again.'));
        }
        $account = $this->Movement->Account->find('list', limit: 200)->all();
        $this->set(compact('movement', 'account'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movement = $this->Movement->get($id);
        if ($this->Movement->delete($movement)) {
            $this->Flash->success(__('The movement has been deleted.'));
        } else {
            $this->Flash->error(__('The movement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
