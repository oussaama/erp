<?php

/* :headers:headerAdmin.html.twig */
class __TwigTemplate_fb1c2d3b7ab8884ca8c7d6819d7e4a406b5d342bd22b8ade14cf3133af4aeacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_910b4f32c3ba01d4df7ed0c57ca7d4dfb48d54f8d23f1b9aee9b38cc41f77f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910b4f32c3ba01d4df7ed0c57ca7d4dfb48d54f8d23f1b9aee9b38cc41f77f48->enter($__internal_910b4f32c3ba01d4df7ed0c57ca7d4dfb48d54f8d23f1b9aee9b38cc41f77f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers:headerAdmin.html.twig"));

        $__internal_9c5f593868bc34d5f87abe0600b34931a0c94d3bb3b7630299eaeb30317ed432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5f593868bc34d5f87abe0600b34931a0c94d3bb3b7630299eaeb30317ed432->enter($__internal_9c5f593868bc34d5f87abe0600b34931a0c94d3bb3b7630299eaeb30317ed432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers:headerAdmin.html.twig"));

        // line 1
        echo "<header id=\"header\">
        <div class=\"header-width\">
            <div class=\"col-sm-4 col-xl-2 header-left\">
                <div class=\"logo float-xs-left\">
                    <a href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/web-logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </div>
            </div>
            <div class=\"col-md-8 hidden-sm hidden-xs\">
                <!-- <h3 class=\"text-md-center\" style=\"color:white\">Bienvenue en espace { app.user.Etablissement.typeEtablissement }} \"{ app.user.Etablissement.nomEtablissement }}\"</h3>-->
            </div>
            <div class=\"col-sm-8 col-xl-5 header-right\">
                <div class=\"header-inner-right\">
                    <div class=\"float-default searchbox\">
                        <div class=\"right-icon\">
                            <a href=\"javascript:void(0)\">
                                <i class=\"icon_search\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"float-default mail\">
                        <div class=\"right-icon\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\"
                               aria-expanded=\"true\">
                                <i class=\"icon_mail_alt\"></i>
                                <span class=\"mail-no\">10</span>
                            </a>
                            <div class=\"dropdown-menu messagetoggle\" role=\"menu\">
                                <div class=\"nav-tab-horizontal\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons active\" data-toggle=\"tab\"
                                               href=\"#messages\" role=\"tab\">Message</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons\" data-toggle=\"tab\" href=\"#resendmessage\" role=\"tab\">Resend</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"messages\" role=\"tabpanel\"
                                         data-plugin=\"custom-scroll\" data-height=\"320\">
                                        <ul class=\"userMessagedrop\">
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-primary\"><i
                                                                            class=\"icon_plus\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>New tasks added</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-success\"><i
                                                                            class=\"icon_lock\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Successfully</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-danger\"><i
                                                                            class=\"icon_info_alt\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Warnind</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                            <span class=\"label label-info\"><i class=\"icon_plus\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Add new friend</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-pane\" id=\"resendmessage\" role=\"tabpanel\"
                                         data-plugin=\"custom-scroll\" data-height=\"320\">
                                        <ul class=\"userMessagedrop\">
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-primary\"><i
                                                                            class=\"icon_profile\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>5 new members joi...</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">2 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-success\"><i
                                                                            class=\"icon_key\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>You changed...</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-danger\"><i
                                                                            class=\"icon_close\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>5 members removed</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">15 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                            <span class=\"label label-info\"><i class=\"icon_plus\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Update available</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"float-default chat\">
                        <div class=\"right-icon\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\"
                               data-animation=\"slideOutUp\" aria-expanded=\"false\">
                                <i class=\"icon_chat_alt\"></i>
                                <span class=\"mail-no\">8</span>
                            </a>
                            <ul class=\"dropdown-menu userChat\" data-plugin=\"custom-scroll\" data-height=\"310\">
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\".";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\" alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5
                                                        mins
                                                    </time>
                                                </div>
                                                <div class=\"status online\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image2-profile.jpg"), "html", null, true);
        echo "\"
                                                     alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">2
                                                        hours
                                                    </time>
                                                </div>
                                                <div class=\"status offline\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image3-profile.jpg"), "html", null, true);
        echo "\" alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20
                                                        Oct
                                                    </time>
                                                </div>
                                                <div class=\"status offline\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image4-profile.jpg"), "html", null, true);
        echo "\"
                                                     alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20
                                                        Oct
                                                    </time>
                                                </div>
                                                <div class=\"status online\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"float-default chat\">
                        <div class=\"right-icon\">
                            <a href=\"#\" data-plugin=\"fullscreen\">
                                <i class=\"arrow_expand\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"user-dropdown\">
                        <div class=\"btn-group\">
                            <a href=\"#\" class=\"user-header dropdown-toggle\" data-toggle=\"dropdown\"
                               data-animation=\"slideOutUp\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/user.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"/>
                            </a>
                            <div class=\"dropdown-menu drop-profile\">
                                <div class=\"userProfile\">
                                    <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/user.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"/>
                                    <h5>";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h5>
                                    <p>";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"btn left-spacing link-btn flat-buttons\" href=\"";
        // line 321
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profil");
        echo "\" role=\"button\">Profile</a>
                                <a class=\"btn btn-primary float-xs-right right-spacing flat-buttons\" href=\"";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" role=\"button\">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
";
        
        $__internal_910b4f32c3ba01d4df7ed0c57ca7d4dfb48d54f8d23f1b9aee9b38cc41f77f48->leave($__internal_910b4f32c3ba01d4df7ed0c57ca7d4dfb48d54f8d23f1b9aee9b38cc41f77f48_prof);

        
        $__internal_9c5f593868bc34d5f87abe0600b34931a0c94d3bb3b7630299eaeb30317ed432->leave($__internal_9c5f593868bc34d5f87abe0600b34931a0c94d3bb3b7630299eaeb30317ed432_prof);

    }

    public function getTemplateName()
    {
        return ":headers:headerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 322,  374 => 321,  368 => 318,  364 => 317,  360 => 316,  353 => 312,  320 => 282,  298 => 263,  275 => 243,  253 => 224,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
        <div class=\"header-width\">
            <div class=\"col-sm-4 col-xl-2 header-left\">
                <div class=\"logo float-xs-left\">
                    <a href=\"#\"><img src=\"{{ asset('assets/global/image/web-logo.png') }}\" alt=\"logo\"></a>
                </div>
            </div>
            <div class=\"col-md-8 hidden-sm hidden-xs\">
                <!-- <h3 class=\"text-md-center\" style=\"color:white\">Bienvenue en espace { app.user.Etablissement.typeEtablissement }} \"{ app.user.Etablissement.nomEtablissement }}\"</h3>-->
            </div>
            <div class=\"col-sm-8 col-xl-5 header-right\">
                <div class=\"header-inner-right\">
                    <div class=\"float-default searchbox\">
                        <div class=\"right-icon\">
                            <a href=\"javascript:void(0)\">
                                <i class=\"icon_search\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"float-default mail\">
                        <div class=\"right-icon\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\"
                               aria-expanded=\"true\">
                                <i class=\"icon_mail_alt\"></i>
                                <span class=\"mail-no\">10</span>
                            </a>
                            <div class=\"dropdown-menu messagetoggle\" role=\"menu\">
                                <div class=\"nav-tab-horizontal\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons active\" data-toggle=\"tab\"
                                               href=\"#messages\" role=\"tab\">Message</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons\" data-toggle=\"tab\" href=\"#resendmessage\" role=\"tab\">Resend</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"messages\" role=\"tabpanel\"
                                         data-plugin=\"custom-scroll\" data-height=\"320\">
                                        <ul class=\"userMessagedrop\">
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-primary\"><i
                                                                            class=\"icon_plus\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>New tasks added</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-success\"><i
                                                                            class=\"icon_lock\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Successfully</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-danger\"><i
                                                                            class=\"icon_info_alt\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Warnind</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                            <span class=\"label label-info\"><i class=\"icon_plus\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Add new friend</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-pane\" id=\"resendmessage\" role=\"tabpanel\"
                                         data-plugin=\"custom-scroll\" data-height=\"320\">
                                        <ul class=\"userMessagedrop\">
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-primary\"><i
                                                                            class=\"icon_profile\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>5 new members joi...</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">2 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-success\"><i
                                                                            class=\"icon_key\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>You changed...</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                                <span class=\"label label-danger\"><i
                                                                            class=\"icon_close\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>5 members removed</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">15 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left float-xs-left\">
                                                            <span class=\"label label-info\"><i class=\"icon_plus\"></i></span>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h6>Update available</h6>
                                                            <p>Dummy text of the printing and typesetting
                                                                industry.</p>
                                                            <div class=\"meta-tag text-nowrap\">
                                                                <time datetime=\"2016-12-10T20:27:48+07:00\"
                                                                      class=\"text-muted\">5 mins
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"float-default chat\">
                        <div class=\"right-icon\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\"
                               data-animation=\"slideOutUp\" aria-expanded=\"false\">
                                <i class=\"icon_chat_alt\"></i>
                                <span class=\"mail-no\">8</span>
                            </a>
                            <ul class=\"dropdown-menu userChat\" data-plugin=\"custom-scroll\" data-height=\"310\">
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\".{{ asset('assets/global/image/image1-profile.jpg') }}\" alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5
                                                        mins
                                                    </time>
                                                </div>
                                                <div class=\"status online\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\"{{ asset('assets/global/image/image2-profile.jpg') }}\"
                                                     alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">2
                                                        hours
                                                    </time>
                                                </div>
                                                <div class=\"status offline\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\"{{ asset('assets/global/image/image3-profile.jpg') }}\" alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20
                                                        Oct
                                                    </time>
                                                </div>
                                                <div class=\"status offline\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"media\">
                                            <div class=\"media-left float-xs-left\">
                                                <img src=\"{{ asset('assets/global/image/image4-profile.jpg') }}\"
                                                     alt=\"message\"/>
                                            </div>
                                            <div class=\"media-body float-xs-left\">
                                                <h5>Judy Fowler</h5>
                                                <p>Dummy text of the printing...</p>
                                                <div class=\"meta-tag text-nowrap\">
                                                    <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20
                                                        Oct
                                                    </time>
                                                </div>
                                                <div class=\"status online\"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"float-default chat\">
                        <div class=\"right-icon\">
                            <a href=\"#\" data-plugin=\"fullscreen\">
                                <i class=\"arrow_expand\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"user-dropdown\">
                        <div class=\"btn-group\">
                            <a href=\"#\" class=\"user-header dropdown-toggle\" data-toggle=\"dropdown\"
                               data-animation=\"slideOutUp\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <img src=\"{{ asset('assets/global/image/user.jpg') }}\" alt=\"Profile image\"/>
                            </a>
                            <div class=\"dropdown-menu drop-profile\">
                                <div class=\"userProfile\">
                                    <img src=\"{{ asset('assets/global/image/user.jpg') }}\" alt=\"Profile image\"/>
                                    <h5>{{ app.user.username }}</h5>
                                    <p>{{ app.user.email }}</p>
                                </div>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"btn left-spacing link-btn flat-buttons\" href=\"{{ path('admin_profil') }}\" role=\"button\">Profile</a>
                                <a class=\"btn btn-primary float-xs-right right-spacing flat-buttons\" href=\"{{ path('fos_user_security_logout') }}\" role=\"button\">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
", ":headers:headerAdmin.html.twig", "/var/www/html/erp/app/Resources/views/headers/headerAdmin.html.twig");
    }
}
