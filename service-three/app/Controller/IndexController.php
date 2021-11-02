<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\DbConnection\Db;

class IndexController extends AbstractController
{
    public function index()
    {
        return Db::select(
            'SELECT * FROM `movimentacoes`'
        );
    }

    public function store()
    {
        return Db::insert(
            'INSERT INTO movimentacoes (cpf, ultima_consulta, ultima_compra) VALUES (?, ?, ?)', [
                '999.999.999-99',
                '2021-10-31 00:00:00',
                json_encode([
                    'valor' => rand(200, 9000)
                ])
            ]
        );
    }
}
