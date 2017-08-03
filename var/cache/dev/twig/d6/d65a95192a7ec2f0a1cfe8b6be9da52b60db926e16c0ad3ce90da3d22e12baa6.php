<?php

/* :headers:headerSuperAdmin.html.twig */
class __TwigTemplate_948582d9b3a2efc7675dff64c1c371dd0320a16cc82542ea1506be295d9fcbd8 extends Twig_Template
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
        $__internal_f930209968d186f73d66a72a752c27b8543e6cd8d8ffc7ff6b268632f3808f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f930209968d186f73d66a72a752c27b8543e6cd8d8ffc7ff6b268632f3808f3d->enter($__internal_f930209968d186f73d66a72a752c27b8543e6cd8d8ffc7ff6b268632f3808f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers:headerSuperAdmin.html.twig"));

        $__internal_ff617b11e06a7492218efdb5996f6fb803ae09cbb228fcb82c5e35d3f35c9b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff617b11e06a7492218efdb5996f6fb803ae09cbb228fcb82c5e35d3f35c9b7b->enter($__internal_ff617b11e06a7492218efdb5996f6fb803ae09cbb228fcb82c5e35d3f35c9b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers:headerSuperAdmin.html.twig"));

        // line 1
        echo "<header id=\"header\">
    <div class=\"row\">
        <div class=\"col-sm-4 col-xl-2 header-left\">
            <div class=\"logo float-xs-left\">
                <a href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/web-logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
            </div>
            <button class=\"left-menu-toggle float-xs-right\">
                <i class=\"icon_menu toggle-icon\"></i>
            </button>
            <button class=\"right-menu-toggle float-xs-right\">
                <i class=\"arrow_carrot-left toggle-icon\"></i>
            </button>
        </div>
        <div class=\"col-sm-8 col-xl-10 header-right\">
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
                        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\" aria-expanded=\"true\">
                            <i class=\"icon_mail_alt\"></i>
                            <span class=\"mail-no\">10</span>
                        </a>
                        <div class=\"dropdown-menu messagetoggle\" role=\"menu\">
                            <div class=\"nav-tab-horizontal\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\">Message</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#resendmessage\" role=\"tab\">Resend</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"messages\" role=\"tabpanel\" data-plugin=\"custom-scroll\" data-height=\"320\">
                                    <ul class=\"userMessagedrop\">
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"media\">
                                                    <div class=\"media-left float-xs-left\">
                                                        <span class=\"label label-primary\"><i class=\"icon_plus\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>New tasks added</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <span class=\"label label-success\"><i class=\"icon_lock\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>Successfully</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <span class=\"label label-danger\"><i class=\"icon_info_alt\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>Warnind</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"tab-pane\" id=\"resendmessage\" role=\"tabpanel\" data-plugin=\"custom-scroll\" data-height=\"320\">
                                    <ul class=\"userMessagedrop\">
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"media\">
                                                    <div class=\"media-left float-xs-left\">
                                                        <span class=\"label label-primary\"><i class=\"icon_profile\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>5 new members joi...</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">2 mins
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
                                                        <span class=\"label label-success\"><i class=\"icon_key\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>You changed...</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <span class=\"label label-danger\"><i class=\"icon_close\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>5 members removed</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">15 mins
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
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\" data-animation=\"slideOutUp\" aria-expanded=\"false\">
                            <i class=\"icon_chat_alt\"></i>
                            <span class=\"mail-no\">8</span>
                        </a>
                        <ul class=\"dropdown-menu userChat\" data-plugin=\"custom-scroll\" data-height=\"310\">
                            <li>
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <div class=\"media-left float-xs-left\">
                                            <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image2-profile.jpg"), "html", null, true);
        echo "\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">2 hours
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
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image3-profile.jpg"), "html", null, true);
        echo "\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20 Oct
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
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image4-profile.jpg"), "html", null, true);
        echo "\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20 Oct
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
                        <a href=\"#\" class=\"user-header dropdown-toggle\" data-toggle=\"dropdown\" data-animation=\"slideOutUp\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/user.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"/>
                        </a>
                        <div class=\"dropdown-menu drop-profile\">
                            <div class=\"userProfile\">
                                <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/user.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"/>
                                <h5>Miler Hussey</h5>
                                <p>milerhussey@yahoo.com</p>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"btn left-spacing link-btn\" href=\"#\" role=\"button\">Link</a>
                            <a class=\"btn left-second-spacing link-btn\" href=\"#\" role=\"button\">Link 2</a>
                            <a class=\"btn btn-primary float-xs-right right-spacing\" href=\"";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" role=\"button\">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_f930209968d186f73d66a72a752c27b8543e6cd8d8ffc7ff6b268632f3808f3d->leave($__internal_f930209968d186f73d66a72a752c27b8543e6cd8d8ffc7ff6b268632f3808f3d_prof);

        
        $__internal_ff617b11e06a7492218efdb5996f6fb803ae09cbb228fcb82c5e35d3f35c9b7b->leave($__internal_ff617b11e06a7492218efdb5996f6fb803ae09cbb228fcb82c5e35d3f35c9b7b_prof);

    }

    public function getTemplateName()
    {
        return ":headers:headerSuperAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 292,  329 => 285,  322 => 281,  292 => 254,  271 => 236,  250 => 218,  229 => 200,  31 => 5,  25 => 1,);
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
    <div class=\"row\">
        <div class=\"col-sm-4 col-xl-2 header-left\">
            <div class=\"logo float-xs-left\">
                <a href=\"#\"><img src=\"{{ asset('assets/global/image/web-logo.png') }}\" alt=\"logo\"></a>
            </div>
            <button class=\"left-menu-toggle float-xs-right\">
                <i class=\"icon_menu toggle-icon\"></i>
            </button>
            <button class=\"right-menu-toggle float-xs-right\">
                <i class=\"arrow_carrot-left toggle-icon\"></i>
            </button>
        </div>
        <div class=\"col-sm-8 col-xl-10 header-right\">
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
                        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\" aria-expanded=\"true\">
                            <i class=\"icon_mail_alt\"></i>
                            <span class=\"mail-no\">10</span>
                        </a>
                        <div class=\"dropdown-menu messagetoggle\" role=\"menu\">
                            <div class=\"nav-tab-horizontal\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\">Message</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#resendmessage\" role=\"tab\">Resend</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"messages\" role=\"tabpanel\" data-plugin=\"custom-scroll\" data-height=\"320\">
                                    <ul class=\"userMessagedrop\">
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"media\">
                                                    <div class=\"media-left float-xs-left\">
                                                        <span class=\"label label-primary\"><i class=\"icon_plus\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>New tasks added</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <span class=\"label label-success\"><i class=\"icon_lock\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>Successfully</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <span class=\"label label-danger\"><i class=\"icon_info_alt\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>Warnind</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"tab-pane\" id=\"resendmessage\" role=\"tabpanel\" data-plugin=\"custom-scroll\" data-height=\"320\">
                                    <ul class=\"userMessagedrop\">
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"media\">
                                                    <div class=\"media-left float-xs-left\">
                                                        <span class=\"label label-primary\"><i class=\"icon_profile\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>5 new members joi...</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">2 mins
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
                                                        <span class=\"label label-success\"><i class=\"icon_key\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>You changed...</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                                        <span class=\"label label-danger\"><i class=\"icon_close\"></i></span>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h6>5 members removed</h6>
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">15 mins
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
                                                        <p>Dummy text of the printing and typesetting industry.</p>
                                                        <div class=\"meta-tag text-nowrap\">
                                                            <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-open=\"true\" data-animation=\"slideOutUp\" aria-expanded=\"false\">
                            <i class=\"icon_chat_alt\"></i>
                            <span class=\"mail-no\">8</span>
                        </a>
                        <ul class=\"dropdown-menu userChat\" data-plugin=\"custom-scroll\" data-height=\"310\">
                            <li>
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <div class=\"media-left float-xs-left\">
                                            <img src=\"{{ asset('assets/global/image/image1-profile.jpg') }}\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">5 mins
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
                                            <img src=\"{{ asset('assets/global/image/image2-profile.jpg') }}\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">2 hours
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
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20 Oct
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
                                            <img src=\"{{ asset('assets/global/image/image4-profile.jpg') }}\" alt=\"message\"/>
                                        </div>
                                        <div class=\"media-body\">
                                            <h5>Judy Fowler</h5>
                                            <p>Dummy text of the printing...</p>
                                            <div class=\"meta-tag text-nowrap\">
                                                <time datetime=\"2016-12-10T20:27:48+07:00\" class=\"text-muted\">20 Oct
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
                        <a href=\"#\" class=\"user-header dropdown-toggle\" data-toggle=\"dropdown\" data-animation=\"slideOutUp\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"{{ asset('assets/global/image/user.jpg') }}\" alt=\"Profile image\"/>
                        </a>
                        <div class=\"dropdown-menu drop-profile\">
                            <div class=\"userProfile\">
                                <img src=\"{{ asset('assets/global/image/user.jpg') }}\" alt=\"Profile image\"/>
                                <h5>Miler Hussey</h5>
                                <p>milerhussey@yahoo.com</p>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"btn left-spacing link-btn\" href=\"#\" role=\"button\">Link</a>
                            <a class=\"btn left-second-spacing link-btn\" href=\"#\" role=\"button\">Link 2</a>
                            <a class=\"btn btn-primary float-xs-right right-spacing\" href=\"{{ path('fos_user_security_logout') }}\" role=\"button\">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", ":headers:headerSuperAdmin.html.twig", "/var/www/html/erp/app/Resources/views/headers/headerSuperAdmin.html.twig");
    }
}
