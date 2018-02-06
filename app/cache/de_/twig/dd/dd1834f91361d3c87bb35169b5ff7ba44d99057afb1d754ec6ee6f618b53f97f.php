<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_adcc0edd26b4e1229c29527ec28f7f3731ba913b1e4d7b6e0586eba8b9917e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'custom_data' => array($this, 'block_custom_data'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b84b1bc248d6b0e02e8c2306818f463c32491e9021f87e759071fa75d91496a = $this->env->getExtension("native_profiler");
        $__internal_2b84b1bc248d6b0e02e8c2306818f463c32491e9021f87e759071fa75d91496a->enter($__internal_2b84b1bc248d6b0e02e8c2306818f463c32491e9021f87e759071fa75d91496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b84b1bc248d6b0e02e8c2306818f463c32491e9021f87e759071fa75d91496a->leave($__internal_2b84b1bc248d6b0e02e8c2306818f463c32491e9021f87e759071fa75d91496a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3ddeda1f1bd4b5ef12bfffd60aceae625938d448176c9c6454d5dc9f63988cf1 = $this->env->getExtension("native_profiler");
        $__internal_3ddeda1f1bd4b5ef12bfffd60aceae625938d448176c9c6454d5dc9f63988cf1->enter($__internal_3ddeda1f1bd4b5ef12bfffd60aceae625938d448176c9c6454d5dc9f63988cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        echo "</li>
";
        
        $__internal_3ddeda1f1bd4b5ef12bfffd60aceae625938d448176c9c6454d5dc9f63988cf1->leave($__internal_3ddeda1f1bd4b5ef12bfffd60aceae625938d448176c9c6454d5dc9f63988cf1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_23637241bdc009caa838326b7b5c4c67de6cd3dc74f9287e16a64c49f18e8e3b = $this->env->getExtension("native_profiler");
        $__internal_23637241bdc009caa838326b7b5c4c67de6cd3dc74f9287e16a64c49f18e8e3b->enter($__internal_23637241bdc009caa838326b7b5c4c67de6cd3dc74f9287e16a64c49f18e8e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        
        $__internal_23637241bdc009caa838326b7b5c4c67de6cd3dc74f9287e16a64c49f18e8e3b->leave($__internal_23637241bdc009caa838326b7b5c4c67de6cd3dc74f9287e16a64c49f18e8e3b_prof);

    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_324846ae39a0ab077b6e53a856be550bbc4c581359d833c2f27df4dd13104f19 = $this->env->getExtension("native_profiler");
        $__internal_324846ae39a0ab077b6e53a856be550bbc4c581359d833c2f27df4dd13104f19->enter($__internal_324846ae39a0ab077b6e53a856be550bbc4c581359d833c2f27df4dd13104f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 21
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

            ";
        // line 25
        $this->displayBlock('list_header', $context, $blocks);
        // line 26
        echo "
            ";
        // line 27
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 28
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 29
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 30
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
                ";
            }
            // line 33
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 34
            $this->displayBlock('table_header', $context, $blocks);
            // line 70
            echo "
                        ";
            // line 71
            $this->displayBlock('table_body', $context, $blocks);
            // line 80
            echo "
                        ";
            // line 81
            $this->displayBlock('table_footer', $context, $blocks);
            // line 169
            echo "                    </table>
                ";
            // line 170
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 171
                echo "                </form>
                ";
            }
            // line 173
            echo "            ";
        } else {
            // line 174
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 178
        echo "
            ";
        // line 179
        $this->displayBlock('list_footer', $context, $blocks);
        // line 180
        echo "
            ";
        // line 181
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


        </div>
    </div>
    ";
        // line 186
        $this->displayBlock('custom_data', $context, $blocks);
        
        $__internal_324846ae39a0ab077b6e53a856be550bbc4c581359d833c2f27df4dd13104f19->leave($__internal_324846ae39a0ab077b6e53a856be550bbc4c581359d833c2f27df4dd13104f19_prof);

    }

    // line 25
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_e0ef64530c1b4155272fe778c885f6c61284bbdf3cd46b78f57fc9fc25c68bd3 = $this->env->getExtension("native_profiler");
        $__internal_e0ef64530c1b4155272fe778c885f6c61284bbdf3cd46b78f57fc9fc25c68bd3->enter($__internal_e0ef64530c1b4155272fe778c885f6c61284bbdf3cd46b78f57fc9fc25c68bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_e0ef64530c1b4155272fe778c885f6c61284bbdf3cd46b78f57fc9fc25c68bd3->leave($__internal_e0ef64530c1b4155272fe778c885f6c61284bbdf3cd46b78f57fc9fc25c68bd3_prof);

    }

    // line 34
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_d61003f34fe93809b921679f7660d0d30ac7ce5dfc3760a13105e6ce2cefe3d1 = $this->env->getExtension("native_profiler");
        $__internal_d61003f34fe93809b921679f7660d0d30ac7ce5dfc3760a13105e6ce2cefe3d1->enter($__internal_d61003f34fe93809b921679f7660d0d30ac7ce5dfc3760a13105e6ce2cefe3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 35
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 38
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 39
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 42
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 43
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 44
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 45
                echo "                                            ";
                // line 46
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 47
                echo "                                            ";
                // line 48
                echo "                                        ";
            } else {
                // line 49
                echo "                                            ";
                $context["sortable"] = false;
                // line 50
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 51
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 52
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 53
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 54
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 55
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 56
                    echo "                                            ";
                }
                // line 57
                echo "
                                            ";
                // line 58
                ob_start();
                // line 59
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 60
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 61
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                    ";
                // line 62
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 63
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 65
                echo "                                        ";
            }
            // line 66
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_d61003f34fe93809b921679f7660d0d30ac7ce5dfc3760a13105e6ce2cefe3d1->leave($__internal_d61003f34fe93809b921679f7660d0d30ac7ce5dfc3760a13105e6ce2cefe3d1_prof);

    }

    // line 71
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_5c0071d4feef77e802c4b33a0fee050dd75e3cbb66bacab31bb63bf630792bca = $this->env->getExtension("native_profiler");
        $__internal_5c0071d4feef77e802c4b33a0fee050dd75e3cbb66bacab31bb63bf630792bca->enter($__internal_5c0071d4feef77e802c4b33a0fee050dd75e3cbb66bacab31bb63bf630792bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 72
        echo "                            <tbody>
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 74
            echo "                                    <tr>
                                        ";
            // line 75
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 75)->display($context);
            // line 76
            echo "                                    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </tbody>
                        ";
        
        $__internal_5c0071d4feef77e802c4b33a0fee050dd75e3cbb66bacab31bb63bf630792bca->leave($__internal_5c0071d4feef77e802c4b33a0fee050dd75e3cbb66bacab31bb63bf630792bca_prof);

    }

    // line 81
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_03ae024d80471051387d8e5c74b3afd62ff7af39439dff93dce41da321730472 = $this->env->getExtension("native_profiler");
        $__internal_03ae024d80471051387d8e5c74b3afd62ff7af39439dff93dce41da321730472->enter($__internal_03ae024d80471051387d8e5c74b3afd62ff7af39439dff93dce41da321730472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 82
        echo "                            <tr>
                                <th colspan=\"";
        // line 83
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                    <div class=\"form-inline\">
                                        ";
        // line 85
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
            // line 86
            echo "                                            ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 87
                echo "                                                ";
                $this->displayBlock('batch', $context, $blocks);
                // line 128
                echo "                                            ";
            }
            // line 129
            echo "
                                            <div class=\"pull-right\">
                                                ";
            // line 131
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                // line 132
                echo "                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                            <i class=\"glyphicon glyphicon-export\"></i>
                                                            ";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                            <span class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 140
                    echo "                                                                <li>
                                                                    <a href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                    echo "\">
                                                                        <i class=\"glyphicon glyphicon-download\"></i>
                                                                        ";
                    // line 143
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                    echo "
                                                                    </a>
                                                                <li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "                                                        </ul>
                                                    </div>

                                                    &nbsp;-&nbsp;
                                                ";
            }
            // line 152
            echo "
                                                ";
            // line 153
            $this->displayBlock('pager_results', $context, $blocks);
            // line 156
            echo "                                            </div>
                                        ";
        }
        // line 158
        echo "                                    </div>
                                </th>
                            </tr>

                            ";
        // line 162
        $this->displayBlock('pager_links', $context, $blocks);
        // line 167
        echo "
                        ";
        
        $__internal_03ae024d80471051387d8e5c74b3afd62ff7af39439dff93dce41da321730472->leave($__internal_03ae024d80471051387d8e5c74b3afd62ff7af39439dff93dce41da321730472_prof);

    }

    // line 87
    public function block_batch($context, array $blocks = array())
    {
        $__internal_97f58e19154750f330d810a0308ffe01cf8009ed0ea88254653f50170c1fde91 = $this->env->getExtension("native_profiler");
        $__internal_97f58e19154750f330d810a0308ffe01cf8009ed0ea88254653f50170c1fde91->enter($__internal_97f58e19154750f330d810a0308ffe01cf8009ed0ea88254653f50170c1fde91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 88
        echo "                                                    <script>
                                                        ";
        // line 89
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 110
        echo "                                                    </script>

                                                    ";
        // line 112
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 125
        echo "
                                                    <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                ";
        
        $__internal_97f58e19154750f330d810a0308ffe01cf8009ed0ea88254653f50170c1fde91->leave($__internal_97f58e19154750f330d810a0308ffe01cf8009ed0ea88254653f50170c1fde91_prof);

    }

    // line 89
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_276caf9c4bb6c2451e3d5103cc195fee658086a12d5d532ed29d360b3d3325bc = $this->env->getExtension("native_profiler");
        $__internal_276caf9c4bb6c2451e3d5103cc195fee658086a12d5d532ed29d360b3d3325bc->enter($__internal_276caf9c4bb6c2451e3d5103cc195fee658086a12d5d532ed29d360b3d3325bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 90
        echo "                                                            jQuery(document).ready(function (\$) {
                                                                \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                    \$(this)
                                                                        .closest('table')
                                                                        .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                        .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                    ;
                                                                });

                                                                \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                    .on('ifChanged', function () {
                                                                        \$(this)
                                                                            .closest('tr')
                                                                            .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                        ;
                                                                    })
                                                                    .trigger('ifChanged')
                                                                ;
                                                            });
                                                        ";
        
        $__internal_276caf9c4bb6c2451e3d5103cc195fee658086a12d5d532ed29d360b3d3325bc->leave($__internal_276caf9c4bb6c2451e3d5103cc195fee658086a12d5d532ed29d360b3d3325bc_prof);

    }

    // line 112
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_3744f643c99895944104d80faf539c77baba437838ae901b4e04240e6b75f9fc = $this->env->getExtension("native_profiler");
        $__internal_3744f643c99895944104d80faf539c77baba437838ae901b4e04240e6b75f9fc->enter($__internal_3744f643c99895944104d80faf539c77baba437838ae901b4e04240e6b75f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 113
        echo "                                                        <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                            <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                            ";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                             (";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                                        </label>

                                                        <select name=\"action\" style=\"width: auto; height: auto\">
                                                            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 121
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["options"], "label", array()), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                                        </select>
                                                    ";
        
        $__internal_3744f643c99895944104d80faf539c77baba437838ae901b4e04240e6b75f9fc->leave($__internal_3744f643c99895944104d80faf539c77baba437838ae901b4e04240e6b75f9fc_prof);

    }

    // line 153
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_a7c39302cd9934be37eda68fb2ab6ff8cf326725492a3bfad4b888f23e71699f = $this->env->getExtension("native_profiler");
        $__internal_a7c39302cd9934be37eda68fb2ab6ff8cf326725492a3bfad4b888f23e71699f->enter($__internal_a7c39302cd9934be37eda68fb2ab6ff8cf326725492a3bfad4b888f23e71699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 154
        echo "                                                    ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 154)->display($context);
        // line 155
        echo "                                                ";
        
        $__internal_a7c39302cd9934be37eda68fb2ab6ff8cf326725492a3bfad4b888f23e71699f->leave($__internal_a7c39302cd9934be37eda68fb2ab6ff8cf326725492a3bfad4b888f23e71699f_prof);

    }

    // line 162
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_b976714af0cbf4454d0cbadb7faf652bb96a893825b782e3f17b46812224a448 = $this->env->getExtension("native_profiler");
        $__internal_b976714af0cbf4454d0cbadb7faf652bb96a893825b782e3f17b46812224a448->enter($__internal_b976714af0cbf4454d0cbadb7faf652bb96a893825b782e3f17b46812224a448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 163
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 164
            echo "                                    ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 164)->display($context);
            // line 165
            echo "                                ";
        }
        // line 166
        echo "                            ";
        
        $__internal_b976714af0cbf4454d0cbadb7faf652bb96a893825b782e3f17b46812224a448->leave($__internal_b976714af0cbf4454d0cbadb7faf652bb96a893825b782e3f17b46812224a448_prof);

    }

    // line 179
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_e111fa76b29af5f9d6f46cdba7a12e35374b45bccb836d4baa67bd1f54d4da1b = $this->env->getExtension("native_profiler");
        $__internal_e111fa76b29af5f9d6f46cdba7a12e35374b45bccb836d4baa67bd1f54d4da1b->enter($__internal_e111fa76b29af5f9d6f46cdba7a12e35374b45bccb836d4baa67bd1f54d4da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_e111fa76b29af5f9d6f46cdba7a12e35374b45bccb836d4baa67bd1f54d4da1b->leave($__internal_e111fa76b29af5f9d6f46cdba7a12e35374b45bccb836d4baa67bd1f54d4da1b_prof);

    }

    // line 186
    public function block_custom_data($context, array $blocks = array())
    {
        $__internal_62bcc9dab42aaf19366db0eea5416a5ec06d01909c3772c3f30fe7d3deea1255 = $this->env->getExtension("native_profiler");
        $__internal_62bcc9dab42aaf19366db0eea5416a5ec06d01909c3772c3f30fe7d3deea1255->enter($__internal_62bcc9dab42aaf19366db0eea5416a5ec06d01909c3772c3f30fe7d3deea1255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_data"));

        // line 187
        echo "    ";
        
        $__internal_62bcc9dab42aaf19366db0eea5416a5ec06d01909c3772c3f30fe7d3deea1255->leave($__internal_62bcc9dab42aaf19366db0eea5416a5ec06d01909c3772c3f30fe7d3deea1255_prof);

    }

    // line 190
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_b619e530f4a496da15df488df6cfd0a6f97804a39e64861c32c0ed36b7d45de5 = $this->env->getExtension("native_profiler");
        $__internal_b619e530f4a496da15df488df6cfd0a6f97804a39e64861c32c0ed36b7d45de5->enter($__internal_b619e530f4a496da15df488df6cfd0a6f97804a39e64861c32c0ed36b7d45de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 191
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 192
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 193
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 195
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 199
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 200
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 201
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 203
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 205
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 206
                echo "                                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 207
                echo "
                                    ";
                // line 208
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "

                                    ";
                // line 210
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 216
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 217
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 225
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                </form>
            </div>
        </div>

    ";
        }
        
        $__internal_b619e530f4a496da15df488df6cfd0a6f97804a39e64861c32c0ed36b7d45de5->leave($__internal_b619e530f4a496da15df488df6cfd0a6f97804a39e64861c32c0ed36b7d45de5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 227,  727 => 225,  723 => 224,  715 => 221,  710 => 219,  704 => 217,  702 => 216,  697 => 213,  688 => 210,  683 => 208,  680 => 207,  677 => 206,  675 => 205,  669 => 204,  666 => 203,  662 => 202,  658 => 201,  654 => 200,  648 => 199,  639 => 195,  635 => 193,  632 => 192,  629 => 191,  623 => 190,  616 => 187,  610 => 186,  599 => 179,  592 => 166,  589 => 165,  586 => 164,  583 => 163,  577 => 162,  570 => 155,  567 => 154,  561 => 153,  553 => 123,  542 => 121,  538 => 120,  531 => 116,  527 => 115,  523 => 114,  518 => 113,  512 => 112,  486 => 90,  480 => 89,  471 => 126,  468 => 125,  466 => 112,  462 => 110,  460 => 89,  457 => 88,  451 => 87,  443 => 167,  441 => 162,  435 => 158,  431 => 156,  429 => 153,  426 => 152,  419 => 147,  409 => 143,  404 => 141,  401 => 140,  397 => 139,  390 => 135,  385 => 132,  383 => 131,  379 => 129,  376 => 128,  373 => 87,  370 => 86,  368 => 85,  363 => 83,  360 => 82,  354 => 81,  346 => 78,  331 => 76,  329 => 75,  326 => 74,  309 => 73,  306 => 72,  300 => 71,  291 => 67,  285 => 66,  282 => 65,  278 => 63,  274 => 62,  269 => 61,  263 => 60,  251 => 59,  249 => 58,  246 => 57,  243 => 56,  240 => 55,  237 => 54,  234 => 53,  231 => 52,  228 => 51,  225 => 50,  222 => 49,  219 => 48,  217 => 47,  214 => 46,  212 => 45,  210 => 44,  207 => 43,  205 => 42,  200 => 39,  197 => 38,  193 => 37,  189 => 35,  183 => 34,  172 => 25,  165 => 186,  157 => 181,  154 => 180,  152 => 179,  149 => 178,  143 => 175,  140 => 174,  137 => 173,  133 => 171,  131 => 170,  128 => 169,  126 => 81,  123 => 80,  121 => 71,  118 => 70,  116 => 34,  113 => 33,  108 => 31,  103 => 30,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  90 => 25,  85 => 23,  81 => 21,  75 => 20,  63 => 18,  53 => 15,  47 => 14,  32 => 12,);
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
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Core:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}{% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-body table-responsive no-padding">*/
/*             {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*             {% block list_header %}{% endblock %}*/
/* */
/*             {% set batchactions = admin.batchactions %}*/
/*             {% if admin.datagrid.results|length > 0 %}*/
/*                 {% if admin.hasRoute('batch') %}*/
/*                 <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*                 {% endif %}*/
/*                     <table class="table table-bordered table-striped">*/
/*                         {% block table_header %}*/
/*                             <thead>*/
/*                                 <tr class="sonata-ba-list-field-header">*/
/*                                     {% for field_description in admin.list.elements %}*/
/*                                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                                               <input type="checkbox" id="list_batch_checkbox">*/
/*                                             </th>*/
/*                                         {% elseif field_description.getOption('code') == '_select' %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                         {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                             {# Action buttons disabled in ajax view! #}*/
/*                                         {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                             {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                         {% else %}*/
/*                                             {% set sortable = false %}*/
/*                                             {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                                 {% set sortable             = true %}*/
/*                                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% spaceless %}*/
/*                                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}">*/
/*                                                     {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                     {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                     {% if sortable %}</a>{% endif %}*/
/*                                                 </th>*/
/*                                             {% endspaceless %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_body %}*/
/*                             <tbody>*/
/*                                 {% for object in admin.datagrid.results %}*/
/*                                     <tr>*/
/*                                         {% include admin.getTemplate('inner_list_row') %}*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_footer %}*/
/*                             <tr>*/
/*                                 <th colspan="{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}">*/
/*                                     <div class="form-inline">*/
/*                                         {% if not app.request.isXmlHttpRequest %}*/
/*                                             {% if admin.hasRoute('batch') and batchactions|length > 0  %}*/
/*                                                 {% block batch %}*/
/*                                                     <script>*/
/*                                                         {% block batch_javascript %}*/
/*                                                             jQuery(document).ready(function ($) {*/
/*                                                                 $('#list_batch_checkbox').on('ifChanged', function () {*/
/*                                                                     $(this)*/
/*                                                                         .closest('table')*/
/*                                                                         .find('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                         .iCheck($(this).is(':checked') ? 'check' : 'uncheck')*/
/*                                                                     ;*/
/*                                                                 });*/
/* */
/*                                                                 $('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                     .on('ifChanged', function () {*/
/*                                                                         $(this)*/
/*                                                                             .closest('tr')*/
/*                                                                             .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                                                         ;*/
/*                                                                     })*/
/*                                                                     .trigger('ifChanged')*/
/*                                                                 ;*/
/*                                                             });*/
/*                                                         {% endblock %}*/
/*                                                     </script>*/
/* */
/*                                                     {% block batch_actions %}*/
/*                                                         <label class="checkbox" for="{{ admin.uniqid }}_all_elements">*/
/*                                                             <input type="checkbox" name="all_elements" id="{{ admin.uniqid }}_all_elements">*/
/*                                                             {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}*/
/*                                                              ({{ admin.datagrid.pager.nbresults }})*/
/*                                                         </label>*/
/* */
/*                                                         <select name="action" style="width: auto; height: auto">*/
/*                                                             {% for action, options in batchactions %}*/
/*                                                                 <option value="{{ action }}">{{ options.label }}</option>*/
/*                                                             {% endfor %}*/
/*                                                         </select>*/
/*                                                     {% endblock %}*/
/* */
/*                                                     <input type="submit" class="btn btn-small btn-primary" value="{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                 {% endblock %}*/
/*                                             {% endif %}*/
/* */
/*                                             <div class="pull-right">*/
/*                                                 {% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}*/
/*                                                     <div class="btn-group">*/
/*                                                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                             <i class="glyphicon glyphicon-export"></i>*/
/*                                                             {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                             <span class="caret"></span>*/
/*                                                         </button>*/
/*                                                         <ul class="dropdown-menu">*/
/*                                                             {% for format in admin.getExportFormats() %}*/
/*                                                                 <li>*/
/*                                                                     <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                                         <i class="glyphicon glyphicon-download"></i>*/
/*                                                                         {{ format|upper }}*/
/*                                                                     </a>*/
/*                                                                 <li>*/
/*                                                             {% endfor %}*/
/*                                                         </ul>*/
/*                                                     </div>*/
/* */
/*                                                     &nbsp;-&nbsp;*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% block pager_results %}*/
/*                                                     {% include admin.getTemplate('pager_results') %}*/
/*                                                 {% endblock %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </th>*/
/*                             </tr>*/
/* */
/*                             {% block pager_links %}*/
/*                                 {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                     {% include admin.getTemplate('pager_links') %}*/
/*                                 {% endif %}*/
/*                             {% endblock %}*/
/* */
/*                         {% endblock %}*/
/*                     </table>*/
/*                 {% if admin.hasRoute('batch') %}*/
/*                 </form>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <div class="callout callout-info">*/
/*                     {{ 'no_result'|trans({}, 'SonataAdminBundle') }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% block list_footer %}{% endblock %}*/
/* */
/*             {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/*     {% block custom_data %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form "SonataAdminBundle:Form:filter_admin_fields.html.twig" %}*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h4 class="box-title filter_legend {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">{{ 'label_filters'|trans({}, 'SonataAdminBundle') }}</h4>*/
/*             </div>*/
/* */
/*             <div class="box-body">*/
/*                 <form class="sonata-filter-form {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
/*                     {{ form_errors(form) }}*/
/*                         <div class="filter_container {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">*/
/*                             {% for filter in admin.datagrid.filters %}*/
/*                                 <div class="form-group">*/
/*                                     <label for="{{ form.children[filter.formName].children['value'].vars.id }}">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                     {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/*                                     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' sonata-filter-option')|trim}) %}*/
/* */
/*                                     {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/* */
/*                                     {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                             <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                             {% set foo = form.children['_page'].setRendered() %}*/
/*                             {{ form_rest(form) }}*/
/* */
/*                             <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                             <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">{{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                         </div>*/
/* */
/*                         {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                             <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                         {% endfor %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
