<?php
/**
 * Created by PhpStorm.
 * User: ptk
 * Date: 19/7/12
 * Time: 下午3:12
 */

namespace app\models;

use app\models\baseModel\Order;
use yii\base\Model;
use yii\data\load\LoadActiveDataProvider;

class OrderModel extends Model
{
    public function getList()
    {
        $query = Order::find()
            ->orderBy(['id' => SORT_ASC])
            ->asArray();
        return new LoadActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ]
        ]);
    }
}