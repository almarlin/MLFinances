<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Loan Controller
 *
 * @property \App\Model\Table\LoanTable $Loan
 */
class LoanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Loan->find();
        $loan = $this->paginate($query);

        $this->set(compact('loan'));
    }

    /**
     * View method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loan = $this->Loan->get($id, contain: ['Account']);
        $this->set(compact('loan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loan = $this->Loan->newEmptyEntity();
        if ($this->request->is('post')) {
            $loan = $this->Loan->patchEntity($loan, $this->request->getData());
            if ($this->Loan->save($loan)) {
                $this->Flash->success(__('The loan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loan could not be saved. Please, try again.'));
        }
        $account = $this->Loan->Account->find('list', limit: 200)->all();
        $this->set(compact('loan', 'account'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loan = $this->Loan->get($id, contain: ['Account']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loan = $this->Loan->patchEntity($loan, $this->request->getData());
            if ($this->Loan->save($loan)) {
                $this->Flash->success(__('The loan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loan could not be saved. Please, try again.'));
        }
        $account = $this->Loan->Account->find('list', limit: 200)->all();
        $this->set(compact('loan', 'account'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loan = $this->Loan->get($id);
        if ($this->Loan->delete($loan)) {
            $this->Flash->success(__('The loan has been deleted.'));
        } else {
            $this->Flash->error(__('The loan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
