<?php
/*
 * @Description: 热干面调料构造器
 * @Author: GabbbyMrH
 * @Email: gabbymrh@gmail.com
 * @Date: 2021-02-01 20:37:51
 * @LastEditors: GabbyMrH
 * @LastEditTime: 2021-02-02 10:14:47
 */

namespace Builder;

class HotDryNoodleBuilder
{
    /**
     * 葱花
     */
    private $addShallot;
    /**
     * 香菜
     */
    private $addParsley;
    /**
     * 辣椒
     */
    private $addChili;
    /**
     * 酸菜
     */
    private $addSauerKraut;

    /**
     * 加葱花
     */
    public function withShallot()
    {
        $this->addShallot = true;
        return $this;
    }

    /**
     * 加香菜
     */
    public function withParsley()
    {
        $this->addParsley = true;
        return $this;
    }

    /**
     * 加辣椒
     */
    public function withChili()
    {
        $this->addChili = true;
        return $this;
    }

    /**
     * 加酸菜
     */
    public function withSauerKraut()
    {
        $this->addSauerKraut = true;
        return $this;
    }

    /**
     * 获取结果集
     */
    public function getResult()
    {
        $need = '';
        if ($this->addShallot) {
            $need .= '葱花.';
        }
        if ($this->addParsley) {
            $need .= '香菜.';
        }
        if ($this->addChili) {
            $need .= '辣椒.';
        }
        if ($this->addSauerKraut) {
            $need .= '酸菜.';
        }

        return $need;
    }
}
