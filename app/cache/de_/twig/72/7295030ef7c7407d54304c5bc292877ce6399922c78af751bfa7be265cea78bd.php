<?php

/* ZesharCRMCoreBundle:CRUD:activity_edit.html.twig */
class __TwigTemplate_de95c647fc397a636be9ca334ee17ca95f44aff2656fb6b2dd02305afa459c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "ZesharCRMCoreBundle:CRUD:activity_edit.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'activity_slot_fields' => array($this, 'block_activity_slot_fields'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b24724176a0246ebd6785ddff0fe376b40d99f6c1224a15af5d78d3f9100bf6 = $this->env->getExtension("native_profiler");
        $__internal_4b24724176a0246ebd6785ddff0fe376b40d99f6c1224a15af5d78d3f9100bf6->enter($__internal_4b24724176a0246ebd6785ddff0fe376b40d99f6c1224a15af5d78d3f9100bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:activity_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b24724176a0246ebd6785ddff0fe376b40d99f6c1224a15af5d78d3f9100bf6->leave($__internal_4b24724176a0246ebd6785ddff0fe376b40d99f6c1224a15af5d78d3f9100bf6_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_14031bae22c0d9bca2c86915535988f82f016f076c493057fc4d741b4e0902eb = $this->env->getExtension("native_profiler");
        $__internal_14031bae22c0d9bca2c86915535988f82f016f076c493057fc4d741b4e0902eb->enter($__internal_14031bae22c0d9bca2c86915535988f82f016f076c493057fc4d741b4e0902eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 5
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        <form
              ";
            // line 13
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"
              action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 17
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "              class=\"contact_card_edit_form\"
              >
            ";
            // line 20
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                // line 21
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 22
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 25
            echo "
            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 65
            echo "
            ";
            // line 66
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 69
            echo "            <div style=\"display:none;\">
                ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            </div>

            ";
            // line 73
            $this->displayBlock('formactions', $context, $blocks);
            // line 115
            echo "        </form>
    ";
        }
        // line 117
        echo "
    ";
        // line 118
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_14031bae22c0d9bca2c86915535988f82f016f076c493057fc4d741b4e0902eb->leave($__internal_14031bae22c0d9bca2c86915535988f82f016f076c493057fc4d741b4e0902eb_prof);

    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_81346c23596487805dd945a802809b5541998d985b526d692c74123ad99113ef = $this->env->getExtension("native_profiler");
        $__internal_81346c23596487805dd945a802809b5541998d985b526d692c74123ad99113ef->enter($__internal_81346c23596487805dd945a802809b5541998d985b526d692c74123ad99113ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 27
        echo "                <div class=\"row\">
            ";
        
        $__internal_81346c23596487805dd945a802809b5541998d985b526d692c74123ad99113ef->leave($__internal_81346c23596487805dd945a802809b5541998d985b526d692c74123ad99113ef_prof);

    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_755c1851fd1bbbeebff5328a12860e05901cf5f8f35cefc08869e376b06f2680 = $this->env->getExtension("native_profiler");
        $__internal_755c1851fd1bbbeebff5328a12860e05901cf5f8f35cefc08869e376b06f2680->enter($__internal_755c1851fd1bbbeebff5328a12860e05901cf5f8f35cefc08869e376b06f2680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 32
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["form_group"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["form_group"], "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 40
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 42
            if (($this->getAttribute($context["form_group"], "description", array()) != false)) {
                // line 43
                echo "                                            <p>";
                echo $this->getAttribute($context["form_group"], "description", array());
                echo "</p>
                                        ";
            }
            // line 45
            echo "
                                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form_group"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 47
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 48
                    echo "                                                ";
                    if (($context["field_name"] == "slot")) {
                        // line 49
                        echo "                                                    ";
                        $this->displayBlock('activity_slot_fields', $context, $blocks);
                        // line 52
                        echo "                                                ";
                    } elseif (($context["field_name"] == "slotString")) {
                        // line 53
                        echo "                                                ";
                    } else {
                        // line 54
                        echo "                                                    ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                                                ";
                    }
                    // line 56
                    echo "                                            ";
                }
                // line 57
                echo "                                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                    </div>
                                </div>
                            ";
            // line 61
            echo "                        </div>
                    </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            ";
        
        $__internal_755c1851fd1bbbeebff5328a12860e05901cf5f8f35cefc08869e376b06f2680->leave($__internal_755c1851fd1bbbeebff5328a12860e05901cf5f8f35cefc08869e376b06f2680_prof);

    }

    // line 49
    public function block_activity_slot_fields($context, array $blocks = array())
    {
        $__internal_0092dc9da267c9c65df60e1e1b7cf13f5a40921863a273a8f40d9ff1e582f018 = $this->env->getExtension("native_profiler");
        $__internal_0092dc9da267c9c65df60e1e1b7cf13f5a40921863a273a8f40d9ff1e582f018->enter($__internal_0092dc9da267c9c65df60e1e1b7cf13f5a40921863a273a8f40d9ff1e582f018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activity_slot_fields"));

        // line 50
        echo "                                                        ";
        $this->loadTemplate("SonataAdminBundle:Block:block_activity_slot.html.twig", "ZesharCRMCoreBundle:CRUD:activity_edit.html.twig", 50)->display($context);
        // line 51
        echo "                                                    ";
        
        $__internal_0092dc9da267c9c65df60e1e1b7cf13f5a40921863a273a8f40d9ff1e582f018->leave($__internal_0092dc9da267c9c65df60e1e1b7cf13f5a40921863a273a8f40d9ff1e582f018_prof);

    }

    // line 66
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_17b47ff6ec624c443c44b05ff84bfcaf2290f7178efc987e84e334cefa9d1ec1 = $this->env->getExtension("native_profiler");
        $__internal_17b47ff6ec624c443c44b05ff84bfcaf2290f7178efc987e84e334cefa9d1ec1->enter($__internal_17b47ff6ec624c443c44b05ff84bfcaf2290f7178efc987e84e334cefa9d1ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 67
        echo "                </div>
            ";
        
        $__internal_17b47ff6ec624c443c44b05ff84bfcaf2290f7178efc987e84e334cefa9d1ec1->leave($__internal_17b47ff6ec624c443c44b05ff84bfcaf2290f7178efc987e84e334cefa9d1ec1_prof);

    }

    // line 73
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_535f9e26427d8ffa5d6784b887886210b9be6be8fdd4c187c3a22170c6ad833d = $this->env->getExtension("native_profiler");
        $__internal_535f9e26427d8ffa5d6784b887886210b9be6be8fdd4c187c3a22170c6ad833d->enter($__internal_535f9e26427d8ffa5d6784b887886210b9be6be8fdd4c187c3a22170c6ad833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 74
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 75
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 76
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 77
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 79
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 81
            echo "                    ";
        } else {
            // line 82
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 83
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 88
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 89
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 91
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 92
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 94
                echo "
                            ";
                // line 95
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 96
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 99
                echo "
                            ";
                // line 100
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 101
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 103
                echo "                        ";
            } else {
                // line 104
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method")) {
                    // line 105
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 107
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 108
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 110
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 112
            echo "                    ";
        }
        // line 113
        echo "                </div>
            ";
        
        $__internal_535f9e26427d8ffa5d6784b887886210b9be6be8fdd4c187c3a22170c6ad833d->leave($__internal_535f9e26427d8ffa5d6784b887886210b9be6be8fdd4c187c3a22170c6ad833d_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:activity_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 113,  441 => 112,  435 => 110,  429 => 108,  426 => 107,  420 => 105,  417 => 104,  414 => 103,  406 => 101,  404 => 100,  401 => 99,  394 => 97,  389 => 96,  387 => 95,  384 => 94,  378 => 92,  376 => 91,  370 => 89,  367 => 88,  361 => 85,  357 => 83,  354 => 82,  351 => 81,  345 => 79,  339 => 77,  336 => 76,  334 => 75,  331 => 74,  325 => 73,  317 => 67,  311 => 66,  304 => 51,  301 => 50,  295 => 49,  288 => 64,  272 => 61,  268 => 58,  254 => 57,  251 => 56,  245 => 54,  242 => 53,  239 => 52,  236 => 49,  233 => 48,  230 => 47,  213 => 46,  210 => 45,  204 => 43,  202 => 42,  198 => 40,  192 => 36,  184 => 32,  166 => 31,  160 => 30,  152 => 27,  146 => 26,  136 => 118,  133 => 117,  129 => 115,  127 => 73,  121 => 70,  118 => 69,  116 => 66,  113 => 65,  111 => 30,  108 => 29,  106 => 26,  103 => 25,  97 => 22,  94 => 21,  92 => 20,  88 => 18,  84 => 17,  77 => 15,  74 => 14,  70 => 13,  67 => 12,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  51 => 5,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* {% block form %}*/
/*     {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*     {% set url = admin.id(object) is not null ? 'edit' : 'create' %}*/
/* */
/*     {% if not admin.hasRoute(url)%}*/
/*         <div>*/
/*             {{ "form_not_available"|trans({}, "SonataAdminBundle") }}*/
/*         </div>*/
/*     {% else %}*/
/*         <form*/
/*               {% if admin_pool.getOption('form_type') == 'horizontal' %}class="form-horizontal"{% endif %}*/
/*               role="form"*/
/*               action="{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}" {{ form_enctype(form) }}*/
/*               method="POST"*/
/*               {% if not admin_pool.getOption('html5_validate') %}novalidate="novalidate"{% endif %}*/
/*               class="contact_card_edit_form"*/
/*               >*/
/*             {% if form.vars.errors|length > 0 %}*/
/*                 <div class="sonata-ba-form-error">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% block sonata_pre_fieldsets %}*/
/*                 <div class="row">*/
/*             {% endblock %}*/
/* */
/*             {% block sonata_tab_content %}*/
/*                 {% for name, form_group in admin.formgroups %}*/
/*                     <div class="{{ form_group.class|default('col-md-12') }}">*/
/*                         <div class="box box-success">*/
/*                             <div class="box-header">*/
/*                                 <h4 class="box-title">*/
/*                                     {{ admin.trans(name, {}, form_group.translation_domain) }}*/
/*                                 </h4>*/
/*                             </div>*/
/*                             {#<div class="box{% if loop.first %} in{% endif %}" id="{{ admin.uniqid }}_{{ loop.index }}">#}*/
/*                                 <div class="box-body">*/
/*                                     <div class="sonata-ba-collapsed-fields">*/
/*                                         {% if form_group.description != false %}*/
/*                                             <p>{{ form_group.description|raw }}</p>*/
/*                                         {% endif %}*/
/* */
/*                                         {% for field_name in form_group.fields %}*/
/*                                             {% if admin.formfielddescriptions[field_name] is defined %}*/
/*                                                 {% if field_name == 'slot' %}*/
/*                                                     {% block activity_slot_fields %}*/
/*                                                         {% include 'SonataAdminBundle:Block:block_activity_slot.html.twig' %}*/
/*                                                     {% endblock %}*/
/*                                                 {% elseif field_name == 'slotString' %}*/
/*                                                 {% else %}*/
/*                                                     {{ form_row(form[field_name])}}*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {#</div>#}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endblock %}*/
/* */
/*             {% block sonata_post_fieldsets %}*/
/*                 </div>*/
/*             {% endblock %}*/
/*             <div style="display:none;">*/
/*                 {{ form_rest(form) }}*/
/*             </div>*/
/* */
/*             {% block formactions %}*/
/*                 <div class="well well-small form-actions">*/
/*                     {% if app.request.isxmlhttprequest %}*/
/*                         {% if admin.id(object) is not null %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_update"><i class="fa fa-save"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% else %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_create"><i class="fa fa-plus-circle"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {% if admin.supportsPreviewMode %}*/
/*                             <button class="btn btn-info persist-preview" name="btn_preview" type="submit">*/
/*                                 <i class="fa fa-eye"></i>*/
/*                                 {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}*/
/*                             </button>*/
/*                         {% endif %}*/
/*                         {% if admin.id(object) is not null %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_update_and_edit"><i class="fa fa-save"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                             {% if admin.hasroute('list') %}*/
/*                                 <button type="submit" class="btn btn-success" name="btn_update_and_list"><i class="fa fa-save"></i> <i class="fa fa-list"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/* */
/*                             {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}*/
/*                                 {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/*                                 <a class="btn btn-danger" href="{{ admin.generateObjectUrl('delete', object) }}"><i class="fa fa-minus-circle"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                             {% endif %}*/
/* */
/*                             {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}*/
/*                                 <a class="btn btn-info" href="{{ admin.generateObjectUrl('acl', object) }}"><i class="fa fa-users"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if admin.hasroute('edit') %}*/
/*                                 <button class="btn btn-success" type="submit" name="btn_create_and_edit"><i class="fa fa-save"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/*                             {% if admin.hasroute('list') %}*/
/*                                 <button type="submit" class="btn btn-success" name="btn_create_and_list"><i class="fa fa-save"></i> <i class="fa fa-list"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/*                             <button class="btn btn-success" type="submit" name="btn_create_and_create"><i class="fa fa-plus-circle"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endblock formactions %}*/
/*         </form>*/
/*     {% endif%}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}*/
/* */
/* {% endblock %}*/
