<?php
App::uses('AppController', 'Controller');
/**
 * EyeColours Controller
 *
 * @property EyeColour $EyeColour
 */
class EyeColoursController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EyeColour->recursive = 0;
		$this->set('eyeColours', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EyeColour->exists($id)) {
			throw new NotFoundException(__('Invalid eye colour'));
		}
		$options = array('conditions' => array('EyeColour.' . $this->EyeColour->primaryKey => $id));
		$this->set('eyeColour', $this->EyeColour->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EyeColour->create();
			if ($this->EyeColour->save($this->request->data)) {
				$this->Session->setFlash(__('The eye colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eye colour could not be saved. Please, try again.'));
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
		if (!$this->EyeColour->exists($id)) {
			throw new NotFoundException(__('Invalid eye colour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EyeColour->save($this->request->data)) {
				$this->Session->setFlash(__('The eye colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eye colour could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EyeColour.' . $this->EyeColour->primaryKey => $id));
			$this->request->data = $this->EyeColour->find('first', $options);
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
		$this->EyeColour->id = $id;
		if (!$this->EyeColour->exists()) {
			throw new NotFoundException(__('Invalid eye colour'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EyeColour->delete()) {
			$this->Session->setFlash(__('Eye colour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eye colour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
