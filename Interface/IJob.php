<?php
/**
 * Created by PhpStorm.
 * User: wyang
 * Date: 2018/12/17
 * Time: 14:25
 */

namespace IJob;

interface IJob
{
    public function exec($obj);
}
