<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            if ($pathinfo === '/usuario/cargar') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_insertar',);
            }

            // usuario_lista
            if ($pathinfo === '/usuario/vista') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::listaAction',  '_route' => 'usuario_lista',);
            }

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
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_usuario_update')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::updateAction',));
            }

            // get_usuario
            if (0 === strpos($pathinfo, '/usuario/get') && preg_match('#^/usuario/get/(?P<idUsuario>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_usuario;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_usuario')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::getUsuario',));
            }
            not_get_usuario:

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
