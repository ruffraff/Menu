<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LanguageController extends AbstractController
{
    /**
     * @Route("/language/{_locale}", name="language_switch")
     */
    #[Route("/language/{_locale}", name:"language_switch")]
    public function switchLanguage(Request $request, $_locale = 'en')
    {
        $request->getSession()->set('_locale', $_locale);
        
        // redirect to the referer page, if available
        $referer = $request->headers->get('referer');
        if ($referer) {
                // verifica se l'URL di provenienza contiene il parametro _locale
             // verifica se l'URL di provenienza contiene il parametro _locale
            // sostituisce la lingua nell'URL di provenienza con la nuova lingua
            if (strpos($referer, '/en/') !== false) {
                $referer = str_replace('/en/', '/' . $_locale . '/', $referer);
            } elseif (strpos($referer, '/es/') !== false) {
                $referer = str_replace('/es/', '/' . $_locale . '/', $referer);
            } elseif (strpos($referer, '/it/') !== false) {
                $referer = str_replace('/it/', '/' . $_locale . '/', $referer);
            } else {
                // se la lingua non è indicata nell'URL, aggiunge il nuovo valore di _locale all'URL di provenienza
                $referer .= (strpos($referer, '?') === false ? '?' : '&') . '_locale=' . $_locale;
            }
            return $this->redirect($referer);
        }
        // otherwise, redirect to the homepage
        return $this->redirectToRoute('meal');
    }
}