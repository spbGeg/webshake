<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 26.03.2020
 * Time: 9:10
 */

include __DIR__ .'/../header.php'; ?>
<h1><?= $article['name'] ?></h1>
<p><?= $article['text'] ?></p>
<p><b>Автор <?= $article['nickname'] ?></b></p></p>

<? var_dump($article) ?>
<? include __DIR__ .'/../footer.php'; ?>
