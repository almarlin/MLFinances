<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountLoan Controller
 *
 * @property \App\Model\Table\AccountLoanTable $AccountLoan
 */
class AccountLoanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AccountLoan->find();
        $accountLoan = $this->paginate($query);

        $this->set(compact('accountLoan'));
    }

    /**
     * View method
     *
     * @param string|null $id Account Loan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountLoan = $this->AccountLoan->get($id, contain: []);
        $this->set(compact('accountLoan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountLoan = $this->AccountLoan->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountLoan = $this->AccountLoan->patchEntity($accountLoan, $this->request->getData());
            if ($this->AccountLoan->save($accountLoan)) {
                $this->Flash->success(__('The account loan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account loan could not be saved. Please, try again.'));
        }
        $this->set(compact('accountLoan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Loan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountLoan = $this->AccountLoan->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountLoan = $this->AccountLoan->patchEntity($accountLoan, $this->request->getData());
            if ($this->AccountLoan->save($accountLoan)) {
                $this->Flash->success(__('The account loan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account loan could not be saved. Please, try again.'));
        }
        $this->set(compact('accountLoan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Loan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountLoan = $this->AccountLoan->get($id);
        if ($this->AccountLoan->delete($accountLoan)) {
            $this->Flash->success(__('The account loan has been deleted.'));
        } else {
            $this->Flash->error(__('The account loan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
