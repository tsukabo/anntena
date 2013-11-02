<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
App::import('Partial.Lib/View', 'PartialView');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * components
     *
     * @var array
     */
    public $components = array(
        'Session',
        'RequestHandler',
        'Paginator',
        'Escape.Escape' => array('formDataEscape' => false),
        'Search.Prg',
//        'Auth' => array(
//            'flash' => array(
//                'element' => 'alert',
//                'key' => 'auth',
//                'params' => array(
//                    'plugin' => 'BoostCake',
//                    'class' => 'alert-error'
//                )
//            )
//        )
    );

    /**
     * helpers
     *
     * @var array
     */
    public $helpers = array(
        'Session',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );
//    public $helpers = array(
//        'Html',
//        'Form',
//        'Session',
//    );

    /**
     * viewClass
     *
     * @var string
     */
    public $viewClass = 'Partial';

    /**
     * constructor
     *
     * @access public
     * @return void
     */
    public function __construct($request = null, $response = null) {
        // サブクラスのメンバをマージする
        $this->__mergeSubClass();
        // DebugKitをセットする
        $this->__setDebugKit();

        parent::__construct($request, $response);
    }

    /**
     * beforeFilter
     *
     * @access public
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();

        // 日本語に固定
        Configure::write('Config.language', 'ja');
    }

    /**
     * __setDebugKit
     *
     * @access private
     * @return void
     */
    private function __setDebugKit() {
        if (Configure::read('debug') == 0) {
            return;
        }

        if (preg_match('/MSIE [67]./', env('HTTP_USER_AGENT')) == 0) {
            $this->components = Set::merge($this->components, array('DebugKit.Toolbar' => array('cache' => array('mask' => 0666))));
        }

        return;
    }


    /**
     * サブクラスのメンバをマージする
     *
     * @access private
     * @author sakuragawa
     */
    private function __mergeSubClass() {
        // マージクラス名を保存
        $defaultMergeParent = $this->_mergeParent;

        // サブクラスを取得
        $classList = $this->__getClassTree();
        foreach ($classList as $key => $val) {
            // マージクラス名を切り替え
            $this->_mergeParent = $val;
            // パラメータをマージ
            $this->_mergeControllerVars();
        }

        // マージクラス名を復元
        $this->_mergeParent = $defaultMergeParent;
    }

    /**
     * クラスの継承関係を取得する
     *
     * @access private
     * @author sakuragawa
     * @memo 自分自身のクラスとAppController以上のクラスはマージ対象としない
     */
    private function __getClassTree() {
        $classTree = array();
        $className = null;
        if (is_object($this)) {
            $className = get_class($this);
            while ($className = get_parent_class($className)) {
                if ($className == 'AppController') {
                    break;
                }

                // マージ対象クラス名を保存
                $classTree[] = $className;
            }
        }

        return $classTree;
    }
}
