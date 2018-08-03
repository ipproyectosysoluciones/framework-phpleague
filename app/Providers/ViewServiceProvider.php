<?php

  namespace Application\Providers;

  use Application\Services\Twig;
  use League\Container\ServiceProvider\AbstractServiceProvider;


  class ViewServiceProvider extends AbstractServiceProvider {

    /**
     * @var array
     */
    protected $provides = [
      Twig::class
    ];

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function register()
    {
      $this->getContainer()->add(Twig::class)->withArgument(
        $this->getContainer()->get('response')
      );
    }
  }