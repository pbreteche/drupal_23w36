<?php

namespace Drupal\formation_1\Controller;

use Symfony\Component\HttpFoundation\Response;

class Formation1Controller {
  public function index(): array|Response
  {
      return new Response('<p>Contenu de ma page</p>');
  }

  public function index2(): array|Response
  {
    return [
      'content' => [
        '#type' => 'item',
        '#markup' => '<p>Contenu de ma page</p>',
      ]
    ];
  }
  public function index3(): array|Response
  {
    return [
      'content' => [
        '#theme' => 'formation_1_index_3',
        '#title' => 'Contenu de ma page',
      ]
    ];
  }
}
