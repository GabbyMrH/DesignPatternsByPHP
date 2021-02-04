<?php
/*
 * @Description:根据用户喜好制作饮料的店铺实体类
 * @Author: GabbbyMrH
 * @Date: 2021/2/4 上午10:37
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021/2/4 上午10:37
 */

namespace Factory;


class StoreByType
{
    public function __construct($drinkType)
    {
        switch ($drinkType) {
            case '酸梅汤':
                return PlumJuice::make();
            case '可乐':
                return Coke::make();
        }
    }
}