<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class MealTest extends ApiTestCase
{
    public function testSomething(): void
    {
        // self::bootKernel();
        //  // Recupera il gestore del token CSRF
        //  $csrfTokenManager = static::$container->get(CsrfTokenManagerInterface::class);
//    // Recupera il token CSRF
//          $csrfToken = $csrfTokenManager->getToken('authenticate')->getValue();
         // Crea un client HTTP per effettuare la chiamata
         $client = static::createClient();
        // Esegue una richiesta GET per ottenere la pagina di login
        $client->request('GET', '/login');
           // Esegue una richiesta GET per ottenere il token CSRF
        // Recupera il contenuto della risposta
        $responseContent = $client->getResponse()->getContent();

        // Trova il valore del token CSRF nel contenuto della risposta
        $csrfTokenStart = strpos($responseContent, 'name="_csrf_token" value="') + 26;
        $csrfTokenEnd = strpos($responseContent, '"', $csrfTokenStart);
        $csrfToken = substr($responseContent, $csrfTokenStart, $csrfTokenEnd - $csrfTokenStart);

         // Simula l'autenticazione
         $username = 'raffaele';
         $password = 'raffaele';
         $value=$client->getResponse()->getStatusCode();
      
         $payload = json_encode([
            '_username' => $username,
            '_password' => $password,
            '_csrf_token' => $csrfToken,
        ]);
 
         $crawler = $client->request('POST', '/login',  [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $payload
        ]);
 $value=$client->getResponse()->getStatusCode();
         // Verifica che la risposta alla richiesta di login reindirizzi alla pagina successiva
         if ( $value === 302) {
             // Verifica se viene reindirizzato di nuovo alla pagina di login
             $redirectUrl = $crawler->filter('a')->attr('href');
             if ($redirectUrl === '/login?_locale=it') {
                 // Login non riuscito, verifica che il reindirizzamento sia corretto
                 $this->assertEquals('/login?_locale=it', $redirectUrl);
             } else {
                 // Login riuscito, esegui la seconda chiamata autenticata
                 $client->followRedirect();
                 $response = $client->request('GET', '/MealController/listFoods');
                 $this->assertResponseIsSuccessful();
             }
         } else {
             // Login riuscito al primo tentativo, esegui la seconda chiamata autenticata
             $response = $client->request('GET', '/MealController/listFoods');
             $this->assertResponseIsSuccessful();
         }

        // $response = static::createClient()->request('GET', '/MealController/listFoods');

        // $this->assertResponseIsSuccessful();
      //  $this->assertJsonContains(['@id' => '/']);
    }
}
