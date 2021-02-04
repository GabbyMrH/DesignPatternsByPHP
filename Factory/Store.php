<?php
/*
 * @Description:店铺售卖实体类
 * @Author: GabbbyMrH
 * @Date: 2021/2/4 上午9:59
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021/2/4 上午9:59
 */

namespace Factory;


class Store
{
    public function __construct()
    {
        // 比如可乐,实体售卖商店省去了制作流程，也无需关心制作流程
        $juice =  new StoreByType('可乐');
    }
}