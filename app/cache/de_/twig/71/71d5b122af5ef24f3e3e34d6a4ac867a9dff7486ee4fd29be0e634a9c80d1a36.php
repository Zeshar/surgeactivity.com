<?php

/* ZesharCRMCoreBundle::sonata_layout.html.twig */
class __TwigTemplate_0007cb80a1f0e5dbf0307e32e542df7c2c8b6b3ac173d61833b1c88d4917123d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_whole_content_wrapper_classes' => array($this, 'block_sonata_whole_content_wrapper_classes'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9121403fdb38c7ddcaa16ec2cc61a1c7815c6e3933537b1fa7d45192088dec14 = $this->env->getExtension("native_profiler");
        $__internal_9121403fdb38c7ddcaa16ec2cc61a1c7815c6e3933537b1fa7d45192088dec14->enter($__internal_9121403fdb38c7ddcaa16ec2cc61a1c7815c6e3933537b1fa7d45192088dec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle::sonata_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["googleApiKey"] = "AIzaSyBYXDwzf_vXlHGkLj5vKQK7umVswZu7-t4";
        // line 23
        echo "<!DOCTYPE html>
<html ";
        // line 24
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 26
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "
        <title>
            ";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 109
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 110
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 112
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 113
                echo "                    -
                    ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 115
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 116
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 117
                            echo "                                &gt;
                            ";
                        }
                        // line 119
                        echo "
                            ";
                        // line 120
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 122
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                ";
            }
            // line 124
            echo "            ";
        }
        // line 125
        echo "        </title>
    </head>
    <body ";
        // line 127
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">


        <div class=\"wrapper\" style=\"margin-top: 0;\">

            <header>
                ";
        // line 133
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 134
            echo "                    <div class=\"menu-wrap\">
                        ";
            // line 135
            echo $this->env->getExtension('knp_menu')->render("main", array("template" => "ZesharCRMCoreBundle::main_menu.html.twig"));
            echo "
                    </div>
                ";
        } else {
            // line 138
            echo "                    <div class=\"menu-wrap\">
                        <ul class=\"menu\">
                             <li id=\"login-logo\">
                                <img src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo2.png"), "html", null, true);
            echo "\" alt=\"\" width=\"41px\">
                                <p class=\"title-logo\">Surge<span>Activity</span></p>
                            </li>
                        </ul>
                    </div>
                ";
        }
        // line 147
        echo "
                ";
        // line 148
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 149
            echo "                    <div class=\"title-wrap\">
                        ";
            // line 150
            if (array_key_exists("admin_pool", $context)) {
                // line 151
                echo "                            <nav class=\"navbar navbar-static-top\" style=\"position:relative; z-index: auto;\" role=\"navigation\">
                                <div class=\"navbar-left\">
                                    ";
                // line 153
                $this->displayBlock('sonata_breadcrumb', $context, $blocks);
                // line 194
                echo "                                </div>
                                ";
                // line 195
                if ((array_key_exists("object", $context) && ($this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : $this->getContext($context, "lead_subject")), "checkType", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") == true))) {
                    // line 196
                    echo "                                    <div class=\"navbar-right\">
                                        <ol class=\"nav navbar-top-links\">
                                            ";
                    // line 198
                    if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "leadCampaign"), "method", true, true)) {
                        // line 199
                        echo "                                                ";
                        $context["leadCampaign"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "leadCampaign"), "method");
                        // line 200
                        echo "                                            ";
                    } else {
                        // line 201
                        echo "                                                ";
                        $context["leadCampaign"] = "";
                        // line 202
                        echo "                                            ";
                    }
                    // line 203
                    echo "
                                            ";
                    // line 204
                    $context["previousId"] = $this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : $this->getContext($context, "lead_subject")), "getPreviousId", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 1 => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : $this->getContext($context, "leadCampaign"))), "method");
                    // line 205
                    echo "                                            ";
                    if ( !twig_test_empty((isset($context["previousId"]) ? $context["previousId"] : $this->getContext($context, "previousId")))) {
                        // line 206
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 207
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => (isset($context["previousId"]) ? $context["previousId"] : $this->getContext($context, "previousId")), "leadCampaign" => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : $this->getContext($context, "leadCampaign")))), "method"), "html", null, true);
                        echo "\">&lt;&lt; Previous</a>
                                                </li>
                                            ";
                    }
                    // line 210
                    echo "                                            <li>
                                                <a href=\"";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                    echo "\">Back to list</a>
                                            </li>
                                            ";
                    // line 213
                    $context["nextId"] = $this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : $this->getContext($context, "lead_subject")), "getNextId", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 1 => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : $this->getContext($context, "leadCampaign"))), "method");
                    // line 214
                    echo "
                                            ";
                    // line 215
                    if ( !twig_test_empty((isset($context["nextId"]) ? $context["nextId"] : $this->getContext($context, "nextId")))) {
                        // line 216
                        echo "                                                <li class=\"\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => (isset($context["nextId"]) ? $context["nextId"] : $this->getContext($context, "nextId")), "leadCampaign" => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : $this->getContext($context, "leadCampaign")))), "method"), "html", null, true);
                        echo "\">Next &gt;&gt;</a></li>
                                            ";
                    }
                    // line 218
                    echo "                                        </ol>
                                    </div>
                                ";
                }
                // line 221
                echo "
                            </nav>
                        ";
            }
            // line 224
            echo "                    </div>
                ";
        }
        // line 226
        echo "            </header>

            ";
        // line 228
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 300
        echo "        </div>
        <footer>
            <p class=\"title-logo\">Surge<span>Activity</span></p>
            <p class=\"copy-left\">&copy; ";
        // line 303
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Zeshar</p>
            <p class=\"copy-right\">Powered By Zesharcrm</p>
        </footer>

    </body>
</html>
";
        
        $__internal_9121403fdb38c7ddcaa16ec2cc61a1c7815c6e3933537b1fa7d45192088dec14->leave($__internal_9121403fdb38c7ddcaa16ec2cc61a1c7815c6e3933537b1fa7d45192088dec14_prof);

    }

    // line 24
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_97be87c9fdea2119e7bfb3d93e08544a63726665fed73decec6aa7387294415b = $this->env->getExtension("native_profiler");
        $__internal_97be87c9fdea2119e7bfb3d93e08544a63726665fed73decec6aa7387294415b->enter($__internal_97be87c9fdea2119e7bfb3d93e08544a63726665fed73decec6aa7387294415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_97be87c9fdea2119e7bfb3d93e08544a63726665fed73decec6aa7387294415b->leave($__internal_97be87c9fdea2119e7bfb3d93e08544a63726665fed73decec6aa7387294415b_prof);

    }

    // line 26
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_ef7f9c95bb30e1e6e763149a6a38485c31904bbb0257d171fd5f6609dc6ad08d = $this->env->getExtension("native_profiler");
        $__internal_ef7f9c95bb30e1e6e763149a6a38485c31904bbb0257d171fd5f6609dc6ad08d->enter($__internal_ef7f9c95bb30e1e6e763149a6a38485c31904bbb0257d171fd5f6609dc6ad08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 27
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_ef7f9c95bb30e1e6e763149a6a38485c31904bbb0257d171fd5f6609dc6ad08d->leave($__internal_ef7f9c95bb30e1e6e763149a6a38485c31904bbb0257d171fd5f6609dc6ad08d_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e8bf0f8f68f9ea53a74ac3ab94cbdfda95cfc08873836394b217e1ec4d37855 = $this->env->getExtension("native_profiler");
        $__internal_5e8bf0f8f68f9ea53a74ac3ab94cbdfda95cfc08873836394b217e1ec4d37855->enter($__internal_5e8bf0f8f68f9ea53a74ac3ab94cbdfda95cfc08873836394b217e1ec4d37855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 34
            echo "                <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/css/sonata_fixes.css"), "html", null, true);
        echo "\"  />
            <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/css/sonata_login_page_fixes.css"), "html", null, true);
        echo "\"  />
            <meta name=\"description\" content=\"\" />
            <meta name=\"keywords\" content=\"\" />
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
            <link rel=\"shortcut icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\">
            <!--[if lt IE 9]><link rel=\"stylesheet\" href=\"css/ie_style.css\" type=\"text/css\" ><![endif]-->

            ";
        // line 46
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 47
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 49
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style3.css"), "html", null, true);
            echo "\">
            ";
        }
        // line 51
        echo "

        ";
        
        $__internal_5e8bf0f8f68f9ea53a74ac3ab94cbdfda95cfc08873836394b217e1ec4d37855->leave($__internal_5e8bf0f8f68f9ea53a74ac3ab94cbdfda95cfc08873836394b217e1ec4d37855_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00eed7d717c576903ef497ae4a6ecddc94d41c8695226c9b25813755954e3a4d = $this->env->getExtension("native_profiler");
        $__internal_00eed7d717c576903ef497ae4a6ecddc94d41c8695226c9b25813755954e3a4d->enter($__internal_00eed7d717c576903ef497ae4a6ecddc94d41c8695226c9b25813755954e3a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "
            ";
        // line 57
        if (0) {
            echo " ";
            // line 58
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/select2.min.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 62
        echo "
            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 65
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 66
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 67
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 69
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 73
            echo "                ";
            if ( !(is_string($__internal_dfe48dde1daa0c31a042037984658347108ca1d8dc717645bb4cc3a68925441d = $context["javascript"]) && is_string($__internal_034507fc0e2f02f9ca8dd9f83fe8b27f38c685b217008f1906814c7e5aeb49e4 = "select2.min.js") && ('' === $__internal_034507fc0e2f02f9ca8dd9f83fe8b27f38c685b217008f1906814c7e5aeb49e4 || $__internal_034507fc0e2f02f9ca8dd9f83fe8b27f38c685b217008f1906814c7e5aeb49e4 === substr($__internal_dfe48dde1daa0c31a042037984658347108ca1d8dc717645bb4cc3a68925441d, -strlen($__internal_034507fc0e2f02f9ca8dd9f83fe8b27f38c685b217008f1906814c7e5aeb49e4))))) {
                // line 74
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
                ";
            }
            // line 76
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.timepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
            <!--[if lt IE 9]><script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script><![endif]-->

            ";
        // line 84
        if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMCallsBundle", array(), "any", true, true)) {
            // line 85
            echo "                <script type=\"text/javascript\" src=\"//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/twilio.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 88
        echo "            ";
        if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMCoreBundle", array(), "any", true, true)) {
            // line 89
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/cityStateAutoload.js"), "html", null, true);
            echo "\"></script>
            <script type=\"text/javascript\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/timezones.full.js"), "html", null, true);
            echo "\"></script>
            <script type=\"text/javascript\" src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/timezones.js"), "html", null, true);
            echo "\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/validation.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["googleApiKey"]) ? $context["googleApiKey"] : $this->getContext($context, "googleApiKey")), "html", null, true);
            echo "&signed_in=true&libraries=places\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/index.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 96
        echo "
            ";
        // line 97
        if (( !array_key_exists("pageTitle", $context) &&  !array_key_exists("activityName", $context))) {
            // line 98
            echo "                <script>
                    \$(function() {
                        document.title = document.title.replace('Admin', 'SurgeActivity');
                    });
                </script>
            ";
        }
        // line 104
        echo "        ";
        
        $__internal_00eed7d717c576903ef497ae4a6ecddc94d41c8695226c9b25813755954e3a4d->leave($__internal_00eed7d717c576903ef497ae4a6ecddc94d41c8695226c9b25813755954e3a4d_prof);

    }

    // line 127
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_12dd6c82374810cd66b15b1b67d7a6b2fb7bbac40f0baa8ac3695f9cfdb133cf = $this->env->getExtension("native_profiler");
        $__internal_12dd6c82374810cd66b15b1b67d7a6b2fb7bbac40f0baa8ac3695f9cfdb133cf->enter($__internal_12dd6c82374810cd66b15b1b67d7a6b2fb7bbac40f0baa8ac3695f9cfdb133cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_12dd6c82374810cd66b15b1b67d7a6b2fb7bbac40f0baa8ac3695f9cfdb133cf->leave($__internal_12dd6c82374810cd66b15b1b67d7a6b2fb7bbac40f0baa8ac3695f9cfdb133cf_prof);

    }

    // line 153
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a9bcfb66f589b526b23cb53244cab320fa81ec6a375975ef842b5c702d56ed79 = $this->env->getExtension("native_profiler");
        $__internal_a9bcfb66f589b526b23cb53244cab320fa81ec6a375975ef842b5c702d56ed79->enter($__internal_a9bcfb66f589b526b23cb53244cab320fa81ec6a375975ef842b5c702d56ed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 154
        echo "
                                        ";
        // line 155
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 156
            echo "
                                            ";
            // line 157
            if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
                // line 158
                echo "                                                <ol class=\"nav navbar-top-links breadcrumb\">
                                                    ";
                // line 159
                if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                    // line 160
                    echo "                                                        ";
                    if (array_key_exists("action", $context)) {
                        // line 161
                        echo "                                                            ";
                        $context["adminBreadcrumbs"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method");
                        // line 162
                        echo "                                                            ";
                        $context["skip"] = false;
                        // line 163
                        echo "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["adminBreadcrumbs"]) ? $context["adminBreadcrumbs"] : $this->getContext($context, "adminBreadcrumbs")));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["i"] => $context["menu"]) {
                            // line 164
                            echo "                                                                ";
                            if ( !( !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") && twig_in_filter("/admin/dashboard", $this->getAttribute($context["menu"], "getUri", array(), "method")))) {
                                // line 165
                                echo "                                                                    ";
                                if ( !$this->getAttribute($context["loop"], "last", array())) {
                                    // line 166
                                    echo "                                                                        <li>
                                                                            ";
                                    // line 167
                                    if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                        // line 168
                                        echo "                                                                                ";
                                        $context["skip"] = false;
                                        // line 169
                                        echo "                                                                                    ";
                                        if ( !twig_in_filter("billing_info/list", $this->getAttribute($context["menu"], "getUri", array(), "method"))) {
                                            // line 170
                                            echo "                                                                                        <a href=\"";
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                            echo "\">";
                                            echo $this->getAttribute($context["menu"], "label", array());
                                            echo "</a>
                                                                                    ";
                                        } else {
                                            // line 172
                                            echo "                                                                                        <span style=\"color:#999;\">Account Info</span>
                                                                                        ";
                                            // line 173
                                            $context["skip"] = true;
                                            // line 174
                                            echo "                                                                                    ";
                                        }
                                        // line 175
                                        echo "                                                                            ";
                                    } else {
                                        // line 176
                                        echo "                                                                                ";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                        echo "
                                                                            ";
                                    }
                                    // line 178
                                    echo "                                                                        </li>
                                                                    ";
                                } else {
                                    // line 180
                                    echo "                                                                        ";
                                    if ( !(isset($context["skip"]) ? $context["skip"] : $this->getContext($context, "skip"))) {
                                        // line 181
                                        echo "                                                                            <li class=\"active\"><span>";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                        echo "</span></li>
                                                                        ";
                                    }
                                    // line 183
                                    echo "                                                                    ";
                                }
                                // line 184
                                echo "                                                                ";
                            }
                            // line 185
                            echo "                                                            ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['i'], $context['menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 186
                        echo "                                                        ";
                    }
                    // line 187
                    echo "                                                    ";
                } else {
                    // line 188
                    echo "                                                        ";
                    echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                    echo "
                                                    ";
                }
                // line 190
                echo "                                                </ol>
                                            ";
            }
            // line 192
            echo "                                        ";
        }
        // line 193
        echo "                                    ";
        
        $__internal_a9bcfb66f589b526b23cb53244cab320fa81ec6a375975ef842b5c702d56ed79->leave($__internal_a9bcfb66f589b526b23cb53244cab320fa81ec6a375975ef842b5c702d56ed79_prof);

    }

    // line 228
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a9805dc66b981230208e1364727f6d6389457af8e43b6df8b155e706257c88e1 = $this->env->getExtension("native_profiler");
        $__internal_a9805dc66b981230208e1364727f6d6389457af8e43b6df8b155e706257c88e1->enter($__internal_a9805dc66b981230208e1364727f6d6389457af8e43b6df8b155e706257c88e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 229
        echo "                <div class=\"";
        $this->displayBlock('sonata_whole_content_wrapper_classes', $context, $blocks);
        echo "\">
                    ";
        // line 230
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 298
        echo "                </div>
            ";
        
        $__internal_a9805dc66b981230208e1364727f6d6389457af8e43b6df8b155e706257c88e1->leave($__internal_a9805dc66b981230208e1364727f6d6389457af8e43b6df8b155e706257c88e1_prof);

    }

    // line 229
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        $__internal_0440d4688f11d32dd476ae10b37af979c308fe78ec4f3ed78d6fd102aafeb3ce = $this->env->getExtension("native_profiler");
        $__internal_0440d4688f11d32dd476ae10b37af979c308fe78ec4f3ed78d6fd102aafeb3ce->enter($__internal_0440d4688f11d32dd476ae10b37af979c308fe78ec4f3ed78d6fd102aafeb3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_whole_content_wrapper_classes"));

        echo "content clear-fix";
        
        $__internal_0440d4688f11d32dd476ae10b37af979c308fe78ec4f3ed78d6fd102aafeb3ce->leave($__internal_0440d4688f11d32dd476ae10b37af979c308fe78ec4f3ed78d6fd102aafeb3ce_prof);

    }

    // line 230
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_71947c99db6d99ae87cfac54992459c44433654091c5db2cacb66c8a08e2ebf9 = $this->env->getExtension("native_profiler");
        $__internal_71947c99db6d99ae87cfac54992459c44433654091c5db2cacb66c8a08e2ebf9->enter($__internal_71947c99db6d99ae87cfac54992459c44433654091c5db2cacb66c8a08e2ebf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 231
        echo "                        ";
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 249
        echo "
                        <div>
                            ";
        // line 251
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 296
        echo "                        </div>
                    ";
        
        $__internal_71947c99db6d99ae87cfac54992459c44433654091c5db2cacb66c8a08e2ebf9->leave($__internal_71947c99db6d99ae87cfac54992459c44433654091c5db2cacb66c8a08e2ebf9_prof);

    }

    // line 231
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_643e23430eb8509fa480095401379c52a3dd1dbbc2b489cf1a44cebae671fc57 = $this->env->getExtension("native_profiler");
        $__internal_643e23430eb8509fa480095401379c52a3dd1dbbc2b489cf1a44cebae671fc57->enter($__internal_643e23430eb8509fa480095401379c52a3dd1dbbc2b489cf1a44cebae671fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 232
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 247
        echo "
                        ";
        
        $__internal_643e23430eb8509fa480095401379c52a3dd1dbbc2b489cf1a44cebae671fc57->leave($__internal_643e23430eb8509fa480095401379c52a3dd1dbbc2b489cf1a44cebae671fc57_prof);

    }

    // line 232
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_3f2417fc4e5d7446d8493486c6cbd64e8778913a4220b074233e079522a78b81 = $this->env->getExtension("native_profiler");
        $__internal_3f2417fc4e5d7446d8493486c6cbd64e8778913a4220b074233e079522a78b81->enter($__internal_3f2417fc4e5d7446d8493486c6cbd64e8778913a4220b074233e079522a78b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 233
        echo "                                ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 234
            echo "                                    <div class=\"filter-wrap clearfix\">
                                        <div class=\"right-column\">
                                            ";
            // line 236
            $this->displayBlock("sonata_admin_filter_right_column", $context, $blocks);
            echo "
                                        </div>
                                        <div class=\"left-column\">
                                            ";
            // line 239
            $this->displayBlock("sonata_admin_filter_left_column", $context, $blocks);
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 243
        echo "                                ";
        if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMCallsBundle", array(), "any", true, true)) {
            // line 244
            echo "                                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCallsBundle:CallReporting:createCall"));
            echo "
                                ";
        }
        // line 246
        echo "                            ";
        
        $__internal_3f2417fc4e5d7446d8493486c6cbd64e8778913a4220b074233e079522a78b81->leave($__internal_3f2417fc4e5d7446d8493486c6cbd64e8778913a4220b074233e079522a78b81_prof);

    }

    // line 251
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_86270ee16136747feead7676ee124a045d07c5b6608ffdb6ab676f2796d085ff = $this->env->getExtension("native_profiler");
        $__internal_86270ee16136747feead7676ee124a045d07c5b6608ffdb6ab676f2796d085ff->enter($__internal_86270ee16136747feead7676ee124a045d07c5b6608ffdb6ab676f2796d085ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 252
        echo "
                                ";
        // line 253
        $this->displayBlock('notice', $context, $blocks);
        // line 256
        echo "
                                ";
        // line 257
        $this->displayBlock("sonata_admin_right_column", $context, $blocks);
        echo "

                                <div class=\"left-column\">

                                    ";
        // line 261
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 262
            echo "                                        <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                    ";
        }
        // line 264
        echo "
                                    ";
        // line 265
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 266
            echo "                                        <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                    ";
        }
        // line 268
        echo "
                                    ";
        // line 269
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 270
            echo "                                        <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                    ";
        }
        // line 272
        echo "
                                    ";
        // line 273
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 274
            echo "                                        <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                    ";
        }
        // line 276
        echo "
                                    ";
        // line 277
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 278
            echo "                                        <div class=\"table-wrap\">
                                            <div class=\"table-block\">
                                                <div class=\"custom-content\" style=\"padding-bottom: 35px;\">
                                                    <div>
                                                        ";
            // line 282
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                                    </div>

                                                    ";
            // line 285
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 286
                echo "                                                        <div class=\"sonata-ba-filter col-md-2\" style=\"display:none;\">
                                                            ";
                // line 287
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                                        </div>
                                                    ";
            }
            // line 290
            echo "                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        // line 294
        echo "                                </div>
                            ";
        
        $__internal_86270ee16136747feead7676ee124a045d07c5b6608ffdb6ab676f2796d085ff->leave($__internal_86270ee16136747feead7676ee124a045d07c5b6608ffdb6ab676f2796d085ff_prof);

    }

    // line 253
    public function block_notice($context, array $blocks = array())
    {
        $__internal_004a7dd5f27ae134383f031fc63d9fc39396f0234824d4bd627c4d46ec46394a = $this->env->getExtension("native_profiler");
        $__internal_004a7dd5f27ae134383f031fc63d9fc39396f0234824d4bd627c4d46ec46394a->enter($__internal_004a7dd5f27ae134383f031fc63d9fc39396f0234824d4bd627c4d46ec46394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 254
        echo "                                    ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "ZesharCRMCoreBundle::sonata_layout.html.twig", 254)->display($context);
        // line 255
        echo "                                ";
        
        $__internal_004a7dd5f27ae134383f031fc63d9fc39396f0234824d4bd627c4d46ec46394a->leave($__internal_004a7dd5f27ae134383f031fc63d9fc39396f0234824d4bd627c4d46ec46394a_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle::sonata_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  952 => 255,  949 => 254,  943 => 253,  935 => 294,  929 => 290,  923 => 287,  920 => 286,  918 => 285,  912 => 282,  906 => 278,  904 => 277,  901 => 276,  895 => 274,  893 => 273,  890 => 272,  884 => 270,  882 => 269,  879 => 268,  873 => 266,  871 => 265,  868 => 264,  862 => 262,  860 => 261,  853 => 257,  850 => 256,  848 => 253,  845 => 252,  839 => 251,  832 => 246,  826 => 244,  823 => 243,  816 => 239,  810 => 236,  806 => 234,  803 => 233,  797 => 232,  789 => 247,  786 => 232,  780 => 231,  772 => 296,  770 => 251,  766 => 249,  763 => 231,  757 => 230,  745 => 229,  737 => 298,  735 => 230,  730 => 229,  724 => 228,  717 => 193,  714 => 192,  710 => 190,  704 => 188,  701 => 187,  698 => 186,  684 => 185,  681 => 184,  678 => 183,  672 => 181,  669 => 180,  665 => 178,  659 => 176,  656 => 175,  653 => 174,  651 => 173,  648 => 172,  640 => 170,  637 => 169,  634 => 168,  632 => 167,  629 => 166,  626 => 165,  623 => 164,  605 => 163,  602 => 162,  599 => 161,  596 => 160,  594 => 159,  591 => 158,  589 => 157,  586 => 156,  584 => 155,  581 => 154,  575 => 153,  563 => 127,  556 => 104,  548 => 98,  546 => 97,  543 => 96,  538 => 94,  534 => 93,  530 => 92,  526 => 91,  522 => 90,  517 => 89,  514 => 88,  509 => 86,  506 => 85,  504 => 84,  499 => 82,  495 => 81,  491 => 80,  487 => 79,  483 => 78,  480 => 77,  474 => 76,  468 => 74,  465 => 73,  461 => 72,  455 => 69,  451 => 67,  445 => 66,  437 => 65,  432 => 62,  427 => 60,  423 => 59,  418 => 58,  415 => 57,  412 => 56,  406 => 55,  397 => 51,  391 => 49,  385 => 47,  383 => 46,  377 => 43,  372 => 41,  365 => 37,  360 => 36,  351 => 34,  347 => 33,  344 => 32,  338 => 31,  329 => 27,  323 => 26,  311 => 24,  297 => 303,  292 => 300,  290 => 228,  286 => 226,  282 => 224,  277 => 221,  272 => 218,  266 => 216,  264 => 215,  261 => 214,  259 => 213,  254 => 211,  251 => 210,  245 => 207,  242 => 206,  239 => 205,  237 => 204,  234 => 203,  231 => 202,  228 => 201,  225 => 200,  222 => 199,  220 => 198,  216 => 196,  214 => 195,  211 => 194,  209 => 153,  205 => 151,  203 => 150,  200 => 149,  198 => 148,  195 => 147,  186 => 141,  181 => 138,  175 => 135,  172 => 134,  170 => 133,  161 => 127,  157 => 125,  154 => 124,  151 => 123,  137 => 122,  132 => 120,  129 => 119,  125 => 117,  122 => 116,  119 => 115,  102 => 114,  99 => 113,  96 => 112,  90 => 110,  88 => 109,  83 => 107,  79 => 105,  77 => 55,  74 => 54,  72 => 31,  69 => 30,  67 => 26,  62 => 24,  59 => 23,  57 => 22,  55 => 21,  53 => 20,  51 => 19,  49 => 18,  47 => 17,  45 => 16,  43 => 15,  41 => 14,  39 => 13,  37 => 12,  35 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% set _preview      = block('preview') %}*/
/* {% set _form         = block('form') %}*/
/* {% set _show         = block('show') %}*/
/* {% set _list_table   = block('list_table') %}*/
/* {% set _list_filters = block('list_filters') %}*/
/* {% set _tab_menu     = block('tab_menu') %}*/
/* {% set _content      = block('content') %}*/
/* {% set _title        = block('title') %}*/
/* {% set _breadcrumb   = block('breadcrumb') %}*/
/* {% set _actions      = block('actions') %}*/
/* {% set _navbar_title = block('navbar_title') %}*/
/* {% set googleApiKey  = 'AIzaSyBYXDwzf_vXlHGkLj5vKQK7umVswZu7-t4' %}*/
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/* */
/*             {% for stylesheet in admin_pool.getOption('stylesheets', []) %}*/
/*                 <link rel="stylesheet" type="text/css"  href="{{ asset(stylesheet) }}"  />*/
/*             {% endfor %}*/
/*             <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmcore/css/sonata_fixes.css') }}"  />*/
/*             <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmcore/css/sonata_login_page_fixes.css') }}"  />*/
/*             <meta name="description" content="" />*/
/*             <meta name="keywords" content="" />*/
/*             <meta name="viewport" content="width=device-width,initial-scale=1">*/
/*             <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">*/
/*             <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">*/
/*             <link rel="stylesheet" href="{{ asset('css/select2.css') }}">*/
/*             <!--[if lt IE 9]><link rel="stylesheet" href="css/ie_style.css" type="text/css" ><![endif]-->*/
/* */
/*             {% if app.user  %}*/
/*                 <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*             {% else %}*/
/*                 <link rel="stylesheet" href="{{ asset('css/style3.css') }}">*/
/*             {% endif %}*/
/* */
/* */
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/* */
/*             {% if 0 %} {# do not output these scripts - they will be derived later from sonata #}*/
/*                 <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>*/
/*                 <script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}"></script>*/
/*                 <script src="{{ asset('js/select2.min.js') }}"></script>*/
/*             {% endif %}*/
/* */
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if admin_pool is defined and admin_pool.getOption('use_select2') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                };*/
/*             </script>*/
/*             {% for javascript in admin_pool.getOption('javascripts', []) %}*/
/*                 {% if not (javascript ends with 'select2.min.js') %}*/
/*                     <script src="{{ asset(javascript) }}" type="text/javascript"></script>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             <script src="{{ asset('js/jquery.cookie.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>*/
/*             <script src="{{ asset('js/select2.min.js') }}"></script>*/
/*             <script src="{{ asset('js/actions.js') }}"></script>*/
/*             <!--[if lt IE 9]><script src="{{ asset('js/html5shiv.js') }}"></script><![endif]-->*/
/* */
/*             {% if enable_bundles.ZesharCRMCallsBundle is defined %}*/
/*                 <script type="text/javascript" src="//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js"></script>*/
/*                 <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/twilio.js') }}"></script>*/
/*             {% endif %}*/
/*             {% if enable_bundles.ZesharCRMCoreBundle is defined %}*/
/*             <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/cityStateAutoload.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/timezones.full.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/timezones.js') }}"></script>*/
/*                 <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/validation.js') }}"></script>*/
/*                 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key={{ googleApiKey }}&signed_in=true&libraries=places"></script>*/
/*                 <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/index.js') }}"></script>*/
/*             {% endif %}*/
/* */
/*             {% if (pageTitle is not defined) and (activityName is not defined) %}*/
/*                 <script>*/
/*                     $(function() {*/
/*                         document.title = document.title.replace('Admin', 'SurgeActivity');*/
/*                     });*/
/*                 </script>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         <title>*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in admin.breadcrumbs(action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/* */
/* */
/*         <div class="wrapper" style="margin-top: 0;">*/
/* */
/*             <header>*/
/*                 {% if app.user %}*/
/*                     <div class="menu-wrap">*/
/*                         {{ knp_menu_render('main', {'template': 'ZesharCRMCoreBundle::main_menu.html.twig'}) }}*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="menu-wrap">*/
/*                         <ul class="menu">*/
/*                              <li id="login-logo">*/
/*                                 <img src="{{ asset('images/logo2.png') }}" alt="" width="41px">*/
/*                                 <p class="title-logo">Surge<span>Activity</span></p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if app.user %}*/
/*                     <div class="title-wrap">*/
/*                         {% if admin_pool is defined %}*/
/*                             <nav class="navbar navbar-static-top" style="position:relative; z-index: auto;" role="navigation">*/
/*                                 <div class="navbar-left">*/
/*                                     {% block sonata_breadcrumb %}*/
/* */
/*                                         {% if not is_granted('ROLE_ULTRA_ADMIN') %}*/
/* */
/*                                             {% if _breadcrumb is not empty or action is defined %}*/
/*                                                 <ol class="nav navbar-top-links breadcrumb">*/
/*                                                     {% if _breadcrumb is empty %}*/
/*                                                         {% if action is defined %}*/
/*                                                             {% set adminBreadcrumbs = admin.breadcrumbs(action) %}*/
/*                                                             {% set skip =  false %}*/
/*                                                             {% for i,menu in adminBreadcrumbs %}*/
/*                                                                 {% if not (  (not is_granted('ROLE_SUPER_ADMIN')) and '/admin/dashboard' in menu.getUri()) %}*/
/*                                                                     {% if (not loop.last) %}*/
/*                                                                         <li>*/
/*                                                                             {% if menu.uri is not empty %}*/
/*                                                                                 {% set skip =  false %}*/
/*                                                                                     {% if not ('billing_info/list' in menu.getUri()) %}*/
/*                                                                                         <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                                     {% else %}*/
/*                                                                                         <span style="color:#999;">Account Info</span>*/
/*                                                                                         {% set skip =  true %}*/
/*                                                                                     {% endif %}*/
/*                                                                             {% else %}*/
/*                                                                                 {{ menu.label }}*/
/*                                                                             {% endif %}*/
/*                                                                         </li>*/
/*                                                                     {% else %}*/
/*                                                                         {% if not skip %}*/
/*                                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                                         {% endif %}*/
/*                                                                     {% endif %}*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %}*/
/*                                                         {% endif %}*/
/*                                                     {% else %}*/
/*                                                         {{ _breadcrumb|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </ol>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endblock sonata_breadcrumb %}*/
/*                                 </div>*/
/*                                 {%  if object is defined and lead_subject.checkType(object) == true %}*/
/*                                     <div class="navbar-right">*/
/*                                         <ol class="nav navbar-top-links">*/
/*                                             {% if app.request.get('leadCampaign') is defined %}*/
/*                                                 {% set leadCampaign = app.request.get('leadCampaign') %}*/
/*                                             {% else %}*/
/*                                                 {% set leadCampaign = '' %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% set previousId = lead_subject.getPreviousId(object, leadCampaign) %}*/
/*                                             {% if previousId is not empty %}*/
/*                                                 <li>*/
/*                                                     <a href="{{ admin.generateUrl('show', {'id': previousId, 'leadCampaign': leadCampaign}) }}">&lt;&lt; Previous</a>*/
/*                                                 </li>*/
/*                                             {% endif %}*/
/*                                             <li>*/
/*                                                 <a href="{{ admin.generateUrl('list') }}">Back to list</a>*/
/*                                             </li>*/
/*                                             {% set nextId = lead_subject.getNextId(object, leadCampaign) %}*/
/* */
/*                                             {% if nextId is not empty %}*/
/*                                                 <li class=""><a href="{{ admin.generateUrl('show', {'id': nextId, 'leadCampaign': leadCampaign}) }}">Next &gt;&gt;</a></li>*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                             </nav>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </header>*/
/* */
/*             {% block sonata_wrapper %}*/
/*                 <div class="{% block sonata_whole_content_wrapper_classes %}content clear-fix{% endblock %}">*/
/*                     {% block sonata_page_content %}*/
/*                         {% block sonata_page_content_header %}*/
/*                             {% block sonata_page_content_nav %}*/
/*                                 {% if _tab_menu is not empty or _actions is not empty %}*/
/*                                     <div class="filter-wrap clearfix">*/
/*                                         <div class="right-column">*/
/*                                             {{ block('sonata_admin_filter_right_column') }}*/
/*                                         </div>*/
/*                                         <div class="left-column">*/
/*                                             {{ block('sonata_admin_filter_left_column') }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if enable_bundles.ZesharCRMCallsBundle is defined %}*/
/*                                     {{ render(controller('ZesharCRMCallsBundle:CallReporting:createCall')) }}*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_page_content_nav %}*/
/* */
/*                         {% endblock sonata_page_content_header %}*/
/* */
/*                         <div>*/
/*                             {% block sonata_admin_content %}*/
/* */
/*                                 {% block notice %}*/
/*                                     {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                                 {% endblock notice %}*/
/* */
/*                                 {{ block('sonata_admin_right_column') }}*/
/* */
/*                                 <div class="left-column">*/
/* */
/*                                     {% if _preview is not empty %}*/
/*                                         <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if _content is not empty %}*/
/*                                         <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if _show is not empty %}*/
/*                                         <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if _form is not empty %}*/
/*                                         <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                         <div class="table-wrap">*/
/*                                             <div class="table-block">*/
/*                                                 <div class="custom-content" style="padding-bottom: 35px;">*/
/*                                                     <div>*/
/*                                                         {{ _list_table|raw }}*/
/*                                                     </div>*/
/* */
/*                                                     {% if _list_filters|trim %}*/
/*                                                         <div class="sonata-ba-filter col-md-2" style="display:none;">*/
/*                                                             {{ _list_filters|raw }}*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endblock sonata_admin_content %}*/
/*                         </div>*/
/*                     {% endblock sonata_page_content %}*/
/*                 </div>*/
/*             {% endblock sonata_wrapper %}*/
/*         </div>*/
/*         <footer>*/
/*             <p class="title-logo">Surge<span>Activity</span></p>*/
/*             <p class="copy-left">&copy; {{ "now"|date("Y") }} Zeshar</p>*/
/*             <p class="copy-right">Powered By Zesharcrm</p>*/
/*         </footer>*/
/* */
/*     </body>*/
/* </html>*/
/* */
