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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // erp_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'erp_homepage');
            }

            return array (  '_controller' => 'ERPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'erp_homepage',);
        }

        // pageNotFound
        if ('/404' === $pathinfo) {
            return array (  '_controller' => 'ERPBundle\\Controller\\PageNotFoundController::pageNotFoundAction',  '_route' => 'pageNotFound',);
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // super_admin_header
            if ('/backend/header' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::headerAction',  '_route' => 'super_admin_header',);
            }

            // super_admin_homepage
            if ('/backend/index' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::indexAction',  '_route' => 'super_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/backend/etablissement')) {
                // super_admin_etablissement
                if (preg_match('#^/backend/etablissement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_etablissement')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::EtablissementAction',));
                }

                // super_admin_etablissement_create
                if (0 === strpos($pathinfo, '/backend/etablissement/create') && preg_match('#^/backend/etablissement/create/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_etablissement_create')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::createEtablissementAction',));
                }

                if (0 === strpos($pathinfo, '/backend/etablissement/config')) {
                    // super_admin_etablissement_config
                    if (preg_match('#^/backend/etablissement/config/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_etablissement_config')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::configEtablissementAction',));
                    }

                    // super_admin_etablissement_add_config
                    if ('/backend/etablissement/config/add' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::ajoutConfigEtablissementAction',  '_route' => 'super_admin_etablissement_add_config',);
                    }

                }

                // super_admin_etablissement_admin
                if (0 === strpos($pathinfo, '/backend/etablissement/admin') && preg_match('#^/backend/etablissement/admin/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_etablissement_admin')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::addAdminEtablissementAction',));
                }

                // super_admin_etablissement_update
                if (0 === strpos($pathinfo, '/backend/etablissement/update') && preg_match('#^/backend/etablissement/update/(?P<etab>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_etablissement_update')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::updateEtablissementAction',));
                }

                // super_admin_etablissement_delete
                if (0 === strpos($pathinfo, '/backend/etablissement/delete') && preg_match('#^/backend/etablissement/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_etablissement_delete')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::deleteEtablissementAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/backend/client')) {
                // super_admin_client
                if ('/backend/client' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::ClientAction',  '_route' => 'super_admin_client',);
                }

                // super_admin_client_add
                if ('/backend/client/add' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::addClientAction',  '_route' => 'super_admin_client_add',);
                }

                // super_admin_client_delete
                if (0 === strpos($pathinfo, '/backend/client/delete') && preg_match('#^/backend/client/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_client_delete')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::deleteCompteClientAction',));
                }

                // super_admin_client_update
                if (0 === strpos($pathinfo, '/backend/client/update') && preg_match('#^/backend/client/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'super_admin_client_update')), array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::updateCompteClientAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_header
            if ('/admin/header' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\SuperAdmin\\SuperAdminController::headerAction',  '_route' => 'admin_header',);
            }

            // admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminRedirectionAction',  '_route' => 'admin_homepage',);
            }

            // admin_profil
            if ('/admin/profile' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminProfilAction',  '_route' => 'admin_profil',);
            }

            if (0 === strpos($pathinfo, '/admin/pa')) {
                // admin_parametrage
                if ('/admin/parametrage' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminParametrageAction',  '_route' => 'admin_parametrage',);
                }

                if (0 === strpos($pathinfo, '/admin/parent')) {
                    // admin_Parent
                    if (preg_match('#^/admin/parent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Parent')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::ParentAction',));
                    }

                    // admin_Parent_add
                    if (0 === strpos($pathinfo, '/admin/parent/add') && preg_match('#^/admin/parent/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Parent_add')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::addParentAction',));
                    }

                    // admin_Parent_update
                    if (0 === strpos($pathinfo, '/admin/parent/update') && preg_match('#^/admin/parent/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Parent_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::updateParentAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/paiement')) {
                    // admin_payment_index
                    if ('/admin/paiement' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_payment_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_payment_index');
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\PaymentController::indexAction',  '_route' => 'admin_payment_index',);
                    }
                    not_admin_payment_index:

                    // admin_payment_show
                    if (preg_match('#^/admin/paiement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_payment_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\PaymentController::showAction',));
                    }
                    not_admin_payment_show:

                    // admin_payment_new
                    if ('/admin/paiement/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_payment_new;
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\PaymentController::newAction',  '_route' => 'admin_payment_new',);
                    }
                    not_admin_payment_new:

                    // admin_payment_edit
                    if (preg_match('#^/admin/paiement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_payment_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\PaymentController::editAction',));
                    }
                    not_admin_payment_edit:

                    // admin_payment_delete
                    if (preg_match('#^/admin/paiement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_payment_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\PaymentController::deleteAction',));
                    }
                    not_admin_payment_delete:

                    // admin_Payment_update
                    if (0 === strpos($pathinfo, '/admin/paiement/payment/update') && preg_match('#^/admin/paiement/payment/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Payment_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\PaymentController::updatePaymentAction',));
                    }

                }

            }

            // admin_agenda
            if ('/admin/agenda' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminAgendaAction',  '_route' => 'admin_agenda',);
            }

            // admin_Appsense_index
            if ('/admin/appsense/index' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminAppsenseController::indexAction',  '_route' => 'admin_Appsense_index',);
            }

            // admin_notification
            if ('/admin/notification' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminNotificationAction',  '_route' => 'admin_notification',);
            }

            if (0 === strpos($pathinfo, '/admin/mail')) {
                // admin_mailBox
                if (preg_match('#^/admin/mail/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailBox')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminMailBoxAction',));
                }

                // admin_mailBox_Detail
                if (0 === strpos($pathinfo, '/admin/mail/detail') && preg_match('#^/admin/mail/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailBox_Detail')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminMailBoxDetailAction',));
                }

            }

            // methode_paiment
            if (0 === strpos($pathinfo, '/admin/mode') && preg_match('#^/admin/mode/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'methode_paiment')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::MethodePayementAction',));
            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                // admin_mailBox_send
                if ('/admin/send' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::AdminMailBoxSendAction',  '_route' => 'admin_mailBox_send',);
                }

                if (0 === strpos($pathinfo, '/admin/scolarite')) {
                    if (0 === strpos($pathinfo, '/admin/scolarite/filiere')) {
                        // admin_Filiere_index
                        if ('/admin/scolarite/filiere/index' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::filiereAction',  '_route' => 'admin_Filiere_index',);
                        }

                        // admin_Filiere_add
                        if ('/admin/scolarite/filiere/add' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addFiliereAction',  '_route' => 'admin_Filiere_add',);
                        }

                        // admin_Filiere_update
                        if (0 === strpos($pathinfo, '/admin/scolarite/filiere/update') && preg_match('#^/admin/scolarite/filiere/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Filiere_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::updateFiliereAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/scolarite/diplome')) {
                        // admin_Diplome_index
                        if ('/admin/scolarite/diplome/index' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::diplomeAction',  '_route' => 'admin_Diplome_index',);
                        }

                        // admin_Diplome_add
                        if ('/admin/scolarite/diplome/add' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addDiplomeAction',  '_route' => 'admin_Diplome_add',);
                        }

                        // admin_Diplome_update
                        if (0 === strpos($pathinfo, '/admin/scolarite/diplome/update') && preg_match('#^/admin/scolarite/diplome/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Diplome_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::updateDiplomeAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/scolarite/niveau')) {
                        // admin_Niveau_index
                        if ('/admin/scolarite/niveau/index' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::niveauAction',  '_route' => 'admin_Niveau_index',);
                        }

                        // admin_Niveau_add
                        if ('/admin/scolarite/niveau/add' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addNiveauAction',  '_route' => 'admin_Niveau_add',);
                        }

                        // admin_Niveau_update
                        if (0 === strpos($pathinfo, '/admin/scolarite/niveau/update') && preg_match('#^/admin/scolarite/niveau/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Niveau_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::updateNiveauAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/scolarite/annee')) {
                        // admin_Annee_index
                        if ('/admin/scolarite/annee/index' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::anneeAction',  '_route' => 'admin_Annee_index',);
                        }

                        // admin_Annee_add
                        if ('/admin/scolarite/annee/add' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addAnneeAction',  '_route' => 'admin_Annee_add',);
                        }

                        // admin_Annee_update
                        if (0 === strpos($pathinfo, '/admin/scolarite/annee/update') && preg_match('#^/admin/scolarite/annee/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Annee_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::updateAnneeAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/scolarite/specialite')) {
                        // admin_Specialite_index
                        if ('/admin/scolarite/specialite/index' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::specialiteAction',  '_route' => 'admin_Specialite_index',);
                        }

                        // admin_Specialite_add
                        if ('/admin/scolarite/specialite/add' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addSpecialiteAction',  '_route' => 'admin_Specialite_add',);
                        }

                        if (0 === strpos($pathinfo, '/admin/scolarite/specialite/u')) {
                            // admin_Specialite_update
                            if (0 === strpos($pathinfo, '/admin/scolarite/specialite/update') && preg_match('#^/admin/scolarite/specialite/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Specialite_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::updateSpecialiteAction',));
                            }

                            if (0 === strpos($pathinfo, '/admin/scolarite/specialite/unite/add')) {
                                // admin_Specialite_unite_add
                                if (preg_match('#^/admin/scolarite/specialite/unite/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Specialite_unite_add')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::specialiteUniteAddAction',));
                                }

                                // admin_unite_add
                                if (preg_match('#^/admin/scolarite/specialite/unite/add/(?P<id>[^/]++)/(?P<spec>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unite_add')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addUniteSpecialiteAction',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/scolarite/specialite/unite/update')) {
                                // admin_Specialite_unite_update
                                if (preg_match('#^/admin/scolarite/specialite/unite/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Specialite_unite_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::specialiteUniteUpdateAction',));
                                }

                                // admin_unite_update
                                if (preg_match('#^/admin/scolarite/specialite/unite/update/(?P<id>[^/]++)/(?P<spec>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unite_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::updateUniteSpecialiteAction',));
                                }

                            }

                        }

                        // admin_Specialite_delete
                        if (0 === strpos($pathinfo, '/admin/scolarite/specialite/supprimer') && preg_match('#^/admin/scolarite/specialite/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Specialite_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::deleteSpecialiteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/scolarite/emploi')) {
                        // admin_Emploi_index
                        if ('/admin/scolarite/emploi/index' === $pathinfo) {
                            return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::emploiAction',  '_route' => 'admin_Emploi_index',);
                        }

                        if (0 === strpos($pathinfo, '/admin/scolarite/emploi/add')) {
                            // admin_Emploi_add
                            if ('/admin/scolarite/emploi/add' === $pathinfo) {
                                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addEmploiAction',  '_route' => 'admin_Emploi_add',);
                            }

                            // admin_Emploi_Enseignant_add
                            if ('/admin/scolarite/emploi/add/enseignant' === $pathinfo) {
                                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::addEmploiEnseignantAction',  '_route' => 'admin_Emploi_Enseignant_add',);
                            }

                        }

                        // admin_Emploi_delete
                        if (0 === strpos($pathinfo, '/admin/scolarite/emploi/supprimer') && preg_match('#^/admin/scolarite/emploi/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Emploi_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\ScolariteController::deleteEmploiAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/status')) {
                    // admin_status_index
                    if ('/admin/status' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_status_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_status_index');
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\StatusController::indexAction',  '_route' => 'admin_status_index',);
                    }
                    not_admin_status_index:

                    // admin_status_show
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_status_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\StatusController::showAction',));
                    }
                    not_admin_status_show:

                    // admin_status_new
                    if ('/admin/status/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_status_new;
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\StatusController::newAction',  '_route' => 'admin_status_new',);
                    }
                    not_admin_status_new:

                    // admin_status_edit
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_status_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\StatusController::editAction',));
                    }
                    not_admin_status_edit:

                    // admin_status_delete
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_status_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\StatusController::deleteAction',));
                    }
                    not_admin_status_delete:

                    // admin_Status_update
                    if (0 === strpos($pathinfo, '/admin/status/status/update') && preg_match('#^/admin/status/status/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Status_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\StatusController::updateStatusAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/slice')) {
                    // admin_slice_index
                    if ('/admin/slice' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_slice_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_slice_index');
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::indexAction',  '_route' => 'admin_slice_index',);
                    }
                    not_admin_slice_index:

                    // admin_slice_show
                    if (preg_match('#^/admin/slice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_slice_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slice_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::showAction',));
                    }
                    not_admin_slice_show:

                    // admin_slice_new
                    if ('/admin/slice/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_slice_new;
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::newAction',  '_route' => 'admin_slice_new',);
                    }
                    not_admin_slice_new:

                    // admin_slice_edit
                    if (preg_match('#^/admin/slice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_slice_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slice_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::editAction',));
                    }
                    not_admin_slice_edit:

                    // admin_slice_delete
                    if (preg_match('#^/admin/slice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_slice_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slice_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::deleteAction',));
                    }
                    not_admin_slice_delete:

                    // admin_slice_update
                    if (0 === strpos($pathinfo, '/admin/slice/slice/update') && preg_match('#^/admin/slice/slice/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slice_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::updateSliceAction',));
                    }

                    // admin_slice_payment
                    if (preg_match('#^/admin/slice/(?P<id>[^/]++)/tranche/payment$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_slice_payment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slice_payment')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SliceController::paymentAction',));
                    }
                    not_admin_slice_payment:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/r')) {
                // admin_rapport
                if ('/admin/rapport' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::rapportAction',  '_route' => 'admin_rapport',);
                }

                // admin_Retard_index
                if ('/admin/retard/index' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminRetardController::indexAction',  '_route' => 'admin_Retard_index',);
                }

                // admin_Retard_detail
                if (0 === strpos($pathinfo, '/admin/retard/detail') && preg_match('#^/admin/retard/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Retard_detail')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminRetardController::retardDetailAction',));
                }

            }

            // admin_verification_username
            if (0 === strpos($pathinfo, '/admin/username') && preg_match('#^/admin/username/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_verification_username')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::usernameAction',));
            }

            if (0 === strpos($pathinfo, '/admin/unite')) {
                // admin_Unite_index
                if ('/admin/unite/index' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::indexAction',  '_route' => 'admin_Unite_index',);
                }

                // admin_Unite_add
                if ('/admin/unite/add' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::addUniteAction',  '_route' => 'admin_Unite_add',);
                }

                // admin_Unite_update
                if (0 === strpos($pathinfo, '/admin/unite/update') && preg_match('#^/admin/unite/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Unite_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::updateUniteAction',));
                }

                // admin_Unite_delete
                if (0 === strpos($pathinfo, '/admin/unite/delete') && preg_match('#^/admin/unite/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Unite_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::deleteUniteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/unite/matiere')) {
                    // admin_Matiere_add
                    if (0 === strpos($pathinfo, '/admin/unite/matiere/add') && preg_match('#^/admin/unite/matiere/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Matiere_add')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::addMatiereAction',));
                    }

                    // admin_Matiere_show
                    if (0 === strpos($pathinfo, '/admin/unite/matiere/show') && preg_match('#^/admin/unite/matiere/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Matiere_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::showMatiereAction',));
                    }

                    // admin_Matiere_update
                    if (0 === strpos($pathinfo, '/admin/unite/matiere/update') && preg_match('#^/admin/unite/matiere/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Matiere_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::updateMatiereAction',));
                    }

                    // admin_Matiere_delete
                    if (0 === strpos($pathinfo, '/admin/unite/matiere/delete') && preg_match('#^/admin/unite/matiere/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Matiere_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminUniteController::deleteMatiereAction',));
                    }

                }

            }

            // admin_verification_cin
            if (0 === strpos($pathinfo, '/admin/cin') && preg_match('#^/admin/cin/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_verification_cin')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminController::cinAction',));
            }

            if (0 === strpos($pathinfo, '/admin/class')) {
                // admin_Class_index
                if ('/admin/class/index' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminClassController::indexAction',  '_route' => 'admin_Class_index',);
                }

                // admin_Class_add
                if ('/admin/class/add' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminClassController::addClassAction',  '_route' => 'admin_Class_add',);
                }

                // admin_Class_update
                if (0 === strpos($pathinfo, '/admin/class/update') && preg_match('#^/admin/class/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Class_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminClassController::updateClassAction',));
                }

                // admin_Class_delete
                if (0 === strpos($pathinfo, '/admin/class/delete') && preg_match('#^/admin/class/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Class_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminClassController::deleteClassAction',));
                }

                // admin_Class_etudiant
                if (preg_match('#^/admin/class/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Class_etudiant')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminClassController::EtudiantClassAction',));
                }

            }

            // admin_delete_compte
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_compte')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::deleteCompteAction',));
            }

            if (0 === strpos($pathinfo, '/admin/e')) {
                if (0 === strpos($pathinfo, '/admin/employee')) {
                    // admin_Employee
                    if ('/admin/employee' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::EmployeeAction',  '_route' => 'admin_Employee',);
                    }

                    // admin_Employee_add
                    if ('/admin/employee/add' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::addEmployeeAction',  '_route' => 'admin_Employee_add',);
                    }

                    // admin_Employee_update
                    if (0 === strpos($pathinfo, '/admin/employee/update') && preg_match('#^/admin/employee/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Employee_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::updateEmployeeAction',));
                    }

                    // admin_Employee_show
                    if (0 === strpos($pathinfo, '/admin/employee/payment') && preg_match('#^/admin/employee/payment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_Employee_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Employee_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::showEmployeAction',));
                    }
                    not_admin_Employee_show:

                }

                elseif (0 === strpos($pathinfo, '/admin/enseignant')) {
                    // admin_Enseignant
                    if ('/admin/enseignant' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::EnseignantAction',  '_route' => 'admin_Enseignant',);
                    }

                    // admin_Enseignant_add
                    if ('/admin/enseignant/add' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::addEnseignantAction',  '_route' => 'admin_Enseignant_add',);
                    }

                    // admin_Enseignant_update
                    if (0 === strpos($pathinfo, '/admin/enseignant/update') && preg_match('#^/admin/enseignant/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Enseignant_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::updateEnseignantAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/entreprise')) {
                    // admin_Entreprise
                    if ('/admin/entreprise' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::EntrepriseAction',  '_route' => 'admin_Entreprise',);
                    }

                    // admin_Entreprise_add
                    if ('/admin/entreprise/add' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::addEntrepriseAction',  '_route' => 'admin_Entreprise_add',);
                    }

                    // admin_Entreprise_update
                    if (0 === strpos($pathinfo, '/admin/entreprise/update') && preg_match('#^/admin/entreprise/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Entreprise_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::updateEntrepriseAction',));
                    }

                    // admin_Entreprise_show
                    if (0 === strpos($pathinfo, '/admin/entreprise/payment') && preg_match('#^/admin/entreprise/payment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_Entreprise_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Entreprise_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::showEntrepriseAction',));
                    }
                    not_admin_Entreprise_show:

                    // admin_Entreprise_pdf
                    if ('/admin/entreprise/pdf' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::pdfAction',  '_route' => 'admin_Entreprise_pdf',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/etudiant')) {
                    // admin_Etudiant
                    if ('/admin/etudiant' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::EtudiantAction',  '_route' => 'admin_Etudiant',);
                    }

                    // admin_Etudiant_add
                    if ('/admin/etudiant/add' === $pathinfo) {
                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::addEtudiantAction',  '_route' => 'admin_Etudiant_add',);
                    }

                    // admin_Etudiant_update
                    if (0 === strpos($pathinfo, '/admin/etudiant/update') && preg_match('#^/admin/etudiant/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Etudiant_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::updateEtudiantAction',));
                    }

                    // admin_Etudiant_validation
                    if (0 === strpos($pathinfo, '/admin/etudiant/validation') && preg_match('#^/admin/etudiant/validation/(?P<id>[^/]++)/(?P<etat>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Etudiant_validation')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::validateEtudiantAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/etudiant/document')) {
                        // admin_etudiant_document
                        if (0 === strpos($pathinfo, '/admin/etudiant/document/add') && preg_match('#^/admin/etudiant/document/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_document')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::documentEtudiantAddAction',));
                        }

                        // admin_etudiant_show_document
                        if (preg_match('#^/admin/etudiant/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_show_document')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::documentEtudiantAction',));
                        }

                    }

                    // admin_Etudiant_show_all
                    if (0 === strpos($pathinfo, '/admin/etudiant/detail') && preg_match('#^/admin/etudiant/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Etudiant_show_all')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::etudiantShowAllAction',));
                    }

                    // admin_etudiant_detail
                    if (0 === strpos($pathinfo, '/admin/etudiant/show') && preg_match('#^/admin/etudiant/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_detail')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::etudiantDetailAction',));
                    }

                    // admin_Etudiant_slice
                    if (0 === strpos($pathinfo, '/admin/etudiant/tranche') && preg_match('#^/admin/etudiant/tranche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Etudiant_slice')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::etudiantSliceAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/etudiant/payment')) {
                        // admin_etudiant_payment
                        if (preg_match('#^/admin/etudiant/payment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_payment')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::paymentEtudiantAction',));
                        }

                        // admin_etudiant_payment_list
                        if (0 === strpos($pathinfo, '/admin/etudiant/payment/list') && preg_match('#^/admin/etudiant/payment/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_payment_list')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::paymentListEtudiantAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/etudiant/class')) {
                        // admin_etudiant_class
                        if (preg_match('#^/admin/etudiant/class/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_class')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::etudiantClassAction',));
                        }

                        // admin_etudiant_class_add
                        if (0 === strpos($pathinfo, '/admin/etudiant/class/add') && preg_match('#^/admin/etudiant/class/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etudiant_class_add')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminMembreController::addEtudiantClassAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/examen')) {
                    // admin_Examen
                    if ('/admin/examen' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_Examen;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_Examen');
                        }

                        return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminExamenController::indexAction',  '_route' => 'admin_Examen',);
                    }
                    not_admin_Examen:

                    // admin_Examen_delete
                    if (preg_match('#^/admin/examen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_Examen_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Examen_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminExamenController::deleteAction',));
                    }
                    not_admin_Examen_delete:

                    // admin_Examen_qualifier
                    if (preg_match('#^/admin/examen/(?P<id>[^/]++)/qualifier$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_Examen_qualifier;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Examen_qualifier')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\AdminExamenController::qualifierAction',));
                    }
                    not_admin_Examen_qualifier:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/type')) {
                // admin_type_index
                if ('/admin/type' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_type_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_type_index');
                    }

                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\TypeController::indexAction',  '_route' => 'admin_type_index',);
                }
                not_admin_type_index:

                // admin_type_show
                if (preg_match('#^/admin/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_type_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\TypeController::showAction',));
                }
                not_admin_type_show:

                // admin_type_new
                if ('/admin/type/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_type_new;
                    }

                    return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\TypeController::newAction',  '_route' => 'admin_type_new',);
                }
                not_admin_type_new:

                // admin_type_edit
                if (preg_match('#^/admin/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_type_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\TypeController::editAction',));
                }
                not_admin_type_edit:

                // admin_type_delete
                if (preg_match('#^/admin/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_admin_type_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\TypeController::deleteAction',));
                }
                not_admin_type_delete:

                // admin_Type_update
                if (0 === strpos($pathinfo, '/admin/type/payment/update') && preg_match('#^/admin/type/payment/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Type_update')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\TypeController::updateTypeAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant_homepage
            if ('/etudiant/index' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::indexAction',  '_route' => 'etudiant_homepage',);
            }

            if (0 === strpos($pathinfo, '/etudiant/p')) {
                // etudiant_profile
                if ('/etudiant/profile' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::ProfilAction',  '_route' => 'etudiant_profile',);
                }

                // etudiant_programme
                if ('/etudiant/programme' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::programmeAction',  '_route' => 'etudiant_programme',);
                }

                // etudiant_paiment
                if ('/etudiant/paiment' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::paimentAction',  '_route' => 'etudiant_paiment',);
                }

            }

            elseif (0 === strpos($pathinfo, '/etudiant/mail')) {
                // etudiant_mailBox
                if (preg_match('#^/etudiant/mail/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_mailBox')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::MailBoxAction',));
                }

                // etudiant_mailBoxDetail
                if (preg_match('#^/etudiant/mail/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_mailBoxDetail')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::MailBoxAction',));
                }

                // etudiant_mailBox_Detail
                if (0 === strpos($pathinfo, '/etudiant/mail/detail') && preg_match('#^/etudiant/mail/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_mailBox_Detail')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::MailBoxDetailAction',));
                }

            }

            // etudiant_mailBox_send
            if ('/etudiant/send' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::MailBoxSendAction',  '_route' => 'etudiant_mailBox_send',);
            }

            if (0 === strpos($pathinfo, '/etudiant/a')) {
                // etudiant_agenda
                if ('/etudiant/agenda' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::AgendaAction',  '_route' => 'etudiant_agenda',);
                }

                // etudiant_absence
                if ('/etudiant/absence' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::absenceAction',  '_route' => 'etudiant_absence',);
                }

                // etudiant_appsense_detail
                if (0 === strpos($pathinfo, '/etudiant/appsense') && preg_match('#^/etudiant/appsense/(?P<matiere>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_appsense_detail')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::appsenseDetailAction',));
                }

            }

            // etudiant_notification
            if ('/etudiant/notification' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::NotificationAction',  '_route' => 'etudiant_notification',);
            }

            // etudiant_note
            if ('/etudiant/note' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::noteAction',  '_route' => 'etudiant_note',);
            }

            // etudiant_cours
            if ('/etudiant/cours' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::coursAction',  '_route' => 'etudiant_cours',);
            }

            // etudiant_examen
            if ('/etudiant/examen' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::examenAction',  '_route' => 'etudiant_examen',);
            }

            // etudiant_emploi
            if ('/etudiant/emploi' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::emploiAction',  '_route' => 'etudiant_emploi',);
            }

        }

        elseif (0 === strpos($pathinfo, '/enseignant')) {
            // enseignant_homepage
            if ('/enseignant/index' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\EnseignantController::indexAction',  '_route' => 'enseignant_homepage',);
            }

            // enseignant_profil
            if ('/enseignant/profile' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\EnseignantController::EnseignantProfilAction',  '_route' => 'enseignant_profil',);
            }

            // enseignant_emploi
            if ('/enseignant/enseignant' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\EnseignantController::emploiAction',  '_route' => 'enseignant_emploi',);
            }

        }

        // etudiant_document
        if (0 === strpos($pathinfo, '/document') && preg_match('#^/document/(?P<id>[^/]++)/(?P<crypte>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_document')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::documentAction',));
        }

        // etudiant_preInscription
        if (preg_match('#^/(?P<etat>[^/]++)/pre_inscription$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_preInscription')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::preInscriptionAction',));
        }

        if (0 === strpos($pathinfo, '/form_')) {
            // form_filiere
            if (0 === strpos($pathinfo, '/form_filiere') && preg_match('#^/form_filiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_filiere')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::formFiliereAction',));
            }

            // form_specialite
            if (0 === strpos($pathinfo, '/form_specialite') && preg_match('#^/form_specialite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_specialite')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::formSpecialiteAction',));
            }

            // form_niveau
            if (0 === strpos($pathinfo, '/form_niveau') && preg_match('#^/form_niveau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_niveau')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::formNiveauAction',));
            }

            // form_diplome
            if (0 === strpos($pathinfo, '/form_diplome') && preg_match('#^/form_diplome/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_diplome')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Etudiant\\EtudiantController::formDiplomeAction',));
            }

        }

        // verification_username
        if (0 === strpos($pathinfo, '/username') && preg_match('#^/username/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'verification_username')), array (  '_controller' => 'ERPBundle\\Controller\\DefaultController::usernameAction',));
        }

        // verification_cin
        if (0 === strpos($pathinfo, '/cin') && preg_match('#^/cin/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'verification_cin')), array (  '_controller' => 'ERPBundle\\Controller\\DefaultController::cinAction',));
        }

        if (0 === strpos($pathinfo, '/cour')) {
            // cour_index
            if ('/cour' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_cour_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cour_index');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\CourController::indexAction',  '_route' => 'cour_index',);
            }
            not_cour_index:

            // cour_show
            if (preg_match('#^/cour/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_cour_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cour_show')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\CourController::showAction',));
            }
            not_cour_show:

            // cour_new
            if ('/cour/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_cour_new;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\CourController::newAction',  '_route' => 'cour_new',);
            }
            not_cour_new:

            // cour_edit
            if (preg_match('#^/cour/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_cour_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cour_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\CourController::editAction',));
            }
            not_cour_edit:

            // enseignant_delete_cours
            if (preg_match('#^/cour/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignant_delete_cours')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\CourController::deleteAction',));
            }

        }

        // verification_email
        if (0 === strpos($pathinfo, '/email') && preg_match('#^/email/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'verification_email')), array (  '_controller' => 'ERPBundle\\Controller\\DefaultController::emailAction',));
        }

        if (0 === strpos($pathinfo, '/examen')) {
            // examen_index
            if ('/examen' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_examen_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'examen_index');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::indexAction',  '_route' => 'examen_index',);
            }
            not_examen_index:

            // examen_show
            if (preg_match('#^/examen/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_examen_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_show')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::showAction',));
            }
            not_examen_show:

            // examen_new
            if ('/examen/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_examen_new;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::newAction',  '_route' => 'examen_new',);
            }
            not_examen_new:

            // examen_edit
            if (preg_match('#^/examen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_examen_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::editAction',));
            }
            not_examen_edit:

            // examen_delete
            if (preg_match('#^/examen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_examen_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::deleteAction',));
            }
            not_examen_delete:

            // examen_note
            if (preg_match('#^/examen/(?P<id>[^/]++)/affecter/note$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_examen_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_note')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::affecteAction',));
            }
            not_examen_note:

            // examen_deleteExamen
            if (preg_match('#^/examen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_examen_deleteExamen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_deleteExamen')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\ExamenController::deleteExamenAction',));
            }
            not_examen_deleteExamen:

        }

        elseif (0 === strpos($pathinfo, '/note')) {
            // note_index
            if ('/note' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_note_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'note_index');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\NoteController::indexAction',  '_route' => 'note_index',);
            }
            not_note_index:

            // note_show
            if (preg_match('#^/note/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_note_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_show')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\NoteController::showAction',));
            }
            not_note_show:

            // note_new
            if ('/note/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_note_new;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\NoteController::newAction',  '_route' => 'note_new',);
            }
            not_note_new:

            // note_edit
            if (preg_match('#^/note/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_note_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\NoteController::editAction',));
            }
            not_note_edit:

            // note_delete
            if (preg_match('#^/note/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_note_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\NoteController::deleteAction',));
            }
            not_note_delete:

            // note_pdf
            if ('/note/pdf' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_note_pdf;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\NoteController::pdfAction',  '_route' => 'note_pdf',);
            }
            not_note_pdf:

        }

        elseif (0 === strpos($pathinfo, '/appsense')) {
            // appsense_index
            if ('/appsense' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appsense_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'appsense_index');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::indexAction',  '_route' => 'appsense_index',);
            }
            not_appsense_index:

            // appsense_show
            if (preg_match('#^/appsense/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appsense_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appsense_show')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::showAction',));
            }
            not_appsense_show:

            // appsense_new
            if ('/appsense/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_appsense_new;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::newAction',  '_route' => 'appsense_new',);
            }
            not_appsense_new:

            // appsense_edit
            if (preg_match('#^/appsense/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_appsense_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appsense_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::editAction',));
            }
            not_appsense_edit:

            // appsense_delete
            if (preg_match('#^/appsense/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_appsense_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appsense_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::deleteAction',));
            }
            not_appsense_delete:

            // appsense_Class_etudiant
            if (preg_match('#^/appsense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appsense_Class_etudiant')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::EtudiantClassAction',));
            }

            // appsense_student
            if (preg_match('#^/appsense/(?P<id>[^/]++)/affecter/absence$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_appsense_student;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appsense_student')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\AppsenseController::affecteAbsenceAction',));
            }
            not_appsense_student:

        }

        elseif (0 === strpos($pathinfo, '/semestre')) {
            // semestre_index
            if ('/semestre' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_semestre_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'semestre_index');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\SemestreController::indexAction',  '_route' => 'semestre_index',);
            }
            not_semestre_index:

            // semestre_show
            if (preg_match('#^/semestre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_semestre_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_show')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\SemestreController::showAction',));
            }
            not_semestre_show:

            // semestre_new
            if ('/semestre/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_semestre_new;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\SemestreController::newAction',  '_route' => 'semestre_new',);
            }
            not_semestre_new:

            // semestre_edit
            if (preg_match('#^/semestre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_semestre_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\SemestreController::editAction',));
            }
            not_semestre_edit:

            // semestre_delete
            if (preg_match('#^/semestre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_semestre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Front\\Enseignant\\SemestreController::deleteAction',));
            }
            not_semestre_delete:

        }

        elseif (0 === strpos($pathinfo, '/session')) {
            // session_index
            if ('/session' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_session_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'session_index');
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SessionController::indexAction',  '_route' => 'session_index',);
            }
            not_session_index:

            // session_show
            if (preg_match('#^/session/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_session_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_show')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SessionController::showAction',));
            }
            not_session_show:

            // session_new
            if ('/session/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_session_new;
                }

                return array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SessionController::newAction',  '_route' => 'session_new',);
            }
            not_session_new:

            // session_edit
            if (preg_match('#^/session/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_session_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_edit')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SessionController::editAction',));
            }
            not_session_edit:

            // session_delete
            if (preg_match('#^/session/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_session_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_delete')), array (  '_controller' => 'ERPBundle\\Controller\\Admin\\SessionController::deleteAction',));
            }
            not_session_delete:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // admin_registration
            if (0 === strpos($pathinfo, '/register/admin') && preg_match('#^/register/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_registration')), array (  '_controller' => 'ERPBundle\\Controller\\Registration\\RegistrationAdminController::registerAction',));
            }

            if (0 === strpos($pathinfo, '/register/e')) {
                // employee_registration
                if ('/register/employee' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Registration\\RegistrationEmployeeController::registerAction',  '_route' => 'employee_registration',);
                }

                // etudiant_registration
                if (0 === strpos($pathinfo, '/register/etudiant') && preg_match('#^/register/etudiant/(?P<etat>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_registration')), array (  '_controller' => 'ERPBundle\\Controller\\Registration\\RegistrationEtudiantController::registerAction',));
                }

                // enseignant_registration
                if ('/register/enseignant' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Registration\\RegistrationEnseignantController::registerAction',  '_route' => 'enseignant_registration',);
                }

                // entreprise_registration
                if ('/register/entreprise' === $pathinfo) {
                    return array (  '_controller' => 'ERPBundle\\Controller\\Registration\\RegistrationEntrepriseController::registerAction',  '_route' => 'entreprise_registration',);
                }

            }

            // parent_registration
            if ('/register/parent' === $pathinfo) {
                return array (  '_controller' => 'ERPBundle\\Controller\\Registration\\RegistrationParentController::registerAction',  '_route' => 'parent_registration',);
            }

            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
