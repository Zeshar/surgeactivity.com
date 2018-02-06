<?php

/* ::base.html.twig */
class __TwigTemplate_f62327e74b6f44dd55c92a7bc4fd4d039525349e391301e32b65d514a7cbd300 extends Twig_Template
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
        $__internal_a6f3f468fc4569bec2aea3ba80bdce6bb94a540bdd461de6d7c613dd4c4dba15 = $this->env->getExtension("native_profiler");
        $__internal_a6f3f468fc4569bec2aea3ba80bdce6bb94a540bdd461de6d7c613dd4c4dba15->enter($__internal_a6f3f468fc4569bec2aea3ba80bdce6bb94a540bdd461de6d7c613dd4c4dba15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a6f3f468fc4569bec2aea3ba80bdce6bb94a540bdd461de6d7c613dd4c4dba15->leave($__internal_a6f3f468fc4569bec2aea3ba80bdce6bb94a540bdd461de6d7c613dd4c4dba15_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89a1416cb7aafaa09f88b646487ddce365eb482e56a1ea2515703d2a2461f7a2 = $this->env->getExtension("native_profiler");
        $__internal_89a1416cb7aafaa09f88b646487ddce365eb482e56a1ea2515703d2a2461f7a2->enter($__internal_89a1416cb7aafaa09f88b646487ddce365eb482e56a1ea2515703d2a2461f7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89a1416cb7aafaa09f88b646487ddce365eb482e56a1ea2515703d2a2461f7a2->leave($__internal_89a1416cb7aafaa09f88b646487ddce365eb482e56a1ea2515703d2a2461f7a2_prof);

    }

    // line 35
    public function block_spinner($context, array $blocks = array())
    {
        $__internal_fcb39bd08940f3d710512f11722cae754bdb72a102cbba7afd537fd39c778a7d = $this->env->getExtension("native_profiler");
        $__internal_fcb39bd08940f3d710512f11722cae754bdb72a102cbba7afd537fd39c778a7d->enter($__internal_fcb39bd08940f3d710512f11722cae754bdb72a102cbba7afd537fd39c778a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spinner"));

        // line 36
        echo "        ";
        $this->loadTemplate("loading_spinner.html.twig", "::base.html.twig", 36)->display($context);
        // line 37
        echo "    ";
        
        $__internal_fcb39bd08940f3d710512f11722cae754bdb72a102cbba7afd537fd39c778a7d->leave($__internal_fcb39bd08940f3d710512f11722cae754bdb72a102cbba7afd537fd39c778a7d_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_5958d78c96cee3a04d5257230b96c48d9a59d6f9b3f3fbbf52295eab958930bf = $this->env->getExtension("native_profiler");
        $__internal_5958d78c96cee3a04d5257230b96c48d9a59d6f9b3f3fbbf52295eab958930bf->enter($__internal_5958d78c96cee3a04d5257230b96c48d9a59d6f9b3f3fbbf52295eab958930bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5958d78c96cee3a04d5257230b96c48d9a59d6f9b3f3fbbf52295eab958930bf->leave($__internal_5958d78c96cee3a04d5257230b96c48d9a59d6f9b3f3fbbf52295eab958930bf_prof);

    }

    // line 48
    public function block_widget_list($context, array $blocks = array())
    {
        $__internal_0359a32e248148f8802b93bdbd1bdf45c2ffe64c565b1826750fc21656970e36 = $this->env->getExtension("native_profiler");
        $__internal_0359a32e248148f8802b93bdbd1bdf45c2ffe64c565b1826750fc21656970e36->enter($__internal_0359a32e248148f8802b93bdbd1bdf45c2ffe64c565b1826750fc21656970e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_list"));

        
        $__internal_0359a32e248148f8802b93bdbd1bdf45c2ffe64c565b1826750fc21656970e36->leave($__internal_0359a32e248148f8802b93bdbd1bdf45c2ffe64c565b1826750fc21656970e36_prof);

    }

    // line 49
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5df9726756977d2949fb5424aa8a4ec6d8c651d980186e3345fa1a60fd6fabef = $this->env->getExtension("native_profiler");
        $__internal_5df9726756977d2949fb5424aa8a4ec6d8c651d980186e3345fa1a60fd6fabef->enter($__internal_5df9726756977d2949fb5424aa8a4ec6d8c651d980186e3345fa1a60fd6fabef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_5df9726756977d2949fb5424aa8a4ec6d8c651d980186e3345fa1a60fd6fabef->leave($__internal_5df9726756977d2949fb5424aa8a4ec6d8c651d980186e3345fa1a60fd6fabef_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa8174adac90a0012a7a0e0f50a9f379f74dfb2be267cd3f3b5f16883a5448ab = $this->env->getExtension("native_profiler");
        $__internal_aa8174adac90a0012a7a0e0f50a9f379f74dfb2be267cd3f3b5f16883a5448ab->enter($__internal_aa8174adac90a0012a7a0e0f50a9f379f74dfb2be267cd3f3b5f16883a5448ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_aa8174adac90a0012a7a0e0f50a9f379f74dfb2be267cd3f3b5f16883a5448ab->leave($__internal_aa8174adac90a0012a7a0e0f50a9f379f74dfb2be267cd3f3b5f16883a5448ab_prof);

    }

    // line 63
    public function block_left_column($context, array $blocks = array())
    {
        $__internal_a2477286404e88b3df9e17e696909fd71d973ef4d6a7b0d59879d4822f295cce = $this->env->getExtension("native_profiler");
        $__internal_a2477286404e88b3df9e17e696909fd71d973ef4d6a7b0d59879d4822f295cce->enter($__internal_a2477286404e88b3df9e17e696909fd71d973ef4d6a7b0d59879d4822f295cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_column"));

        
        $__internal_a2477286404e88b3df9e17e696909fd71d973ef4d6a7b0d59879d4822f295cce->leave($__internal_a2477286404e88b3df9e17e696909fd71d973ef4d6a7b0d59879d4822f295cce_prof);

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
        return array (  261 => 63,  254 => 66,  250 => 64,  248 => 63,  241 => 59,  237 => 57,  234 => 56,  228 => 55,  217 => 49,  206 => 48,  193 => 72,  186 => 67,  184 => 55,  178 => 51,  172 => 49,  169 => 48,  167 => 47,  161 => 44,  154 => 39,  148 => 38,  141 => 37,  138 => 36,  132 => 35,  121 => 25,  114 => 78,  111 => 38,  109 => 35,  106 => 34,  98 => 28,  96 => 27,  93 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  54 => 15,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
