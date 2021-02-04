<?php
/*
 * @Description:可乐粉实例
 * @Author: GabbbyMrH
 * @Date: 2021/2/4 上午9:58
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021/2/4 上午9:58
 */

namespace Factory;


class Coke extends DrinkFactory
{

    public function getInstantPackage()
    {
        return '速溶可乐粉';
    }
}