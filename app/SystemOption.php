<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 系统配置模型
 *
 * @author raoyc <raoyc2009@gmail.com>
 */
class SystemOption extends Model
{

    protected $table = 'system_options';

    public $timestamps = false;  //关闭自动更新时间戳
}
