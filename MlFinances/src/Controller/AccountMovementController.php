<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountMovement Controller
 *
 * @property \App\Model\Table\AccountMovementTable $AccountMovement
 */
class AccountMovementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AccountMovement->find();
        $accountMovement = $this->paginate($query);

        $this->set(compact('accountMovement'));
    }

    /**
     * View method
     *
     * @param string|null $id Account Movement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountMovement = $this->AccountMovement->get($id, contain: []);
        $this->set(compact('accountMovement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountMovement = $this->AccountMovement->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountMovement = $this->AccountMovement->patchEntity($accountMovement, $this->request->getData());
            if ($this->AccountMovement->save($accountMovement)) {
                $this->Flash->success(__('The account movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account movement could not be saved. Please, try again.'));
        }
        $this->set(compact('accountMovement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Movement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountMovement = $this->AccountMovement->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountMovement = $this->AccountMovement->patchEntity($accountMovement, $this->request->getData());
            if ($this->AccountMovement->save($accountMovement)) {
                $this->Flash->success(__('The account movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account movement could not be saved. Please, try again.'));
        }
        $this->set(compact('accountMovement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Movement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountMovement = $this->AccountMovement->get($id);
        if ($this->AccountMovement->delete($accountMovement)) {
            $this->Flash->success(__('The account movement has been deleted.'));
        } else {
            $this->Flash->error(__('The account movement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
