<?php
/*
 * @Description: 酸梅粉实例
 * @Author: GabbbyMrH
 * @Date: 2021/2/4 上午10:00
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021/2/4 上午10:00
 */

namespace Factory;


class PlumJuice extends DrinkFactory
{

    public function getInstantPackage()
    {
        // 速溶酸梅粉
        return '速溶酸梅粉';
    }
}