<?php
App::uses('AppController', 'Controller');
/**
 * Websites Controller
 *
 * @property Website $Website
 * @property PaginatorComponent $Paginator
 */
class WebsitesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Website->recursive = 0;
		$this->set('websites', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Website->exists($id)) {
			throw new NotFoundException(__('Invalid website'));
		}
		$options = array('conditions' => array('Website.' . $this->Website->primaryKey => $id));
		$this->set('website', $this->Website->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Website->create();
			if ($this->Website->save($this->request->data)) {
				$this->Session->setFlash(__('The website has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The website could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Website->exists($id)) {
			throw new NotFoundException(__('Invalid website'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Website->save($this->request->data)) {
				$this->Session->setFlash(__('The website has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The website could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Website.' . $this->Website->primaryKey => $id));
			$this->request->data = $this->Website->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Website->id = $id;
		if (!$this->Website->exists()) {
			throw new NotFoundException(__('Invalid website'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Website->delete()) {
			$this->Session->setFlash(__('The website has been deleted.'));
		} else {
			$this->Session->setFlash(__('The website could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
