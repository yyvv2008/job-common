<?php
/**
 * Created by PhpStorm.
 * User: wyang
 * Date: 2018/12/17
 * Time: 14:25
 */

namespace Job;

use IJob\IJob;
use Pheanstalk\Pheanstalk;

abstract class BaseJob implements IJob
{
    public function exec($obj)
    {

    }

    public function put($obj, $host, $port = 11300)
    {
        $pheanstalk = Pheanstalk::create($host, $port);
        return $pheanstalk->useTube('demo')->put($obj);
    }
}
