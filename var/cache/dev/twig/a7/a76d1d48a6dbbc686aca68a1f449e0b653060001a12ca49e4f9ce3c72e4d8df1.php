<?php

/* base.html.twig */
class __TwigTemplate_a88033ee95d1e9ce26f6f35d4894375fa3c370556f937b54d816d30a43d9fd6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b54553ad35cf3c845841d027fa524e53aee5c20a7fa0ddc9f73511793a741f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b54553ad35cf3c845841d027fa524e53aee5c20a7fa0ddc9f73511793a741f3->enter($__internal_4b54553ad35cf3c845841d027fa524e53aee5c20a7fa0ddc9f73511793a741f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d99fe96b1a2f014059e7fd4c8df5df95188e6029f688b6c3a84568a448bc0551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99fe96b1a2f014059e7fd4c8df5df95188e6029f688b6c3a84568a448bc0551->enter($__internal_d99fe96b1a2f014059e7fd4c8df5df95188e6029f688b6c3a84568a448bc0551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"description\" content=\"bootstrap default admin template\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" src=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
    <div class=\"loader-overlay\">
        <div class=\"loader-preview-area\">
            <div class=\"spinners\">
                <div class=\"loader\">
                    <div class=\"rotating-plane\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper\">
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        <div class=\"search-overlay\">
            <div class=\"float-default search\">
                <div class=\"search_bg\"></div>
                <div class=\"right-icon search_box\">
                    <div class=\"search-div\">
                        <input type=\"text\" class=\"search_input\">
                        <label class=\"search-input-label\">
                            <span class=\"input-label-title\">Search</span>
                        </label>
                    </div>
                    <div class=\"divider50\"></div>
                    <div class=\"search-result\">
                        <div class=\"search-item\">
                            <div class=\"search-image float-xs-left\">
                                <img src=\"../../../assets/global/image/guitar.jpg\" alt=\"search-image\">
                            </div>
                            <div class=\"search-info float-xs-right\">
                                <h3 class=\"title\">Search here</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"search-item\">
                            <div class=\"search-info search-full float-xs-right\">
                                <h3 class=\"title\">Admin templates</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"search-item\">
                            <div class=\"search-image float-xs-left\">
                                <img src=\"../../../assets/global/image/book-flower.jpg\" alt=\"search-image\">
                            </div>
                            <div class=\"search-info float-xs-right\">
                                <h3 class=\"title\">Books</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"search_close icon_close\"></div>
            </div>
        </div>

        <section id=\"main\" class=\"container-fluid\">
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "         <!--<footer id=\"footer\">
                Copyright&copy; 2017, All Rights Reserved.
            </footer>-->
        </section>
    </div>
        ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_4b54553ad35cf3c845841d027fa524e53aee5c20a7fa0ddc9f73511793a741f3->leave($__internal_4b54553ad35cf3c845841d027fa524e53aee5c20a7fa0ddc9f73511793a741f3_prof);

        
        $__internal_d99fe96b1a2f014059e7fd4c8df5df95188e6029f688b6c3a84568a448bc0551->leave($__internal_d99fe96b1a2f014059e7fd4c8df5df95188e6029f688b6c3a84568a448bc0551_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1608fd2a7d011c33fe7c259ca17ef3022c255fd74ec52504de9c3aa615576e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1608fd2a7d011c33fe7c259ca17ef3022c255fd74ec52504de9c3aa615576e9->enter($__internal_a1608fd2a7d011c33fe7c259ca17ef3022c255fd74ec52504de9c3aa615576e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c799d2ea073b881037a6aa97048c8374bb100a1933d42cb4f2df584e594795b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c799d2ea073b881037a6aa97048c8374bb100a1933d42cb4f2df584e594795b->enter($__internal_4c799d2ea073b881037a6aa97048c8374bb100a1933d42cb4f2df584e594795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c799d2ea073b881037a6aa97048c8374bb100a1933d42cb4f2df584e594795b->leave($__internal_4c799d2ea073b881037a6aa97048c8374bb100a1933d42cb4f2df584e594795b_prof);

        
        $__internal_a1608fd2a7d011c33fe7c259ca17ef3022c255fd74ec52504de9c3aa615576e9->leave($__internal_a1608fd2a7d011c33fe7c259ca17ef3022c255fd74ec52504de9c3aa615576e9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bee35b505b52953125c45131ae09bc7ad6ad3a6196dcc129ad8c045e7764e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bee35b505b52953125c45131ae09bc7ad6ad3a6196dcc129ad8c045e7764e61->enter($__internal_6bee35b505b52953125c45131ae09bc7ad6ad3a6196dcc129ad8c045e7764e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9371c7a004bd1a6f4e982de7c1e0475a71f6b993d19cc3dcf0711607c7407332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9371c7a004bd1a6f4e982de7c1e0475a71f6b993d19cc3dcf0711607c7407332->enter($__internal_9371c7a004bd1a6f4e982de7c1e0475a71f6b993d19cc3dcf0711607c7407332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_9371c7a004bd1a6f4e982de7c1e0475a71f6b993d19cc3dcf0711607c7407332->leave($__internal_9371c7a004bd1a6f4e982de7c1e0475a71f6b993d19cc3dcf0711607c7407332_prof);

        
        $__internal_6bee35b505b52953125c45131ae09bc7ad6ad3a6196dcc129ad8c045e7764e61->leave($__internal_6bee35b505b52953125c45131ae09bc7ad6ad3a6196dcc129ad8c045e7764e61_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_e3f24f7eef0ee68b534b171a78c9e56d1e63df5f3561ff3943725d1930edb884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f24f7eef0ee68b534b171a78c9e56d1e63df5f3561ff3943725d1930edb884->enter($__internal_e3f24f7eef0ee68b534b171a78c9e56d1e63df5f3561ff3943725d1930edb884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3bde9e26bd62d5db6a981ebed443d52aa7e4d3308b30133cde6637018deef8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bde9e26bd62d5db6a981ebed443d52aa7e4d3308b30133cde6637018deef8fd->enter($__internal_3bde9e26bd62d5db6a981ebed443d52aa7e4d3308b30133cde6637018deef8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_3bde9e26bd62d5db6a981ebed443d52aa7e4d3308b30133cde6637018deef8fd->leave($__internal_3bde9e26bd62d5db6a981ebed443d52aa7e4d3308b30133cde6637018deef8fd_prof);

        
        $__internal_e3f24f7eef0ee68b534b171a78c9e56d1e63df5f3561ff3943725d1930edb884->leave($__internal_e3f24f7eef0ee68b534b171a78c9e56d1e63df5f3561ff3943725d1930edb884_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_013dfb0cf2c49747d098c4091f40776235523fa34f569002b8249f52d19ac8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013dfb0cf2c49747d098c4091f40776235523fa34f569002b8249f52d19ac8c4->enter($__internal_013dfb0cf2c49747d098c4091f40776235523fa34f569002b8249f52d19ac8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ca45c308cfe5fe9e391b7e2016727145661ce47dd0a5c66fad140d9dbef2021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca45c308cfe5fe9e391b7e2016727145661ce47dd0a5c66fad140d9dbef2021->enter($__internal_8ca45c308cfe5fe9e391b7e2016727145661ce47dd0a5c66fad140d9dbef2021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ca45c308cfe5fe9e391b7e2016727145661ce47dd0a5c66fad140d9dbef2021->leave($__internal_8ca45c308cfe5fe9e391b7e2016727145661ce47dd0a5c66fad140d9dbef2021_prof);

        
        $__internal_013dfb0cf2c49747d098c4091f40776235523fa34f569002b8249f52d19ac8c4->leave($__internal_013dfb0cf2c49747d098c4091f40776235523fa34f569002b8249f52d19ac8c4_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c32d427e98aa7a1e2c86d4d5616ec0eddbb4bc667d50d36cb7c7e469a97c385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c32d427e98aa7a1e2c86d4d5616ec0eddbb4bc667d50d36cb7c7e469a97c385->enter($__internal_3c32d427e98aa7a1e2c86d4d5616ec0eddbb4bc667d50d36cb7c7e469a97c385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83c86b68bbdeea91db6024f4c7968ec9bb2a44ad22d23c76287db3a8cf80b0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c86b68bbdeea91db6024f4c7968ec9bb2a44ad22d23c76287db3a8cf80b0bf->enter($__internal_83c86b68bbdeea91db6024f4c7968ec9bb2a44ad22d23c76287db3a8cf80b0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83c86b68bbdeea91db6024f4c7968ec9bb2a44ad22d23c76287db3a8cf80b0bf->leave($__internal_83c86b68bbdeea91db6024f4c7968ec9bb2a44ad22d23c76287db3a8cf80b0bf_prof);

        
        $__internal_3c32d427e98aa7a1e2c86d4d5616ec0eddbb4bc667d50d36cb7c7e469a97c385->leave($__internal_3c32d427e98aa7a1e2c86d4d5616ec0eddbb4bc667d50d36cb7c7e469a97c385_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 75,  195 => 69,  177 => 23,  159 => 10,  142 => 7,  128 => 77,  123 => 76,  121 => 75,  114 => 70,  112 => 69,  65 => 24,  63 => 23,  49 => 11,  47 => 10,  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"description\" content=\"bootstrap default admin template\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" src=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
        {% block stylesheets %} {% endblock %}
    </head>
    <body>
    <div class=\"loader-overlay\">
        <div class=\"loader-preview-area\">
            <div class=\"spinners\">
                <div class=\"loader\">
                    <div class=\"rotating-plane\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper\">
        {% block header %} {% endblock %}
        <div class=\"search-overlay\">
            <div class=\"float-default search\">
                <div class=\"search_bg\"></div>
                <div class=\"right-icon search_box\">
                    <div class=\"search-div\">
                        <input type=\"text\" class=\"search_input\">
                        <label class=\"search-input-label\">
                            <span class=\"input-label-title\">Search</span>
                        </label>
                    </div>
                    <div class=\"divider50\"></div>
                    <div class=\"search-result\">
                        <div class=\"search-item\">
                            <div class=\"search-image float-xs-left\">
                                <img src=\"../../../assets/global/image/guitar.jpg\" alt=\"search-image\">
                            </div>
                            <div class=\"search-info float-xs-right\">
                                <h3 class=\"title\">Search here</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"search-item\">
                            <div class=\"search-info search-full float-xs-right\">
                                <h3 class=\"title\">Admin templates</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"search-item\">
                            <div class=\"search-image float-xs-left\">
                                <img src=\"../../../assets/global/image/book-flower.jpg\" alt=\"search-image\">
                            </div>
                            <div class=\"search-info float-xs-right\">
                                <h3 class=\"title\">Books</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"search_close icon_close\"></div>
            </div>
        </div>

        <section id=\"main\" class=\"container-fluid\">
        {% block body %}{% endblock %}
         <!--<footer id=\"footer\">
                Copyright&copy; 2017, All Rights Reserved.
            </footer>-->
        </section>
    </div>
        {% block javascripts %}{% endblock %}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    </body>
</html>
", "base.html.twig", "/var/www/html/erp/app/Resources/views/base.html.twig");
    }
}
