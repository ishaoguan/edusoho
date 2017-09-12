<?php

use Phpmig\Migration\Migration;

class BizUserCashflowAddTitle extends Migration
{
    //TODO: 继承到BIZ，最够变成一个脚本
    /**
     * Do the migration
     */
    public function up()
    {
        $biz = $this->getContainer();
        $connection = $biz['db'];
        $connection->exec("ALTER TABLE `biz_user_cashflow` ADD COLUMN `title` VARCHAR(1024) NOT NULL DEFAULT '' COMMENT '流水名称'");
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $biz = $this->getContainer();
        $connection = $biz['db'];

        $connection->exec('ALTER TABLE `biz_user_cashflow` DROP COLUMN `title`;');
    }
}
