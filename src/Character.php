<?php
namespace Game;

/**
 * Class Character
 *
 * @package Game
 * @author: Stephane Goyon <stephane.goyon@gmail.com>
 */
class Character
{
    /**
     * @var int
     */
    public $life;
    public $damage = 10;
    
    /**
     * Character constructor.
     *
     * @param int $life optionnal
     */
    public function __construct(int $life = 100)
    {
        $this->life = $life;
    }

    /**
     * return Hello
     *
     * @return string
     */
    public function sayHello(): string
    {
        return 'Hello';
    }

    public function attack(Character $target)
    {
        $target->life = $target->life - $this->damage;
    }
}
