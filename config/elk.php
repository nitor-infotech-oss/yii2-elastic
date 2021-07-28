<?php
return [
    //....
    
    'class' => 'yii\elasticsearch\Connection',
    'nodes' => [
        ['http_address' => '127.0.0.1:9200'],
        // configure more hosts if you have a cluster
    ],
    // set autodetectCluster to false if you don't want to auto detect nodes
    // 'autodetectCluster' => false,
    'dslVersion' => 7, // default is 5
        
];