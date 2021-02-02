<?php
namespace Builder;

/*
 * @Description: 店铺类
 * @Author: GabbbyMrH
 * @Email: gabbymrh@gmail.com
 * @Date: 2021-02-02 09:56:55
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021-02-02 10:06:44
 */

 class Store
 {
   public function __construct()
   {
    // 实例化热干面构造器(热干面辅料操作台)
    $hotDryAction = new HotDryNoodleBuilder();
    
    // 客户 A
    $customerA = $hotDryAction->withChili()->withParsley()->getResult();
    print_r('客户A需要一碗热干面+'.$customerA);

    // 客户 B
    $customerB = $hotDryAction->withSauerKraut()->withShallot()->getResult();
    print_r('客户B需要一碗热干面+'.$customerB);
   }
 }

 
