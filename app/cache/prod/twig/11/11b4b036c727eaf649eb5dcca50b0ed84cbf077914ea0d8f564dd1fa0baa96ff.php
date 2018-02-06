<?php

/* ::base.html.twig */
class __TwigTemplate_fde2f6a8b124d8a2948019186f9d1a6f0c284b1ba3628b49ff6e73fe273df674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'spinner' => array($this, 'block_spinner'),
            'body' => array($this, 'block_body'),
            'widget_list' => array($this, 'block_widget_list'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
            'left_column' => array($this, 'block_left_column'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>SurgeActivity - Dashboard</title>

        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        <!--[if lt IE 9]><link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ie_style.css"), "html", null, true);
        echo "\" type=\"text/css\" ><![endif]-->

        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.timepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-loading.js"), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]><script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script><![endif]-->
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        if (( !array_key_exists("pageTitle", $context) &&  !array_key_exists("activityName", $context))) {
            // line 28
            echo "            <script>
                \$(function() {
                    document.title = document.title.replace('Admin', 'SurgeActivity');
                });
            </script>
        ";
        }
        // line 34
        echo "    </head>
    ";
        // line 35
        $this->displayBlock('spinner', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "</html>";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 35
    public function block_spinner($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        $this->loadTemplate("loading_spinner.html.twig", "::base.html.twig", 36)->display($context);
        // line 37
        echo "    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "        <body>
        <div id=\"whole_page_loading\" >
            <div class=\"wrapper\">
                <header>
                    <div class=\"menu-wrap\">
                        ";
        // line 44
        echo $this->env->getExtension('knp_menu')->render("main", array("template" => "ZesharCRMCoreBundle::main_menu.html.twig"));
        echo "
                    </div>
                    <div class=\"title-wrap\">
                        ";
        // line 47
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 48
            echo "                            ";
            $this->displayBlock('widget_list', $context, $blocks);
            // line 49
            echo "                            <h1>";
            $this->displayBlock('page_title', $context, $blocks);
            echo "</h1>
                        ";
        }
        // line 51
        echo "                    </div>
                </header>

                <div class=\"content clear-fix\">
                    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "                </div>

            </div>
            <footer>
                <p class=\"title-logo\">Surge<span>Activity</span></p>
                <p class=\"copy-left\">&copy; ";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Zeshar</p>
                <p class=\"copy-right\">Powered By Zesharcrm</p>
            </footer>
        </div>
        </body>
    ";
    }

    // line 48
    public function block_widget_list($context, array $blocks = array())
    {
    }

    // line 49
    public function block_page_title($context, array $blocks = array())
    {
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "                        ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 57
            echo "                            <div id=\"collapse-block\" class=\"right-column\">
                                    <div class=\"widget-wrap\">
                                        ";
            // line 59
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
            echo "
                                    </div>
                            </div>
                            <div class=\"left-column\">
                                ";
            // line 63
            $this->displayBlock('left_column', $context, $blocks);
            // line 64
            echo "                            </div>
                        ";
        }
        // line 66
        echo "                    ";
    }

    // line 63
    public function block_left_column($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 63,  215 => 66,  211 => 64,  209 => 63,  202 => 59,  198 => 57,  195 => 56,  192 => 55,  187 => 49,  182 => 48,  172 => 72,  165 => 67,  163 => 55,  157 => 51,  151 => 49,  148 => 48,  146 => 47,  140 => 44,  133 => 39,  130 => 38,  126 => 37,  123 => 36,  120 => 35,  115 => 25,  111 => 78,  108 => 38,  106 => 35,  103 => 34,  95 => 28,  93 => 27,  90 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  51 => 15,  46 => 13,  42 => 12,  37 => 10,  26 => 1,);
    }
}
/* <!doctype html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>SurgeActivity - Dashboard</title>*/
/* */
/*         <meta name="description" content="" />*/
/*         <meta name="keywords" content="" />*/
/*         <meta name="viewport" content="width=device-width,initial-scale=1">*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">*/
/*         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('css/select2.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/* */
/*         <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('css/ie_style.css') }}" type="text/css" ><![endif]-->*/
/* */
/*         <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}"></script>*/
/*         <script src="{{ asset('js/select2.min.js') }}"></script>*/
/*         <script src="{{ asset('js/actions.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.tablesorter.js')}}"></script>*/
/*         <script src="{{ asset('js/jquery-loading.js') }}"></script>*/
/*         <!--[if lt IE 9]><script src="{{ asset('js/html5shiv.js') }}"></script><![endif]-->*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         {% if (pageTitle is not defined) and (activityName is not defined) %}*/
/*             <script>*/
/*                 $(function() {*/
/*                     document.title = document.title.replace('Admin', 'SurgeActivity');*/
/*                 });*/
/*             </script>*/
/*         {% endif %}*/
/*     </head>*/
/*     {% block spinner %}*/
/*         {% include 'loading_spinner.html.twig' %}*/
/*     {% endblock %}*/
/*     {% block body %}*/
/*         <body>*/
/*         <div id="whole_page_loading" >*/
/*             <div class="wrapper">*/
/*                 <header>*/
/*                     <div class="menu-wrap">*/
/*                         {{ knp_menu_render('main', {'template': 'ZesharCRMCoreBundle::main_menu.html.twig'}) }}*/
/*                     </div>*/
/*                     <div class="title-wrap">*/
/*                         {% if not is_granted('ROLE_ULTRA_ADMIN') %}*/
/*                             {% block widget_list %}{% endblock %}*/
/*                             <h1>{% block page_title %}{% endblock %}</h1>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </header>*/
/* */
/*                 <div class="content clear-fix">*/
/*                     {% block content %}*/
/*                         {% if not is_granted('ROLE_ULTRA_ADMIN') %}*/
/*                             <div id="collapse-block" class="right-column">*/
/*                                     <div class="widget-wrap">*/
/*                                         {{ render(controller('ZesharCRMCoreBundle:Dashboard:showBlockWidget')) }}*/
/*                                     </div>*/
/*                             </div>*/
/*                             <div class="left-column">*/
/*                                 {% block left_column %}{% endblock %}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <footer>*/
/*                 <p class="title-logo">Surge<span>Activity</span></p>*/
/*                 <p class="copy-left">&copy; {{ "now"|date("Y") }} Zeshar</p>*/
/*                 <p class="copy-right">Powered By Zesharcrm</p>*/
/*             </footer>*/
/*         </div>*/
/*         </body>*/
/*     {% endblock %}*/
/* </html>*/
