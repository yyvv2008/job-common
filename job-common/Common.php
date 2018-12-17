<?php
/**
 * Created by PhpStorm.
 * User: wyang
 * Date: 2018/12/17
 * Time: 14:25
 */

namespace Job;

use Pheanstalk\Pheanstalk;

class Common
{
    public function put($obj)
    {
        $pheanstalk = Pheanstalk::create('127.0.0.1');
        $pheanstalk->useTube('demo')->put($obj);
    }
}
