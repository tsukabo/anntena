<?php

class StandingPointValidationBehavior extends ModelBehavior {

    /**
     * Validation Patterns
     *
     * @var array
     */
    private $__validation_patterns = array(
        'not_empty' => array(
            'notEmpty' => array('rule' => array('notEmpty'),
                'required' => true,
                'last' => true,
            ),
        ),
        'not_empty2byte' => array(
            'notEmpty' => array('rule' => array('not_empty2byte'),
                'required' => true,
                'last' => true,
            ),
        ),
        'not_empty_not_required' => array(
            'notEmpty' => array('rule' => array('notEmpty'),
                'required' => false,
                'last' => true,
            ),
        ),
        'not_select' => array(
            'notSelect' => array('rule' => array('notEmpty'),
                'required' => true,
                'last' => true,
            ),
        ),
        // exValidationにRadioのバリデーションである情報を渡すため分岐。Cake上ではnot_selectと同じ処理。
        'not_select_radio' => array(
            'notSelectRadio' => array('rule' => array('notEmpty'),
                'required' => true,
                'last' => true,
            ),
        ),
        'is_unique' => array(
            'isUnique' => array('rule' => array('isUnique'),
                'required' => true,
                'last' => true,
            ),
        ),
        'alpha_numeric' => array(
            'alphaNumeric' => array('rule' => array('alphaNumber'),
                'allowEmpty' => true,
                'required' => true,
                'last' => true,
            ),
        ),
        'alpha_numeric_not_required' => array(
            'alphaNumeric' => array('rule' => array('alphaNumber'),
                'allowEmpty' => false,
                'required' => false,
                'last' => true,
            ),
        ),
        'alpha' => array(
            'alpha' => array(
                'rule' => '/[a-zA-Z]/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'numeric' => array(
            'Numeric' => array('rule' => array('numeric'),
                'allowEmpty' => true,
                'required' => true,
                'last' => true,
            ),
        ),
        'boolean' => array(
            'Boolean' => array('rule' => array('boolean'),
                'required' => true,
                'last' => true,
            ),
        ),
        'date' => array(
            'Date' => array('rule' => array('date'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'email' => array(
            'Email' => array('rule' => array('email'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'email_not_required' => array(
            'Email' => array('rule' => array('email'),
                'required' => false,
                'allowEmpty' => false,
                'last' => true,
            ),
        ),
        'zip1' => array(
            'Zip1' => array(
                'rule' => '/^\d{3}$/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'zip2' => array(
            'Zip2' => array(
                'rule' => '/^\d{4}$/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'tel' => array(
            'Tel' => array(
                'rule' => '/^\d{2,5}\-\d{1,4}\-\d{3,4}$/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'url' => array(
            'Url' => array('rule' => array('url'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        'compare2fields_email' => array(
            'compare2fieldsEmail' => array(
                'rule' => array('compare2fields', 'email'),
                'last' => true,
            ),
        ),
        'compare2fields_change_email' => array(
            'compare2fieldsChangeEmail' => array(
                'rule' => array('compare2fields', 'change_email'),
                'last' => true,
            ),
        ),
        'compare2fields_password' => array(
            'compare2fieldsPassword' => array(
                'rule' => array('compare2fields', 'password'),
                'last' => true,
            ),
        ),

        // ログインID
        'loginidLen' => array(
            'loginidLen' => array(
                'rule' => '/^[a-zA-Z\d]{6,16}$/i',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // パスワード
        'passwordLen' => array(
            'passwordLen' => array(
                'rule' => '/^[a-zA-Z\d]{6,16}$/i',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // ユーザの番号
        'userno' => array(
            'Userno' => array(
                'rule' => '/^\d{2}$/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // 店舗、業者、NETのコード
        'code' => array(
            'Code' => array(
                'rule' => '/^\d{4}$/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // カテゴリID
        'category_id' => array(
            'checkCategoryMaster' => array(
                'rule' => array('checkCategoryMaster'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // ブランドID
        'brand_id' => array(
            'checkBrandMaster' => array(
                'rule' => array('checkBrandMaster'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // ラインID
        'line_id' => array(
            'checkLineMaster' => array(
                'rule' => array('checkLineMaster'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // カラーID
        'color_id' => array(
            'checkColorMaster' => array(
                'rule' => array('checkColorMaster'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),

        // 管理コードの番号
        'manegecodeLen' => array(
            'manegecodeLen' => array(
                'rule' => '/^\d{16}$/',
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // 少なくとも1件セットされているかチェック
        'checkMageneCodeSet' => array(
            'checkMageneCodeSet' => array(
                'rule' => array('checkMageneCodeSet'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // Dealing存在チェック
        'checkMageneCodeMaster' => array(
            'checkMageneCodeMaster' => array(
                'rule' => array('checkMageneCodeMaster'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // 別セットで既に使用されていないかチェック
        'checkUseOtherGroupManegeCode' => array(
            'checkUseOtherGroupManegeCode' => array(
                'rule' => array('checkUseOtherGroupManegeCode'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // アップロードファイル名チェック
        'checkIllegalCode' => array(
            'checkIllegalCode' => array(
                'rule' => array('checkIllegalCode'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // 金額最少最大値チェック
        'checkNumMinMax' => array(
            'checkNumMinMax' => array(
                'rule' => array('checkNumMinMax'),
                'required' => false,
                'allowEmpty' => true,
                'last' => true,
            ),
        ),
        // CSV存在チェック
        'notEmptyCsv' => array(
            'notEmptyCsv' => array(
                'rule' => array('notEmptyCsv'),
                'required' => true,
                'allowEmpty' => false,
                'last' => true,
            ),
        ),
        // CSVファイルサイズ
        'checkFileSizeCsv' => array(
            'checkFileSizeCsv' => array(
                'rule' => array('checkFileSizeCsv'),
                'required' => true,
                'allowEmpty' => false,
                'last' => true,
            ),
        ),
        //  販売チャネルのバリデーションメッセージを分けた
        'checkSellchannel_id' => array(
            'checkSellchannel_id' => array(
                'rule' => array('checkSellchannel_id'),
                'required' => true,
                'allowEmpty' => false,
                'last' => true,
            ),
        ),
    );

    /**
     * setup
     *
     * @param Model $model
     * @param type $config
     */
    public function setup(Model $model, $config = array()) {
        // モデルにerrorMessages配列を追加
        $model->errorMessages = array();
        // バリデーションパターンをコピー
        $model->validation_patterns = $this->__validation_patterns;
    }

    /**
     * beforeValidate
     *
     * @access public
     * @return void
     */
    public function beforeValidate(Model $model) {
        $this->outerBeforeValidate($model);
    }

    /**
     * beforeValidateの処理を外部から実行させる為に別メソッド
     * outerBeforeValidate
     *
     * @param Model $model
     */
    public function outerBeforeValidate(Model $model) {
        $model->errorMessages = Set::merge($model->errorMessages, array(
                    'notEmpty' => __('Validation Error: notEmpty'),
                    'not_empty2byte' => __('Validation Error: notEmpty'),
                    'notSelect' => __('Validation Error: notSelect'),
                    'notSelectRadio' => __('Validation Error: notSelectRadio'),
                    'isUniqueUsername' => __('Validation Error: isUniqueUsername'),
                    'isUnique' => __('Validation Error: isUnique'),
                    'alphaNumeric' => __('Validation Error: alphaNumeric'),
                    'alpha' => __('Validation Error: alpha'),
                    'Numeric' => __('Validation Error: Numeric'),
                    'Boolean' => __('Validation Error: Boolean'),
                    'Date' => __('Validation Error: Date'),
                    'Email' => __('Validation Error: Email'),
                    'Zip1' => __('Validation Error: Zip1'),
                    'Zip2' => __('Validation Error: Zip2'),
                    'Tel' => __('Validation Error: Tel'),
                    'Url' => __('Validation Error: Url'),
                    'compare2fieldsEmail' => __('Validation Error: compare2fieldsEmail'),
                    'compare2fieldsChangeEmail' => __('Validation Error: compare2fieldsChangeEmail'),
                    'compare2fieldsPassword' => __('Validation Error: compare2fieldsPassword'),

                    'loginidLen' => __('Validation Error: loginidLen'),
                    'passwordLen' => __('Validation Error: passwordLen'),
                    'Userno' => __('Validation Error: Userno'),
                    'Code' => __('Validation Error: Code'),
                    'checkFileSizeMovImg' => __('Validation Error: FileSizeMovImgcheck'),
                    'checkCategoryMaster' => __('Validation Error: CategoryNotMaster'),
                    'checkBrandMaster' => __('Validation Error: BrandNotMaster'),
                    'checkLineMaster' => __('Validation Error: LineNotMaster'),
                    'checkColorMaster' => __('Validation Error: ColorNotMaster'),

                    'manegecodeLen' => __('Validation Error: ManegecodeLength'),
                    'checkMageneCodeMaster' => __('Validation Error: MageneCodeNotMaster'),
                    'checkUseOtherGroupManegeCode' => __('Validation Error: UseOtherGroupManegeCodeCheck'),
                    'checkMageneCodeSet' => __('Validation Error: MageneCodeSetCheck'),

                    'item_code' => __('item_code'),
                    'inventory_branch_number' => __('inventory_branch_number'),
                    'buyprice' => __('buyprice'),
                    'name' => __('name'),
                    'sellforecastprice' => __('sellforecastprice'),
                    'buydate' => __('buydate'),
                    'buy_channel_code' => __('buy_channel_code'),

                    'uniqueManagecode' => __('Validation Error: manegecodeUniqueCheck'),

                    'ItemCodeCheck' => __('Validation Error: ItemCodeCheck'),
                    'InventoryBranchNumberCheck' => __('Validation Error: InventoryBranchNumberCheck'),
                    'dateCheck' => __('Validation Error: dateCheck'),
                    'shopExist' => __('Validation Error: shopExist'),
                    'userCodeCheck' =>  __('Validation Error: userCodeCheck'),
                    'checkIllegalCode' =>  __('Validation Error: checkIllegalCode'),
                    'checkExtension' => __('Validation Error: checkExtension'),
                    'checkNumMinMax' => __('Validation Error: checkNumMinMax'),

                    'notEmptyCsv' => __('Validation Error: notEmptyCsv'),
                    'checkFileSizeCsv' => __('Validation Error: checkFileSizeCsv'),
                    'checkSellchannel_id' => __('Validation Error: checkSellchannel_id'),
                ));

        $model->setValidationPatterns();
        $model->setErrorMessageI18n($model->errorMessages, false);
        $model->replaceValidationErrorMessagesI18n();
    }

    /**
     * カテゴリ名がマスタに登録されているかチェック
     * checkCategoryMaster
     *
     * @param type $data
     * @return boolean
     */
    public function checkCategoryMaster(&$Model, $data = array()) {
        $_tmp = (array_shift($data));
        App::import('Model', 'Category');
        $_model = new Category();

        $query = array('recursive' => -1, 'conditions' => array('Category.id' => $_tmp));
        //$query = array('recursive' => -1, 'conditions' => array('Category.name' => $_tmp));
        if (count($_model->find('list', $query)) == 0) {
            return false;
        }
        return true;
    }

    /**
     * ブランド名がマスタに登録されているかチェック
     * checkBrandMaster
     *
     * @param type $data
     * @return boolean
     */
    public function checkBrandMaster(&$Model, $data = array()) {
        $_tmp = (array_shift($data));
        App::import('Model', 'Brand');
        $_model = new Brand();

        $query = array('recursive' => -1, 'conditions' => array('Brand.id' => $_tmp));
        // $query = array('recursive' => -1, 'conditions' => array('Brand.name' => $_tmp));
        if (count($_model->find('list', $query)) == 0) {
            return false;
        }
        return true;
    }

    /**
     * ライン名がマスタに登録されているかチェック
     * checkLineMaster
     *
     * @param type $data
     * @return boolean
     */
    public function checkLineMaster(&$Model, $data = array()) {
        // 無くても良い
        $_tmp = (array_shift($data));
        if ( $_tmp == '' ) return true;
        App::import('Model', 'Line');
        $_model = new Line();

        $query = array('recursive' => -1, 'conditions' => array('Line.id' => $_tmp));
        // $query = array('recursive' => -1, 'conditions' => array('Line.name' => $_tmp));
        if (count($_model->find('list', $query)) == 0) {
            return false;
        }
        return true;
    }

    /**
     * カラー名がマスタに登録されているかチェック
     * checkColorMaster
     *
     * @param type $data
     * @return boolean
     */
    public function checkColorMaster(&$Model, $data = array()) {
        // 無くても良い
        $_tmp = (array_shift($data));
        if ( $_tmp == '' ) return true;
        App::import('Model', 'Color');
        $_model = new Color();

        $query = array('recursive' => -1, 'conditions' => array('Color.id' => $_tmp));
        // $query = array('recursive' => -1, 'conditions' => array('Color.name' => $_tmp));
        if (count($_model->find('list', $query)) == 0) {
            return false;
        }
        return true;
    }

    /**
     * アップロードファイルの動画/画像のファイルサイズチェック
     * checkFileSizeMovImg
     *
     * @param type $data
     * @return boolean
     */
    public function checkFileSizeMovImg(&$Model, $data = array()) {
        $_data = array_shift($data);
        $exp = $_data['file_content_type'];
        $size = $_data['file_size'];
        if ( $exp == 'image/jpeg' || $exp == 'image/png' ) {
            $min = $this->calcFileSizeUnit(DEF_IMGFILE_SIZE);
        } elseif ( $exp == 'video/quicktime' || $exp == 'video/mpeg' || $exp == 'video/mp4' ) {
            $min = $this->calcFileSizeUnit(DEF_MOVFILE_SIZE);
        } else {
            // 管理しないファイル形式なのでエラーで返す
            return false;
        }
        if ($size > $min ) {
            return false;
        }
        return true;
    }

    /**
     * Calculate file size by unit
     *
     * e.g.) 100KB -> 1024000
     *
     * @param $size mixed
     * @return int file size
     */
    public function calcFileSizeUnit($size) {
        $units = array('K', 'M', 'G', 'T');
        $byte = 1024;

        if (is_numeric($size) || is_int($size)) {
            return $size;

        } else if (is_string($size) && preg_match('/^([0-9]+(?:\.[0-9]+)?)(' . implode('|', $units) . ')B?$/i', $size, $matches)) {
            return $matches[1] * pow($byte, array_search($matches[2], $units) + 1);
        }

        return false;
    }

    /**
     * 管理コードがセットされているかチェック
     * checkMageneCodeSet
     *
     * @param type $data
     * @return boolean
     */
    public function checkMageneCodeSet(&$Model, $data = array()) {
        if ( $data['setcount'] < 1 ) {
            return false;
        }
        return true;
    }

    /**
     * 管理コードが存在するかチェック
     * checkMageneCodeMaster
     *
     * @param type $data
     * @return boolean
     */
    public function checkMageneCodeMaster(&$Model, $data = array()) {
        $_tmp = (array_shift($data));
        if ( $_tmp['manegecode'] == '' ) {
            return true;
        }
        App::import('Model', 'Dealing');
        $_model = new Dealing();
        $query = array('recursive' => -1, 'conditions' => array('Dealing.manegecode' => $_tmp));
        if (count($_model->find('list', $query)) == 0) {
            return false;
        }
        return true;
    }

    /**
     * 別セットで既に使用されていないかチェック
     * checkUseOtherGroupManegeCode
     *
     * @param type $data
     * @return boolean
     */
    public function checkUseOtherGroupManegeCode(&$Model, $data = array()) {
        $_tmp = (array_shift($data));
        if ( $_tmp['manegecode'] == '' ) {
            return true;
        }
        App::import('Model', 'Dealing');
        $_model = new Dealing();
        $query = array('recursive' => -1, 'conditions' => array('Dealing.manegecode' => $_tmp));
        $_data = $_model->find('first', $query);
        if (count($_data) == 0) {
            return false;
        }
        if ( !empty($Model->data['Group']['id']) ) {
            $query = array('DealingsGroups.dealing_id' => $_data['Dealing']['id'], 'DealingsGroups.group_id <>' => $Model->data['Group']['id']);
        } else {
            $query = array('DealingsGroups.dealing_id' => $_data['Dealing']['id']);
        }
        App::import('Model', 'DealingsGroups');
        $_model = new DealingsGroups();
        $query = array('recursive' => -1, 'conditions' => $query);
        $_data = $_model->find('first', $query);
        if (count($_data) != 0) {
            return false;
        }
        return true;
    }

    /**
     * nonRFCEmail
     * RFC非準拠のemailバリデーション
     * 日本のRFC非対応メールアドレスに対応するために修正
     * (修正前) '/^[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*@'
     * (修正後) '/^[\.a-z0-9!#$%&\'*+\/=?^_`{|}~-]+@'
     * hostnameはprotectedプロパティのためアクセスできないのでコピー
     *
     * @param $
     * @return
     */
    public function nonRFCEmail(&$model, $check) {
        $fieldName = key($check);

        return Validation::email($check[$fieldName], false, '/^[\.a-z0-9!#$%&\'*+\/=?^_`{|}~-]+@' . '(?:[-_a-z0-9][-_a-z0-9]*\.)*(?:[a-z0-9][-a-z0-9]{0,62})\.(?:(?:[a-z]{2}\.)?[a-z]{2,4}|museum|travel)' . '$/i');
    }

    /**
     * notEmptyCsv
     * CSVimport用バリデーション(filebinder未使用のため
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    public function notEmptyCsv(&$model, $field) {
        $file = array_shift($field);
        if (!is_array($file)) {
            return false;
        }
        //エラーコードから判定。空ではなくサーバのアップロード要領制限に引っかかっているのでtrue
        if ($file['error'] == UPLOAD_ERR_INI_SIZE || $file['error'] == UPLOAD_ERR_FORM_SIZE) {
            return true;
        }

        if ($file['size'] <= 0) {
            return false;
        }
        return true;
    }

    /**
     * checkFileSizeCsv
     * CSVimport用バリデーション(filebinder未使用のため
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    public function checkFileSizeCsv(&$model, $value, $max) {
        $file = array_shift($value);
        if (!is_array($file)) {
            return false;
        }

        //エラーコードから判定
        if ($file['error'] == UPLOAD_ERR_INI_SIZE || $file['error'] == UPLOAD_ERR_FORM_SIZE) {
            return false;
        }

        $fileSize = $file['size'];
        $max = $this->calcFileSizeUnit($max);

        if ($fileSize >= $max) {
            return false;
        }
        return true;
    }


    /**
     * codeCheck
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    function codeCheck(&$model, $field,$digit){
        $value = array_shift($field);
        if (preg_match('/^[0-9]{' . $digit . '}$/',$value)){
            return true;
        }
        return false;
    }

    /**
     * dateCheck
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    public function dateCheck(&$model, $field){
        $value = array_shift($field);
        if (!preg_match('/^([0-9]{4})([0-9]{2})([0-9]{2})$/',$value,$date)){
            return false;
        }
        return checkdate($date[2],$date[3],$date[1]);
    }

    /**
     * shopExist
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    public function shopExist(&$model, $field){
        $value = array_shift($field);
        App::uses('Shop', 'Model');
        $this->Shop = new Shop();
        $query = array();
        $query['conditions'] = array(
            'Shop.code' => $value
        );
        return $this->Shop->find('count',$query) > 0;
    }

    /**
     * userCodeCheck
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    public function userCodeCheck(&$model, $field){
        $value = array_shift($field);
        //先頭二文字が半角数字でなければここではチェックしない
        if (!preg_match('/^([0-9]{2})/',$value,$check)){
            return true;
        }
        App::uses('User', 'Model');
        $this->User = new User();
        $query = array();
        $query['conditions'] = array(
            'User.userno' => $check[1]
        );
        return $this->User->find('count',$query) > 0;
    }

    /**
     * manegecodeUniqueCheck
     *
     * @param $
     * @return
     * @author satoru hagiwara
     */
    public function manegecodeUniqueCheck(&$model, $field){
        $value = array_shift($field);
        //数値9桁のバリデーションは通っているはず
        if (!preg_match('/^([0-9]{4})([0-9]{5})$/',$model->data[$model->alias]['inventory_branch_number'],$inventory_branch_number_exp)){
            return false;
        }
        //-> 2013.10.11 小坂様よりタグのバーコードはそのままだったと連絡があったので変更した
        //在庫枝番上4桁+商品コード+在庫枝番下5桁
        //$manegecode = $inventory_branch_number_exp[1] . $model->data[$model->alias]['item_code'] . $inventory_branch_number_exp[2];
        $manegecode = $model->data[$model->alias]['item_code'] . $model->data[$model->alias]['inventory_branch_number'];
        //<- 2013.10.11 小坂様よりタグのバーコードはそのままだったと連絡があったので変更した
        $query = array();
        $query['conditions'] = array(
            $model->alias . '.manegecode' => $manegecode
        );
        return $model->find('count',$query) == 0;
    }

    /**
    * checkIllegalCode
    * check include illegal code
    *
    * @param $filePath
    * @return
    */
    public function checkIllegalCode(&$model, $filePath){
        $file = array_shift($filePath);
        if (!is_array($file)) {
            return false;
        }
        $filePath = empty($file['tmp_bind_path']) ? $file['file_path'] : $file['tmp_bind_path'];
        $fp = fopen($filePath, "r");
        $ofile = fread($fp, filesize($filePath));
        fclose($fp);

        if (preg_match('/<\\?php./i', $ofile)) {
            return false;
        }
        return true;
    }

    /**
     * not_empty2byte
     *
     * @param
     * @return
     */
    public function not_empty2byte(&$model, $field){
        $field = array_shift($field);
        $value = trim(mb_convert_kana($field, "s"));
        if(empty($value)) {
            return false;
        }
        return true;
    }

    /**
     * checkNumMinMax
     *
     * @param
     * @return
     */
    public function checkNumMinMax(&$model, $field){
        $value = array_shift($field);
        if($value < 1 || 9999999 < $value) {
            return false;
        }
        return true;
    }

    /**
     * checkSellchannel_id
     *
     * @param
     * @return
     */
    public function checkSellchannel_id($field){
        return true;
    }

}