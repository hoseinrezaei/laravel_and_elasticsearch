<?php

namespace App\Http\Controllers;

use Elastic\Elasticsearch\ClientBuilder;
use Elastic\Transport\Exception\NoNodeAvailableException;

use Elastic\Transport\NodePool\Resurrect\ElasticsearchResurrect;
use Elastic\Transport\NodePool\Selector\RoundRobin;
use Elastic\Transport\NodePool\SimpleNodePool;

use Elastic\Transport\TransportBuilder;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function ping()
    {


    }
    public function show()
    {
//        dd('test');
        $client = ClientBuilder::create()
            ->build();
//        dd($client);
//        $nodePool = new SimpleNodePool(
//            new RoundRobin(),
//            new ElasticsearchResurrect()
//        );
//
//        $transport = TransportBuilder::create()
//            ->setHosts(['localhost:9200'])
//            ->setNodePool($nodePool)
//            ->build();

        try {
            $reponse = $client->info();
            dd($reponse);
            return $reponse;
        } catch (NoNodeAvailableException $e) {
            printf("No nodes alive: %s", $e->getMessage());
        }


        dd('end');
//        var_dump($client);

//        return response()->json($client);

//        dd($client);
//        $response = $client->info();
//        return $response;

//        dd($client);
//        $params = [
//            'index' => 'test',
//            'body' =>  [
//                'query' => [
//                    'match' => [
//                        "id" => 1
//                    ],
//                ],
//            ]
//        ];

        $params = [
            'index' => 'test',
            'id'    => 1
        ];



//        dd('ok');

//        $response = $client->search($params);


        // Get doc at /my_index/_doc/my_id
        $response = $client->get($params);

        return $response;

    }

    public function create()
    {
//        $client = ClientBuilder::create()
//            ->setHosts(config('database.connections.elasticsearch.hosts'))
//            ->build();
//        // Example search query
//        $params = [
//            "_index" => "api",
//            "type" => "data",
//            "body" =>  [
//                "id" => 1,
//                "date" => "1402-05-10",
//                "title" => "post",
//                "desc" => "yek matn test",
//                "persian" => "فارسی ببینیم چی میشه",
//                "source" => "mamad"
//            ]
//
////            {
////                "id" : 1,
////    "date" : "1402-05-10",
////    "title" : "post",
////    "desc" : "yek matn test",
////    "persian" : "فارسی ببینیم چی میشه",
////    "source" : "mamad"
////}
//
////            'index' => 'my_index',
////            'body' => [
////                'query' => [
////                    'match' => [
////                        'field' => 'search_keyword',
////                    ],
////                ],
////            ],
//        ];
//
//
//
//        $response = $client->create($params);
//
//        return $response;
    }
}
