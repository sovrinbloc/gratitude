<?php

namespace GratitudeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListControllerTest extends WebTestCase
{
    public function testPost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post');
    }

    public function testValidate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/validate');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/view');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/remove');
    }

    public function testShare()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/share');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list');
    }

    public function testRandom()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/random');
    }

    public function testHint()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hint');
    }

}
