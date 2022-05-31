<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DoctrineTest extends WebTestCase
{

    /** @dataProvider dataProvider */
    public function testSomething(int $iterator): void
    {
        $client = static::createClient();
        $client->request('GET', '/test');
        $this->assertResponseIsSuccessful();
    }

    public function dataProvider(): \Generator
    {
        for ($i = 0; $i < 1800; $i++) {
            yield [$i];
        }
    }
}
