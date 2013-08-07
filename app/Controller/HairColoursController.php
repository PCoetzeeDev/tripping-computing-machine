<?php
App::uses('AppController', 'Controller');
/**
 * HairColours Controller
 *
 * @property HairColour $HairColour
 */
class HairColoursController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HairColour->recursive = 0;
		$this->set('hairColours', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HairColour->exists($id)) {
			throw new NotFoundException(__('Invalid hair colour'));
		}
		$options = array('conditions' => array('HairColour.' . $this->HairColour->primaryKey => $id));
		$this->set('hairColour', $this->HairColour->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HairColour->create();
			if ($this->HairColour->save($this->request->data)) {
				$this->Session->setFlash(__('The hair colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hair colour could not be saved. Please, try again.'));
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
		if (!$this->HairColour->exists($id)) {
			throw new NotFoundException(__('Invalid hair colour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HairColour->save($this->request->data)) {
				$this->Session->setFlash(__('The hair colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hair colour could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HairColour.' . $this->HairColour->primaryKey => $id));
			$this->request->data = $this->HairColour->find('first', $options);
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
		$this->HairColour->id = $id;
		if (!$this->HairColour->exists()) {
			throw new NotFoundException(__('Invalid hair colour'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HairColour->delete()) {
			$this->Session->setFlash(__('Hair colour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hair colour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
