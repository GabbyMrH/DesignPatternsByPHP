<?php
/*
 * @Description: 饮料工厂类(抽象)
 * @Author: GabbbyMrH
 * @Date: 2021/2/4 上午9:49
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021-02-04 09:56:56
 */

namespace Factory;

abstract class DrinkFactory
{
    public static function make()
    {
        // 1. 拿出一次性饮料杯
        print_r('拿出一次性饮料杯');

        // 2. 加入速溶粉
        print_r('加入'. static::getInstantPackage());

        // 3. 加入冲兑
        print_r('加水冲兑');

        // 4. 加盖，打包
        print_r('加盖，打包');

    }
    abstract public function getInstantPackage();
}