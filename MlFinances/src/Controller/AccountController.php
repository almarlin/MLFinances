<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Account Controller
 *
 * @property \App\Model\Table\AccountTable $Account
 */
class AccountController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Account->find();
        $account = $this->paginate($query);

        $this->set(compact('account'));
    }

    /**
     * View method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $account = $this->Account->get($id, contain: ['Loan', 'Movement', 'User']);
        $this->set(compact('account'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $account = $this->Account->newEmptyEntity();
        if ($this->request->is('post')) {
            $account = $this->Account->patchEntity($account, $this->request->getData());
            if ($this->Account->save($account)) {
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }
        $loan = $this->Account->Loan->find('list', limit: 200)->all();
        $movement = $this->Account->Movement->find('list', limit: 200)->all();
        $user = $this->Account->User->find('list', limit: 200)->all();
        $this->set(compact('account', 'loan', 'movement', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $account = $this->Account->get($id, contain: ['Loan', 'Movement', 'User']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Account->patchEntity($account, $this->request->getData());
            if ($this->Account->save($account)) {
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }
        $loan = $this->Account->Loan->find('list', limit: 200)->all();
        $movement = $this->Account->Movement->find('list', limit: 200)->all();
        $user = $this->Account->User->find('list', limit: 200)->all();
        $this->set(compact('account', 'loan', 'movement', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $account = $this->Account->get($id);
        if ($this->Account->delete($account)) {
            $this->Flash->success(__('The account has been deleted.'));
        } else {
            $this->Flash->error(__('The account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
