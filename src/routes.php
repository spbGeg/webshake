<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 19.03.2020
 * Time: 15:43
 */

return[
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^buy/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBuy'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
];