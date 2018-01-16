<?php

use Phpmig\Migration\Migration;

class UpdateDeductTypeName extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $db = $container['db'];
        $db->exec("
            UPDATE  `biz_order_item_deduct` set `deduct_type_name` = '打折' where `deduct_type` = 'discount';
            UPDATE  `biz_order_item_deduct` set `deduct_type_name` = '优惠券' where `deduct_type` = 'coupon';
            UPDATE  `biz_order_item_deduct` set `deduct_type_name` = '班级课程抵扣' where `deduct_type` = 'paidCourse';
            UPDATE  `biz_order_item_deduct` set `deduct_type_name` = '改价' where `deduct_type` = 'adjust_price';
        ");
    }

    /**
     * Undo the migration
     */
    public function down()
    {
    }
}
