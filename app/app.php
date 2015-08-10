<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/pingpong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__.'/../views'

    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('pphome.html.twig');

    });

    $app->get("/results", function() use ($app) {
        $new_PingPong = new PingPong;
        $output_result = $new_PingPong->numbers($_GET['number']);
        return $app['twig']->render('results.html.twig', array('result'=>$output_result));
    });

    return $app;

 ?>
