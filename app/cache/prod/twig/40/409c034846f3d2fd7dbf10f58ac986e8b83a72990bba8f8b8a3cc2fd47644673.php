<?php

/* ZesharCRMCoreBundle::sonata_layout.html.twig */
class __TwigTemplate_08b78dc21180c5a9d76d1d2006aafd60ffb728bd9c073a24e5122620c01a29ad extends Twig_Template
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
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : null))) {
            // line 110
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
                if ((array_key_exists("object", $context) && ($this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : null), "checkType", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method") == true))) {
                    // line 196
                    echo "                                    <div class=\"navbar-right\">
                                        <ol class=\"nav navbar-top-links\">
                                            ";
                    // line 198
                    if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "leadCampaign"), "method", true, true)) {
                        // line 199
                        echo "                                                ";
                        $context["leadCampaign"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "leadCampaign"), "method");
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
                    $context["previousId"] = $this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : null), "getPreviousId", array(0 => (isset($context["object"]) ? $context["object"] : null), 1 => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : null)), "method");
                    // line 205
                    echo "                                            ";
                    if ( !twig_test_empty((isset($context["previousId"]) ? $context["previousId"] : null))) {
                        // line 206
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 207
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "show", 1 => array("id" => (isset($context["previousId"]) ? $context["previousId"] : null), "leadCampaign" => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : null))), "method"), "html", null, true);
                        echo "\">&lt;&lt; Previous</a>
                                                </li>
                                            ";
                    }
                    // line 210
                    echo "                                            <li>
                                                <a href=\"";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                    echo "\">Back to list</a>
                                            </li>
                                            ";
                    // line 213
                    $context["nextId"] = $this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : null), "getNextId", array(0 => (isset($context["object"]) ? $context["object"] : null), 1 => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : null)), "method");
                    // line 214
                    echo "
                                            ";
                    // line 215
                    if ( !twig_test_empty((isset($context["nextId"]) ? $context["nextId"] : null))) {
                        // line 216
                        echo "                                                <li class=\"\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "show", 1 => array("id" => (isset($context["nextId"]) ? $context["nextId"] : null), "leadCampaign" => (isset($context["leadCampaign"]) ? $context["leadCampaign"] : null))), "method"), "html", null, true);
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
    }

    // line 24
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 26
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 27
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 66
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 73
            echo "                ";
            if ( !(is_string($__internal_e35a4f033a9c7915b1afc3a20888bec50e442e0f308f9c24307260e3ac4398e3 = $context["javascript"]) && is_string($__internal_b49903ab6b90541708b3c125817e54959191625477187528b9e0f368ed87b094 = "select2.min.js") && ('' === $__internal_b49903ab6b90541708b3c125817e54959191625477187528b9e0f368ed87b094 || $__internal_b49903ab6b90541708b3c125817e54959191625477187528b9e0f368ed87b094 === substr($__internal_e35a4f033a9c7915b1afc3a20888bec50e442e0f308f9c24307260e3ac4398e3, -strlen($__internal_b49903ab6b90541708b3c125817e54959191625477187528b9e0f368ed87b094))))) {
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
            echo twig_escape_filter($this->env, (isset($context["googleApiKey"]) ? $context["googleApiKey"] : null), "html", null, true);
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
    }

    // line 127
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 153
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 154
        echo "
                                        ";
        // line 155
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 156
            echo "
                                            ";
            // line 157
            if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null)) || array_key_exists("action", $context))) {
                // line 158
                echo "                                                <ol class=\"nav navbar-top-links breadcrumb\">
                                                    ";
                // line 159
                if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                    // line 160
                    echo "                                                        ";
                    if (array_key_exists("action", $context)) {
                        // line 161
                        echo "                                                            ";
                        $context["adminBreadcrumbs"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method");
                        // line 162
                        echo "                                                            ";
                        $context["skip"] = false;
                        // line 163
                        echo "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["adminBreadcrumbs"]) ? $context["adminBreadcrumbs"] : null));
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
                                    if ( !(isset($context["skip"]) ? $context["skip"] : null)) {
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
                    echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
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
    }

    // line 228
    public function block_sonata_wrapper($context, array $blocks = array())
    {
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
    }

    // line 229
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        echo "content clear-fix";
    }

    // line 230
    public function block_sonata_page_content($context, array $blocks = array())
    {
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
    }

    // line 231
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 232
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 247
        echo "
                        ";
    }

    // line 232
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 233
        echo "                                ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null)) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) {
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
    }

    // line 251
    public function block_sonata_admin_content($context, array $blocks = array())
    {
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
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null))) {
            // line 262
            echo "                                        <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                                    ";
        }
        // line 264
        echo "
                                    ";
        // line 265
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : null))) {
            // line 266
            echo "                                        <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                                    ";
        }
        // line 268
        echo "
                                    ";
        // line 269
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : null))) {
            // line 270
            echo "                                        <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                                    ";
        }
        // line 272
        echo "
                                    ";
        // line 273
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : null))) {
            // line 274
            echo "                                        <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                                    ";
        }
        // line 276
        echo "
                                    ";
        // line 277
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null)) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null)))) {
            // line 278
            echo "                                        <div class=\"table-wrap\">
                                            <div class=\"table-block\">
                                                <div class=\"custom-content\" style=\"padding-bottom: 35px;\">
                                                    <div>
                                                        ";
            // line 282
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                                    </div>

                                                    ";
            // line 285
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 286
                echo "                                                        <div class=\"sonata-ba-filter col-md-2\" style=\"display:none;\">
                                                            ";
                // line 287
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
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
    }

    // line 253
    public function block_notice($context, array $blocks = array())
    {
        // line 254
        echo "                                    ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "ZesharCRMCoreBundle::sonata_layout.html.twig", 254)->display($context);
        // line 255
        echo "                                ";
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
        return array (  871 => 255,  868 => 254,  865 => 253,  860 => 294,  854 => 290,  848 => 287,  845 => 286,  843 => 285,  837 => 282,  831 => 278,  829 => 277,  826 => 276,  820 => 274,  818 => 273,  815 => 272,  809 => 270,  807 => 269,  804 => 268,  798 => 266,  796 => 265,  793 => 264,  787 => 262,  785 => 261,  778 => 257,  775 => 256,  773 => 253,  770 => 252,  767 => 251,  763 => 246,  757 => 244,  754 => 243,  747 => 239,  741 => 236,  737 => 234,  734 => 233,  731 => 232,  726 => 247,  723 => 232,  720 => 231,  715 => 296,  713 => 251,  709 => 249,  706 => 231,  703 => 230,  697 => 229,  692 => 298,  690 => 230,  685 => 229,  682 => 228,  678 => 193,  675 => 192,  671 => 190,  665 => 188,  662 => 187,  659 => 186,  645 => 185,  642 => 184,  639 => 183,  633 => 181,  630 => 180,  626 => 178,  620 => 176,  617 => 175,  614 => 174,  612 => 173,  609 => 172,  601 => 170,  598 => 169,  595 => 168,  593 => 167,  590 => 166,  587 => 165,  584 => 164,  566 => 163,  563 => 162,  560 => 161,  557 => 160,  555 => 159,  552 => 158,  550 => 157,  547 => 156,  545 => 155,  542 => 154,  539 => 153,  533 => 127,  529 => 104,  521 => 98,  519 => 97,  516 => 96,  511 => 94,  507 => 93,  503 => 92,  499 => 91,  495 => 90,  490 => 89,  487 => 88,  482 => 86,  479 => 85,  477 => 84,  472 => 82,  468 => 81,  464 => 80,  460 => 79,  456 => 78,  453 => 77,  447 => 76,  441 => 74,  438 => 73,  434 => 72,  428 => 69,  424 => 67,  418 => 66,  410 => 65,  405 => 62,  400 => 60,  396 => 59,  391 => 58,  388 => 57,  385 => 56,  382 => 55,  376 => 51,  370 => 49,  364 => 47,  362 => 46,  356 => 43,  351 => 41,  344 => 37,  339 => 36,  330 => 34,  326 => 33,  323 => 32,  320 => 31,  314 => 27,  311 => 26,  305 => 24,  294 => 303,  289 => 300,  287 => 228,  283 => 226,  279 => 224,  274 => 221,  269 => 218,  263 => 216,  261 => 215,  258 => 214,  256 => 213,  251 => 211,  248 => 210,  242 => 207,  239 => 206,  236 => 205,  234 => 204,  231 => 203,  228 => 202,  225 => 201,  222 => 200,  219 => 199,  217 => 198,  213 => 196,  211 => 195,  208 => 194,  206 => 153,  202 => 151,  200 => 150,  197 => 149,  195 => 148,  192 => 147,  183 => 141,  178 => 138,  172 => 135,  169 => 134,  167 => 133,  158 => 127,  154 => 125,  151 => 124,  148 => 123,  134 => 122,  129 => 120,  126 => 119,  122 => 117,  119 => 116,  116 => 115,  99 => 114,  96 => 113,  93 => 112,  87 => 110,  85 => 109,  80 => 107,  76 => 105,  74 => 55,  71 => 54,  69 => 31,  66 => 30,  64 => 26,  59 => 24,  56 => 23,  54 => 22,  52 => 21,  50 => 20,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  38 => 14,  36 => 13,  34 => 12,  32 => 11,);
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
