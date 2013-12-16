<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * use models
 *
 * @var array
 */
	public $uses = array('Article');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$query = array( 'contain' => array('Website'),
											'limit' => 100,
											'order' => array('Article.created' => 'desc'));
		if (!empty($id)) {
			$query['conditions'] = array('Article.category_id' => $id);
		}
		$this->Paginator->settings = $query;
		$this->set('articles', $this->Paginator->paginate('Article'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*
	public function view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}
*/
/**
 * add method
 *
 * @return void
 */
/*
	public function add() {
		if ($this->request->is('post')) {
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}
		$websites = $this->Article->Website->find('list');
		$categories = $this->Article->Category->find('list');
		$this->set(compact('websites', 'categories'));
	}
*/
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*
	public function edit($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
		$websites = $this->Article->Website->find('list');
		$categories = $this->Article->Category->find('list');
		$this->set(compact('websites', 'categories'));
	}
*/
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*
	public function delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('The article has been deleted.'));
		} else {
			$this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
*/
}