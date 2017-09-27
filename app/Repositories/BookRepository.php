<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2017/09/28
 * Time: 0:27
 */

namespace App\Repositories;

class BookRepository
{
    /** @var array $books */
    protected $books = [
        [
            'id' => 1,
            'title' => 'Laravelリファレンス',
        ]
    ];

    /**
     * @return array
     */
    public function getReferenceBooks()
    {
        return $this->books;
    }
}