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

    /**
     * @param int $id
     * @return array
     * @throw \Exception
     */
    public function getReferenceBook($id = null)
    {
        if (is_null($id)) {
            throw new \Exception;
        }
        foreach ($this->books as $book) {
            if ($book['id'] === $id) {
                return $book;
            }
        }
        return null;
    }

}