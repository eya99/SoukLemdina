<?php

namespace LocalBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LocalControllerTest extends WebTestCase
{
    public function testAffiche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Affiche');
    }

    public function testSupprime()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Supprime');
    }

    public function testModifie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Modifie');
    }

    public function testAjout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Ajout');
    }

}
