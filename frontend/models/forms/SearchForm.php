<?php 

namespace frontend\models\forms;

use frontend\models\BookSearch;
use yii\base\Model;


class SearchForm extends Model {
    public $keyword;
    public $radio;
    public function rules() {
        return [
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['radio', 'trim'], 
        ];
    }

    public function search(){
        if($this->validate()) {
            $model = new BookSearch();
            if($this->radio === 'id'){
                return $model->getBookById($this->keyword);
            }
            if($this->radio === 'author'){
                return $model->getBooksByAuthor($this->keyword);
            }

            if($this->radio === 'manufacturer'){
                return $model->getBooksByManufacturer($this->keyword);
            }
            if($this->radio === 'year'){
                return $model->getBooksByYear($this->keyword);
            }

            return $model->simpleSearch($this->keyword);
        }
    }

}