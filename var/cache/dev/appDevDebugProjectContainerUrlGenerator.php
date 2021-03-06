<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoriaticket_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CategoriaTicketController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'historialticket_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HistorialTicketController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/HistorialTicket',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notas_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NotasController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Notas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'roles_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RolesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ticket_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TicketController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Ticket',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuariocategoria_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioCategoriaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/UsuarioCategoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_insertar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::listaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/vista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_usuarios' => array (  0 =>   array (    0 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',  ),  2 =>   array (    'idUsuario' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_usuarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::getAllUsuarios',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_usuario_update' => array (  0 =>   array (    0 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::updateAction',  ),  2 =>   array (    'idUsuario' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_buscareditar' => array (  0 =>   array (    0 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::editarAction',  ),  2 =>   array (    'idUsuario' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_usuario' => array (  0 =>   array (    0 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::getUsuario',  ),  2 =>   array (    'idUsuario' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_usuario' => array (  0 =>   array (    0 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::updateUsuario',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'guardar_usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsuarioController::postUsuario',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/insertar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
