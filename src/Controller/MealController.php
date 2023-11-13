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


class MealController extends AbstractController
{
    private $foodRepository;
    private $logger;

    public function __construct(
        FoodRepository $foodRepository,LoggerInterface $logger
    ) {
        $this->foodRepository = $foodRepository;
        $this->logger = $logger;
    }


    #[Route('/{_locale}/meals/meal/{name}/{type}', name: 'meal', defaults: ['name' => null, 'type' => null], methods: ['GET', 'HEAD'])]   
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
        $type = $request->query->get('type');
        $search = $request->query->get('search');
         
        $foods = $this->foodRepository->findFoodsWithMacroAndMicroElement($type,$search);
        foreach ($foods as $food) {
        $this->logger->info('Food: '.$food->getFoodName());
            
            $this->logger->info('MacroElement: '.$food->getMacroElement()->getProtein());
            
            // foreach ($food->getMicroElements() as $microElement) {
            //    // $this->logger->info('MicroElement: '.$microElement->getName());
            // }
        }

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
        $listFoods = $foods;


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

    foreach ($selectedFoods as $alimento) {
        if (is_array($alimento)) {
            $macronutrienti['water'] += isset($alimento['water']) ? floatval($alimento['water']) : 0;
            $macronutrienti['protein'] += isset($alimento['protein']) ? floatval($alimento['protein']) : 0;
            $macronutrienti['fat'] += isset($alimento['fat']) ? floatval($alimento['fat']) : 0;
            $macronutrienti['carbohydrate'] += isset($alimento['carbohydrate']) ? floatval($alimento['carbohydrate']) : 0;
            $macronutrienti['fiber'] += isset($alimento['fiber']) ? floatval($alimento['fiber']) : 0;
        }
    }

  
        return $this->render('meal/index.html.twig', [
            'foodList' => $listFoods,
            'selectedFoods' => $selectedFoods,
            'macronutrients' => $macronutrienti,
            'foods' => $foods,
        ]);
    }

    #[Route('/MealController/listFoods', name: 'meal_listFoods', methods: ['GET'] )]
    /**
     * listFoods
     *
     * @return JsonResponse
     */
    public function listFoods(): JsonResponse
    {
        // Qui dovrai generare la lista listFoods, ad esempio caricandola dal database o creandola manualmente.
        // In questo esempio, utilizzerò un array di esempio.

        $listFoods = [
            [
                'id' => 1,
                'nome' => 'Mela',
                'tipologia' => 'Frutta',
                'acqua' => 85,
                'proteine' => 0.3,
                'lipidi' => 0.4,
                'carboidrati' => 14,
                'fibra' => 2.4
            ],
            // Altri alimenti...
        ];

        return new JsonResponse($listFoods);
    }

    // Implementa qui ulteriori metodi, come l'aggiunta di alimenti al pasto, se necessario.

    /**
     * show
     *
     * @return Response
     */
    #[Route('/meals/show', name: 'show')]  
    public function show(): Response
    {
        return $this->render('meal/show.html.twig', [
            'controller_name' => 'MealController',
        ]);
    }


    /**
     * salvaLista
     *
     * @return Response
     */
    #[Route('/meals/salvaLista', name: 'salvaLista')] 
    public function salvaLista(Request $request, SessionInterface $session)
    {
        $lista = json_decode($request->getContent(), true)['lista'];
        $session->set('lista', $lista);
        return new Response();
    }

    
}
