<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');
App::uses('Security', 'Utility');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    public $actsAs = array(
        'Containable',
        'Search.Searchable',
        /*
        'Utils.SoftDelete' => array(
             'delete_flg' => 'deleted'
        ),*/
    );

    /**
     * add :: save override
     *
     * @param type $_data
     * @return type
     */
    public function add($_data = array()) {
        $this->create();
        $this->setValidation('add');
        return $this->save($_data);
    }

    /**
     * edit :: save override
     *
     * @param type $_data
     * @return type
     */
    public function edit($_data = array()) {
        $this->setValidation('edit');
        return $this->save($_data);
    }

    /**
     * password
     *
     * @param type $password
     * @return string
     */
    public function password($password) {
        return Security::hash($password, null, true);
    }

    /**
     * exists override
     *
     * @param type $id
     * @return type
     */
    public function exists($id = null) {
        if ( $this->Behaviors->attached('SoftDelete') ) {
            // SoftDeleteBehaviorがattachされている場合はexistsメソッドを差し替える
            return $this->__softExists($id);
        } else {
            return parent::exists($id);
        }
    }

    /**
     * ソフトデリートされたデータの存在チェック
     * softExists
     *
     * @param type $id
     * @return boolean
     */
    private function __softExists($id = null) {
        if ($id === null) {
            $id = $this->getID();
        }
        if ($id === false) {
            return false;
        }

        $query = array(
            'conditions' => array(
                $this->alias.'.'.$this->primaryKey => $id
            ),
            'recursive' => -1,
        );
        return ($this->find('count', $query) > 0);
    }

    /**
     * delete method override
     *
     * @param type $id
     * @param type $cascade
     * @return type
     */
    public function delete($id = null, $cascade = true) {

        // SoftDeleteBehaviorがattachされていれば事前の存在チェックをしておく
        if ( $this->Behaviors->attached('SoftDelete') ) {
            // 存在していなければfalseを返す
            if ( !$this->exists($id) ) {
                return false;
            }
        }

        $result = parent::delete($id, $cascade);

        // SoftDeleteBehaviorがattachされていなければ戻り値をそのまま返す
        if ( !$this->Behaviors->attached('SoftDelete') ) {
            return $result;
        }

        // SoftDeleteBehaviorがattachされている場合は存在して居なければ削除されたものと見なす
        return !($this->exists($id));
    }

    /**
     * getModelId
     *
     * @access public
     * @return bool
     */
    public function getModelId($conditions){
        $data = $this->find('first',array('conditions' => $conditions));
        if (empty($data)){
            return null;
        }
        return $data[$this->alias]['id'];
     }

}
