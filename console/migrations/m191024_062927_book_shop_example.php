<?php

use yii\db\Migration;

/**
 * Class m191024_062927_book_shop_example
 */
class m191024_062927_book_shop_example extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createBooks();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {   
        $this->dropTable('book');
    }

    private function createBooks()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'author' => $this->string(),
            'year_published' => $this->integer(),
            'manufacturer' => $this->string(),
        ]);

        $this->insert('book', [
            'id' => 1,
            'name' => 'Шантарам',
            'author' => 'Грегориw Робертс',
            'year_published' => '2015',
            'manufacturer' => 'Sigma',
        ]);

        $this->insert('book', [
            'id' => 2,
            'name' => '1984',
            'author' => 'Джордж Оруэл',
            'year_published' => '2014',
            'manufacturer' => 'Sigma',
        ]);

        $this->insert('book', [
            'id' => 3,
            'name' => 'Цветы для Элджернона',
            'author' => 'Даниел Киз',
            'year_published' => '2007',
            'manufacturer' => 'Ecsmo',
        ]);

        $this->insert('book', [
            'id' => 4,
            'name' => 'Один',
            'author' => 'Ричард Берд',
            'year_published' => '2008',
            'manufacturer' => 'Williams',
        ]);

        $this->insert('book', [
            'id' => 5,
            'name' => 'Тень горы',
            'author' => 'Грегориw Робертс',
            'year_published' => '2010',
            'manufacturer' => 'Williams',
        ]);

        $this->insert('book', [
            'id' => 6,
            'name' => 'Паттерны проектирования',
            'author' => 'Элизабет Фримен',
            'year_published' => '2010',
            'manufacturer' => 'Standard',
        ]);

        $this->insert('book', [
            'id' => 7,
            'name' => 'Design Patterns',
            'author' => 'Эрих Гамма',
            'year_published' => '2005',
            'manufacturer' => 'Standard',
        ]);

        $this->insert('book', [
            'id' => 8,
            'name' => 'Эверест',
            'author' => 'Анатолий Букреев',
            'year_published' => '1996',
            'manufacturer' => 'Ecsmo',
        ]);

    }
}
