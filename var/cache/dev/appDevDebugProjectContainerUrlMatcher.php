<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        // categoriaticket_lista
        if ($pathinfo === '/Categoria') {
            return array (  '_controller' => 'AppBundle\\Controller\\CategoriaTicketController::indexAction',  '_route' => 'categoriaticket_lista',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // historialticket_lista
        if ($pathinfo === '/HistorialTicket') {
            return array (  '_controller' => 'AppBundle\\Controller\\HistorialTicketController::indexAction',  '_route' => 'historialticket_lista',);
        }

        // notas_lista
        if ($pathinfo === '/Notas') {
            return array (  '_controller' => 'AppBundle\\Controller\\NotasController::indexAction',  '_route' => 'notas_lista',);
        }

        // roles_lista
        if ($pathinfo === '/roles') {
            return array (  '_controller' => 'AppBundle\\Controller\\RolesController::indexAction',  '_route' => 'roles_lista',);
        }

        // ticket_lista
        if ($pathinfo === '/Ticket') {
            return array (  '_controller' => 'AppBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket_lista',);
        }

        // usuariocategoria_lista
        if ($pathinfo === '/UsuarioCategoria') {
            return array (  '_controller' => 'AppBundle\\Controller\\UsuarioCategoriaController::indexAction',  '_route' => 'usuariocategoria_lista',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_insertar
            if ($pathinfo === '/usuario/nuevo') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_insertar',);
            }

            // usuario_lista
            if ($pathinfo === '/usuario/vista') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::listaAction',  '_route' => 'usuario_lista',);
            }

            // delete_usuarios
            if (0 === strpos($pathinfo, '/usuario/delete') && preg_match('#^/usuario/delete/(?P<idUsuario>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_delete_usuarios;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_usuarios')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_delete_usuarios:

            // get_usuarios
            if ($pathinfo === '/usuario/lista') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_usuarios;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::getAllUsuarios',  '_route' => 'get_usuarios',);
            }
            not_get_usuarios:

            // app_usuario_update
            if (0 === strpos($pathinfo, '/usuario/update') && preg_match('#^/usuario/update/(?P<idUsuario>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_app_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_usuario_update')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_app_usuario_update:

            // usuario_buscareditar
            if (0 === strpos($pathinfo, '/usuario/editar') && preg_match('#^/usuario/editar/(?P<idUsuario>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_buscareditar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_buscareditar')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editarAction',));
            }
            not_usuario_buscareditar:

            // get_usuario
            if (0 === strpos($pathinfo, '/usuario/get') && preg_match('#^/usuario/get/(?P<idUsuario>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_usuario;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_usuario')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::getUsuario',));
            }
            not_get_usuario:

            // update_usuario
            if (preg_match('#^/usuario/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_update_usuario;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_usuario')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::updateUsuario',));
            }
            not_update_usuario:

            // guardar_usuario
            if ($pathinfo === '/usuario/insertar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_guardar_usuario;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::postUsuario',  '_route' => 'guardar_usuario',);
            }
            not_guardar_usuario:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
