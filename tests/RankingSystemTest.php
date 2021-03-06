<?php

/**
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */
namespace Demo\Tests;

use Demo\UrbanDictionary\RankWord;
use PHPUnit_Framework_TestCase;

class RankingSystemTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test to see if an entry can be retrieved.
     */
    public function testRankWord()
    {
        $wordOccurence = new RankWord();
        $result = $wordOccurence->rankWord('Prosper has finished it Tight Tight Tight');
        $this->assertEquals(['Tight' => 3, 'Prosper' => 1, 'has' => 1, 'finished' => 1, 'it' => 1], $result);
    }
}
