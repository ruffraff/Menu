<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\MacroElementRepository;
use App\Repository\MicroElementRepository;
use App\Repository\FoodRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class RecipeController extends AbstractController
{
    // #[Route('/recipe', name: 'app_recipe')]
    // public function index(): Response
    // {
    //     return $this->render('recipe/index.html.twig', [
    //         'controller_name' => 'RecipeController',
    //     ]);
    // }
    
    private $foodRepository;
    private $logger;

    public function __construct(
        FoodRepository $foodRepository,LoggerInterface $logger
    ) {
        $this->foodRepository = $foodRepository;
        $this->logger = $logger;
        // $this->session = $session;
    }

    

    

   


    #[Route('/recipe', name: 'app_recipe')]
    /**
     * index
     *
     * @return Response
     */
    public function index(Request $request): Response
    {
        $request->getSession()->set('_locale', $request->getSession()->get('_locale'));
        // Qui dovrai generare le liste listFoods e listMeal, ad esempio caricandole dal database o creandole manualmente.
        // In questo esempio, utilizzerò un array di esempio.
       
         
       
      

        $listFoods = [
            [
                'id' => 1,
                'name' => 'Mela',
                'type' => 'Frutta',
                'water' => 85,
                'protein' => 0.3,
                'fat' => 0.4,
                'carbohydrate' => 14,
                'fiber' => 2.4
            ],
            // Altri alimenti...
        ];
//assegna a listFood i valori di foods secondo la struttura di listFood sopra
     


        $selectedFoods = [
            [
                'id' => 1,
                'name' => 'Mela',
                'type' => 'Frutta',
                'water' => 85,
                'protein' => 0.3,
                'fat' => 0.4,
                'carbohydrate' => 14,
                'fiber' => 2.4
            ]
        ];


          // Calcola la somma dei macronutrienti per gli alimenti in listMeal
    $macronutrienti = [
        'water' => 0,
        'protein' => 0,
        'fat' => 0,
        'carbohydrate' => 0,
        'fiber' => 0,
    ];

    $selectedFoods = $request->getSession()->get('lista');


    foreach ($selectedFoods as $alimento) {
        if (is_array($alimento)) {
            $macronutrienti['water'] += isset($alimento['water']) ? floatval($alimento['water']) : 0;
            $macronutrienti['protein'] += isset($alimento['protein']) ? floatval($alimento['protein']) : 0;
            $macronutrienti['fat'] += isset($alimento['fat']) ? floatval($alimento['fat']) : 0;
            $macronutrienti['carbohydrate'] += isset($alimento['carbohydrate']) ? floatval($alimento['carbohydrate']) : 0;
            $macronutrienti['fiber'] += isset($alimento['fiber']) ? floatval($alimento['fiber']) : 0;
        }
    }

    // Alcuni dati di esempio per le ricette inserite
    $ricetteInserite = [
        [
            'id' => 1,
            'nome' => 'Pasta al Pomodoro',
            'descrizione' => 'Una deliziosa pasta condita con salsa di pomodoro fresco.',
        ],
        [
            'id' => 2,
            'nome' => 'Insalata Caprese',
            'descrizione' => 'Un insalata fresca con pomodori, mozzarella e basilico.',
        ],
        [
            'id' => 3,
            'nome' => 'Tiramisù',
            'descrizione' => 'Un classico dolce italiano a base di savoiardi, caffè e crema al mascarpone.',
        ],
    ];

    
  
        return $this->render('recipe/index.html.twig', [
            'selectedFoods' => $selectedFoods,
            'macronutrients' => $macronutrienti,
            'ricetteInserite' => $ricetteInserite,
        ]);
    }

}
