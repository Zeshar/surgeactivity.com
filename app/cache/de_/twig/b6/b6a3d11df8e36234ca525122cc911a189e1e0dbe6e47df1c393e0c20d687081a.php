<?php

/* ZesharCRMCoreBundle:CRUD:lead_opportunity_edit.html.twig */
class __TwigTemplate_ba6317b60e6247a336c92a9d88645ccedfb952dbeade72d37c91e78497fb41d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_edit.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
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
        $__internal_f96f6533e0d581c55e76ff8779b180cb9c731fafb6a08fdbc86fb30b0b27e9b6 = $this->env->getExtension("native_profiler");
        $__internal_f96f6533e0d581c55e76ff8779b180cb9c731fafb6a08fdbc86fb30b0b27e9b6->enter($__internal_f96f6533e0d581c55e76ff8779b180cb9c731fafb6a08fdbc86fb30b0b27e9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:lead_opportunity_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f96f6533e0d581c55e76ff8779b180cb9c731fafb6a08fdbc86fb30b0b27e9b6->leave($__internal_f96f6533e0d581c55e76ff8779b180cb9c731fafb6a08fdbc86fb30b0b27e9b6_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_6412fc4cbcbd49b969de38cc6ca43b4042893947f13b2a1d6b7fc72926c2616f = $this->env->getExtension("native_profiler");
        $__internal_6412fc4cbcbd49b969de38cc6ca43b4042893947f13b2a1d6b7fc72926c2616f->enter($__internal_6412fc4cbcbd49b969de38cc6ca43b4042893947f13b2a1d6b7fc72926c2616f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
            echo "              >
            ";
            // line 19
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                // line 20
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 21
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 24
            echo "
            ";
            // line 25
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 28
            echo "
            ";
            // line 29
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 62
            echo "
            ";
            // line 63
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 66
            echo "                
            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 69
            $this->displayBlock('formactions', $context, $blocks);
            // line 111
            echo "        </form>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_6412fc4cbcbd49b969de38cc6ca43b4042893947f13b2a1d6b7fc72926c2616f->leave($__internal_6412fc4cbcbd49b969de38cc6ca43b4042893947f13b2a1d6b7fc72926c2616f_prof);

    }

    // line 25
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_6666bbfdfcabf06ea3f57f31f075cdd961ee8665a7a4c6e32b1a3e0047067938 = $this->env->getExtension("native_profiler");
        $__internal_6666bbfdfcabf06ea3f57f31f075cdd961ee8665a7a4c6e32b1a3e0047067938->enter($__internal_6666bbfdfcabf06ea3f57f31f075cdd961ee8665a7a4c6e32b1a3e0047067938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 26
        echo "                <div class=\"row\">
            ";
        
        $__internal_6666bbfdfcabf06ea3f57f31f075cdd961ee8665a7a4c6e32b1a3e0047067938->leave($__internal_6666bbfdfcabf06ea3f57f31f075cdd961ee8665a7a4c6e32b1a3e0047067938_prof);

    }

    // line 29
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_9947d0403e6a3522c2159d99ed02d53c8f50b16d45202ddac1fd4a783f6cf644 = $this->env->getExtension("native_profiler");
        $__internal_9947d0403e6a3522c2159d99ed02d53c8f50b16d45202ddac1fd4a783f6cf644->enter($__internal_9947d0403e6a3522c2159d99ed02d53c8f50b16d45202ddac1fd4a783f6cf644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 30
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
            // line 31
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["form_group"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["form_group"], "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 39
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 41
            if (($this->getAttribute($context["form_group"], "description", array()) != false)) {
                // line 42
                echo "                                            <p>";
                echo $this->getAttribute($context["form_group"], "description", array());
                echo "</p>
                                        ";
            }
            // line 44
            echo "
                                        ";
            // line 45
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
                // line 46
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 47
                    echo "                                                ";
                    if (($context["field_name"] != "newAttachment")) {
                        // line 48
                        echo "                                                    ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                                                ";
                    } else {
                        // line 50
                        echo "                                                    ";
                        $this->loadTemplate("ZesharCRMCoreBundle:Form:existing_attachments.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_edit.html.twig", 50)->display($context);
                        // line 51
                        echo "                                                    ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                                                ";
                    }
                    // line 53
                    echo "                                            ";
                }
                // line 54
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
            // line 55
            echo "                                    </div>
                                </div>
                            ";
            // line 58
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
        // line 61
        echo "            ";
        
        $__internal_9947d0403e6a3522c2159d99ed02d53c8f50b16d45202ddac1fd4a783f6cf644->leave($__internal_9947d0403e6a3522c2159d99ed02d53c8f50b16d45202ddac1fd4a783f6cf644_prof);

    }

    // line 63
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_d29fd0a2c6b5bfc5fe49baf690db01d8c835845ebd41af2c834e694119eb864e = $this->env->getExtension("native_profiler");
        $__internal_d29fd0a2c6b5bfc5fe49baf690db01d8c835845ebd41af2c834e694119eb864e->enter($__internal_d29fd0a2c6b5bfc5fe49baf690db01d8c835845ebd41af2c834e694119eb864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 64
        echo "                </div>
            ";
        
        $__internal_d29fd0a2c6b5bfc5fe49baf690db01d8c835845ebd41af2c834e694119eb864e->leave($__internal_d29fd0a2c6b5bfc5fe49baf690db01d8c835845ebd41af2c834e694119eb864e_prof);

    }

    // line 69
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_2c3fde931c64e57db968b50c9209bf5cd3c949d36aca577a963c5393c3e1a5a0 = $this->env->getExtension("native_profiler");
        $__internal_2c3fde931c64e57db968b50c9209bf5cd3c949d36aca577a963c5393c3e1a5a0->enter($__internal_2c3fde931c64e57db968b50c9209bf5cd3c949d36aca577a963c5393c3e1a5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 70
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 71
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 72
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 73
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 75
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 77
            echo "                    ";
        } else {
            // line 78
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 79
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 84
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 85
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 87
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 88
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 90
                echo "
                            ";
                // line 91
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 92
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 95
                echo "
                            ";
                // line 96
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 97
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 99
                echo "                        ";
            } else {
                // line 100
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method")) {
                    // line 101
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 103
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 104
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 106
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 108
            echo "                    ";
        }
        // line 109
        echo "                </div>
            ";
        
        $__internal_2c3fde931c64e57db968b50c9209bf5cd3c949d36aca577a963c5393c3e1a5a0->leave($__internal_2c3fde931c64e57db968b50c9209bf5cd3c949d36aca577a963c5393c3e1a5a0_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:lead_opportunity_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 109,  422 => 108,  416 => 106,  410 => 104,  407 => 103,  401 => 101,  398 => 100,  395 => 99,  387 => 97,  385 => 96,  382 => 95,  375 => 93,  370 => 92,  368 => 91,  365 => 90,  359 => 88,  357 => 87,  351 => 85,  348 => 84,  342 => 81,  338 => 79,  335 => 78,  332 => 77,  326 => 75,  320 => 73,  317 => 72,  315 => 71,  312 => 70,  306 => 69,  298 => 64,  292 => 63,  285 => 61,  269 => 58,  265 => 55,  251 => 54,  248 => 53,  242 => 51,  239 => 50,  233 => 48,  230 => 47,  227 => 46,  210 => 45,  207 => 44,  201 => 42,  199 => 41,  195 => 39,  189 => 35,  181 => 31,  163 => 30,  157 => 29,  149 => 26,  143 => 25,  133 => 114,  130 => 113,  126 => 111,  124 => 69,  119 => 67,  116 => 66,  114 => 63,  111 => 62,  109 => 29,  106 => 28,  104 => 25,  101 => 24,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  83 => 17,  76 => 15,  73 => 14,  69 => 13,  66 => 12,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
/*                                                 {% if field_name != 'newAttachment' %}*/
/*                                                     {{ form_row(form[field_name])}}*/
/*                                                 {% else %}*/
/*                                                     {% include 'ZesharCRMCoreBundle:Form:existing_attachments.html.twig' %}*/
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
/*                 */
/*             {{ form_rest(form) }}*/
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
