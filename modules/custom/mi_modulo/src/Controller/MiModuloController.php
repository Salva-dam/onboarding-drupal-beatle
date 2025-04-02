<?php

namespace Drupal\mi_modulo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\mi_modulo\Service\MiServicio;
use Symfony\Component\HttpFoundation\Response;

class MiModuloController extends ControllerBase {
  protected $miServicio;

  public function __construct(MiServicio $miServicio) {
    $this->miServicio = $miServicio;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('mi_modulo.mi_servicio')
    );
  }

  public function mostrarMensaje() {
    return [
      '#markup' => '<h1>' . $this->miServicio->mensajePersonalizado() . '</h1>',
    ];
  }

  public function pruebaLogger() {
    \Drupal::logger('mi_modulo')->notice('Este es un mensaje de prueba en el log.');
    \Drupal::logger('mi_modulo')->warning('Este es un mensaje de advertencia.');
    \Drupal::logger('mi_modulo')->error('Este es un mensaje de error.');

    return new Response("Mensajes registrados en el log.");
  }
}
