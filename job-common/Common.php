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
    public function put($obj, $host, $port = 11300)
    {
        $pheanstalk = Pheanstalk::create($host, $port);
        return $pheanstalk->useTube('demo')->put($obj);
    }
}
