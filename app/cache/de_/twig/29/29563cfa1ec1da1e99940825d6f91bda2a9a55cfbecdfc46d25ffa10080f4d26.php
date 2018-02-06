<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig */
class __TwigTemplate_603fa9c3cb88c9a79f40e52b765bb108dd733f4951ba6dcb8a200dfd1ebaf097 extends Twig_Template
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
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bcee7a83707042db43620344481c0a5b8601a4c2b20b9319d891c0ed13fcf62 = $this->env->getExtension("native_profiler");
        $__internal_2bcee7a83707042db43620344481c0a5b8601a4c2b20b9319d891c0ed13fcf62->enter($__internal_2bcee7a83707042db43620344481c0a5b8601a4c2b20b9319d891c0ed13fcf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bcee7a83707042db43620344481c0a5b8601a4c2b20b9319d891c0ed13fcf62->leave($__internal_2bcee7a83707042db43620344481c0a5b8601a4c2b20b9319d891c0ed13fcf62_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e288705922726d1c7204a31fa46fc2422e7fdd59c72cb4745eccc59ee79ff389 = $this->env->getExtension("native_profiler");
        $__internal_e288705922726d1c7204a31fa46fc2422e7fdd59c72cb4745eccc59ee79ff389->enter($__internal_e288705922726d1c7204a31fa46fc2422e7fdd59c72cb4745eccc59ee79ff389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 15)->display($context);
        echo "</li>
";
        
        $__internal_e288705922726d1c7204a31fa46fc2422e7fdd59c72cb4745eccc59ee79ff389->leave($__internal_e288705922726d1c7204a31fa46fc2422e7fdd59c72cb4745eccc59ee79ff389_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3a4934dfdc3c13c131ead34bc844f04820e299abebb0b7d3a935daca73b31083 = $this->env->getExtension("native_profiler");
        $__internal_3a4934dfdc3c13c131ead34bc844f04820e299abebb0b7d3a935daca73b31083->enter($__internal_3a4934dfdc3c13c131ead34bc844f04820e299abebb0b7d3a935daca73b31083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        
        $__internal_3a4934dfdc3c13c131ead34bc844f04820e299abebb0b7d3a935daca73b31083->leave($__internal_3a4934dfdc3c13c131ead34bc844f04820e299abebb0b7d3a935daca73b31083_prof);

    }

    // line 21
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_bb73eceb42b7c2cf1ce503093ac9fe7688de95fd47e955edbb3465803c394cfa = $this->env->getExtension("native_profiler");
        $__internal_bb73eceb42b7c2cf1ce503093ac9fe7688de95fd47e955edbb3465803c394cfa->enter($__internal_bb73eceb42b7c2cf1ce503093ac9fe7688de95fd47e955edbb3465803c394cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 22
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

            ";
        // line 26
        $this->displayBlock('list_header', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 29
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 30
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 31
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
                ";
            }
            // line 34
            echo "                <table class=\"table table-bordered table-striped\">
                    ";
            // line 35
            $this->displayBlock('table_header', $context, $blocks);
            // line 71
            echo "
                    ";
            // line 72
            $this->displayBlock('table_body', $context, $blocks);
            // line 81
            echo "
                    ";
            // line 82
            $this->displayBlock('table_footer', $context, $blocks);
            // line 170
            echo "                </table>
                ";
            // line 171
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 172
                echo "                    </form>
                ";
            }
            // line 174
            echo "            ";
        } else {
            // line 175
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 179
        echo "
            ";
        // line 180
        $this->displayBlock('list_footer', $context, $blocks);
        // line 181
        echo "
            ";
        // line 182
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


        </div>
    </div>
";
        
        $__internal_bb73eceb42b7c2cf1ce503093ac9fe7688de95fd47e955edbb3465803c394cfa->leave($__internal_bb73eceb42b7c2cf1ce503093ac9fe7688de95fd47e955edbb3465803c394cfa_prof);

    }

    // line 26
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_706ed8e1b771c419589ffab7853b3311a51298ffa878942f45650dbd1ca135c0 = $this->env->getExtension("native_profiler");
        $__internal_706ed8e1b771c419589ffab7853b3311a51298ffa878942f45650dbd1ca135c0->enter($__internal_706ed8e1b771c419589ffab7853b3311a51298ffa878942f45650dbd1ca135c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_706ed8e1b771c419589ffab7853b3311a51298ffa878942f45650dbd1ca135c0->leave($__internal_706ed8e1b771c419589ffab7853b3311a51298ffa878942f45650dbd1ca135c0_prof);

    }

    // line 35
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_8961de33308429da9b3d1e8f639de93f18d6549ae17476037ba5dd373e0ac4ec = $this->env->getExtension("native_profiler");
        $__internal_8961de33308429da9b3d1e8f639de93f18d6549ae17476037ba5dd373e0ac4ec->enter($__internal_8961de33308429da9b3d1e8f639de93f18d6549ae17476037ba5dd373e0ac4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 36
        echo "                        <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 39
            echo "                                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 40
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                        <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                    </th>
                                ";
            } elseif (($this->getAttribute(            // line 43
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 44
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute(            // line 45
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 46
                echo "                                    ";
                // line 47
                echo "                                ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 48
                echo "                                    ";
                // line 49
                echo "                                ";
            } else {
                // line 50
                echo "                                    ";
                $context["sortable"] = false;
                // line 51
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 52
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 53
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 54
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 55
                    echo "                                        ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 56
                    echo "                                        ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 57
                    echo "                                    ";
                }
                // line 58
                echo "
                                    ";
                // line 59
                ob_start();
                // line 60
                echo "                                        <th class=\"sonata-ba-list-field-header-";
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
                // line 61
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 62
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                ";
                // line 63
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 64
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 66
                echo "                                ";
            }
            // line 67
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </tr>
                        </thead>
                    ";
        
        $__internal_8961de33308429da9b3d1e8f639de93f18d6549ae17476037ba5dd373e0ac4ec->leave($__internal_8961de33308429da9b3d1e8f639de93f18d6549ae17476037ba5dd373e0ac4ec_prof);

    }

    // line 72
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_c12d20fae3d3444fe6f7d12eb21051e0f5c5b31e947822d7a93c8eb46b92cb62 = $this->env->getExtension("native_profiler");
        $__internal_c12d20fae3d3444fe6f7d12eb21051e0f5c5b31e947822d7a93c8eb46b92cb62->enter($__internal_c12d20fae3d3444fe6f7d12eb21051e0f5c5b31e947822d7a93c8eb46b92cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 73
        echo "                        <tbody>
                        ";
        // line 74
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
            // line 75
            echo "                            <tr>
                                ";
            // line 76
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 76)->display($context);
            // line 77
            echo "                            </tr>
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
        // line 79
        echo "                        </tbody>
                    ";
        
        $__internal_c12d20fae3d3444fe6f7d12eb21051e0f5c5b31e947822d7a93c8eb46b92cb62->leave($__internal_c12d20fae3d3444fe6f7d12eb21051e0f5c5b31e947822d7a93c8eb46b92cb62_prof);

    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_da32c81d9f7b090a69f77748dc653bd3aa5bb06133aa56dadee2595724a9bbc2 = $this->env->getExtension("native_profiler");
        $__internal_da32c81d9f7b090a69f77748dc653bd3aa5bb06133aa56dadee2595724a9bbc2->enter($__internal_da32c81d9f7b090a69f77748dc653bd3aa5bb06133aa56dadee2595724a9bbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 83
        echo "                        <tr>
                            <th colspan=\"";
        // line 84
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                <div class=\"form-inline\">
                                    ";
        // line 86
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
            // line 87
            echo "                                        ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 88
                echo "                                            ";
                $this->displayBlock('batch', $context, $blocks);
                // line 129
                echo "                                        ";
            }
            // line 130
            echo "
                                        <div class=\"pull-right\">
                                            ";
            // line 132
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                // line 133
                echo "                                                <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                        <i class=\"glyphicon glyphicon-export\"></i>
                                                        ";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                        <span class=\"caret\"></span>
                                                    </button>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 141
                    echo "                                                        <li>
                                                            <a href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                    echo "\">
                                                                <i class=\"glyphicon glyphicon-download\"></i>
                                                                ";
                    // line 144
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                    echo "
                                                            </a>
                                                        <li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                                                    </ul>
                                                </div>

                                                &nbsp;-&nbsp;
                                            ";
            }
            // line 153
            echo "
                                            ";
            // line 154
            $this->displayBlock('pager_results', $context, $blocks);
            // line 157
            echo "                                        </div>
                                    ";
        }
        // line 159
        echo "                                </div>
                            </th>
                        </tr>

                        ";
        // line 163
        $this->displayBlock('pager_links', $context, $blocks);
        // line 168
        echo "
                    ";
        
        $__internal_da32c81d9f7b090a69f77748dc653bd3aa5bb06133aa56dadee2595724a9bbc2->leave($__internal_da32c81d9f7b090a69f77748dc653bd3aa5bb06133aa56dadee2595724a9bbc2_prof);

    }

    // line 88
    public function block_batch($context, array $blocks = array())
    {
        $__internal_5dee076b45465ef68d0b1d19cd890b5149a608aa374519218bdfe834aef3b7f3 = $this->env->getExtension("native_profiler");
        $__internal_5dee076b45465ef68d0b1d19cd890b5149a608aa374519218bdfe834aef3b7f3->enter($__internal_5dee076b45465ef68d0b1d19cd890b5149a608aa374519218bdfe834aef3b7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 89
        echo "                                                <script>
                                                    ";
        // line 90
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 111
        echo "                                                </script>

                                                ";
        // line 113
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 126
        echo "
                                                <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                            ";
        
        $__internal_5dee076b45465ef68d0b1d19cd890b5149a608aa374519218bdfe834aef3b7f3->leave($__internal_5dee076b45465ef68d0b1d19cd890b5149a608aa374519218bdfe834aef3b7f3_prof);

    }

    // line 90
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_323342e6ea5c44c8b6f738d09d0e0713cf1ebe5e8747e6ab74439e983f9bec8a = $this->env->getExtension("native_profiler");
        $__internal_323342e6ea5c44c8b6f738d09d0e0713cf1ebe5e8747e6ab74439e983f9bec8a->enter($__internal_323342e6ea5c44c8b6f738d09d0e0713cf1ebe5e8747e6ab74439e983f9bec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 91
        echo "                                                    jQuery(document).ready(function (\$) {
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
        
        $__internal_323342e6ea5c44c8b6f738d09d0e0713cf1ebe5e8747e6ab74439e983f9bec8a->leave($__internal_323342e6ea5c44c8b6f738d09d0e0713cf1ebe5e8747e6ab74439e983f9bec8a_prof);

    }

    // line 113
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_0b808a7704ca4e781f316f25ad41e774bbcb4764d3a753b38e7743552148639b = $this->env->getExtension("native_profiler");
        $__internal_0b808a7704ca4e781f316f25ad41e774bbcb4764d3a753b38e7743552148639b->enter($__internal_0b808a7704ca4e781f316f25ad41e774bbcb4764d3a753b38e7743552148639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 114
        echo "                                                    <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                        <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                        ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                        (";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                                    </label>

                                                    <select name=\"action\" style=\"width: auto; height: auto\">
                                                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 122
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["options"], "label", array()), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                                    </select>
                                                ";
        
        $__internal_0b808a7704ca4e781f316f25ad41e774bbcb4764d3a753b38e7743552148639b->leave($__internal_0b808a7704ca4e781f316f25ad41e774bbcb4764d3a753b38e7743552148639b_prof);

    }

    // line 154
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_8c6b2efc8d55808e6993539db13c4e129b59d4bc2ba26e830673ec8ff8fb8426 = $this->env->getExtension("native_profiler");
        $__internal_8c6b2efc8d55808e6993539db13c4e129b59d4bc2ba26e830673ec8ff8fb8426->enter($__internal_8c6b2efc8d55808e6993539db13c4e129b59d4bc2ba26e830673ec8ff8fb8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 155
        echo "                                                ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 155)->display($context);
        // line 156
        echo "                                            ";
        
        $__internal_8c6b2efc8d55808e6993539db13c4e129b59d4bc2ba26e830673ec8ff8fb8426->leave($__internal_8c6b2efc8d55808e6993539db13c4e129b59d4bc2ba26e830673ec8ff8fb8426_prof);

    }

    // line 163
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_73d694e07622fa161af50452727c015cba6be5299587686451d820ad093bf0d9 = $this->env->getExtension("native_profiler");
        $__internal_73d694e07622fa161af50452727c015cba6be5299587686451d820ad093bf0d9->enter($__internal_73d694e07622fa161af50452727c015cba6be5299587686451d820ad093bf0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 164
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 165
            echo "                                ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 165)->display($context);
            // line 166
            echo "                            ";
        }
        // line 167
        echo "                        ";
        
        $__internal_73d694e07622fa161af50452727c015cba6be5299587686451d820ad093bf0d9->leave($__internal_73d694e07622fa161af50452727c015cba6be5299587686451d820ad093bf0d9_prof);

    }

    // line 180
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_8574057ca304db7a2e61f162697a509a002f30af19c3c2a4f7f2b196a96149af = $this->env->getExtension("native_profiler");
        $__internal_8574057ca304db7a2e61f162697a509a002f30af19c3c2a4f7f2b196a96149af->enter($__internal_8574057ca304db7a2e61f162697a509a002f30af19c3c2a4f7f2b196a96149af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_8574057ca304db7a2e61f162697a509a002f30af19c3c2a4f7f2b196a96149af->leave($__internal_8574057ca304db7a2e61f162697a509a002f30af19c3c2a4f7f2b196a96149af_prof);

    }

    // line 189
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_2a731394e43d624980edaa2f075cc383c9c393765f5cf4fd5f128be2949358e8 = $this->env->getExtension("native_profiler");
        $__internal_2a731394e43d624980edaa2f075cc383c9c393765f5cf4fd5f128be2949358e8->enter($__internal_2a731394e43d624980edaa2f075cc383c9c393765f5cf4fd5f128be2949358e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 190
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 191
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 192
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 194
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 198
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                    <div class=\"filter_container ";
            // line 200
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                        ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 202
                echo "                            <div class=\"form-group\">
                                <label for=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 204
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 205
                echo "                                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 206
                echo "
                                ";
                // line 207
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "

                                ";
                // line 209
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "
                        <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                        ";
            // line 215
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 216
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                        <a class=\"btn btn-default\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    </div>

                    ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 224
                echo "                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                </form>
            </div>
        </div>

    ";
        }
        
        $__internal_2a731394e43d624980edaa2f075cc383c9c393765f5cf4fd5f128be2949358e8->leave($__internal_2a731394e43d624980edaa2f075cc383c9c393765f5cf4fd5f128be2949358e8_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 226,  711 => 224,  707 => 223,  699 => 220,  694 => 218,  688 => 216,  686 => 215,  681 => 212,  672 => 209,  667 => 207,  664 => 206,  661 => 205,  659 => 204,  653 => 203,  650 => 202,  646 => 201,  642 => 200,  638 => 199,  632 => 198,  623 => 194,  619 => 192,  616 => 191,  613 => 190,  607 => 189,  596 => 180,  589 => 167,  586 => 166,  583 => 165,  580 => 164,  574 => 163,  567 => 156,  564 => 155,  558 => 154,  550 => 124,  539 => 122,  535 => 121,  528 => 117,  524 => 116,  520 => 115,  515 => 114,  509 => 113,  483 => 91,  477 => 90,  468 => 127,  465 => 126,  463 => 113,  459 => 111,  457 => 90,  454 => 89,  448 => 88,  440 => 168,  438 => 163,  432 => 159,  428 => 157,  426 => 154,  423 => 153,  416 => 148,  406 => 144,  401 => 142,  398 => 141,  394 => 140,  387 => 136,  382 => 133,  380 => 132,  376 => 130,  373 => 129,  370 => 88,  367 => 87,  365 => 86,  360 => 84,  357 => 83,  351 => 82,  343 => 79,  328 => 77,  326 => 76,  323 => 75,  306 => 74,  303 => 73,  297 => 72,  288 => 68,  282 => 67,  279 => 66,  275 => 64,  271 => 63,  266 => 62,  260 => 61,  248 => 60,  246 => 59,  243 => 58,  240 => 57,  237 => 56,  234 => 55,  231 => 54,  228 => 53,  225 => 52,  222 => 51,  219 => 50,  216 => 49,  214 => 48,  211 => 47,  209 => 46,  207 => 45,  204 => 44,  202 => 43,  197 => 40,  194 => 39,  190 => 38,  186 => 36,  180 => 35,  169 => 26,  156 => 182,  153 => 181,  151 => 180,  148 => 179,  142 => 176,  139 => 175,  136 => 174,  132 => 172,  130 => 171,  127 => 170,  125 => 82,  122 => 81,  120 => 72,  117 => 71,  115 => 35,  112 => 34,  107 => 32,  102 => 31,  99 => 30,  96 => 29,  94 => 28,  91 => 27,  89 => 26,  84 => 24,  80 => 22,  74 => 21,  62 => 18,  52 => 15,  46 => 14,  31 => 12,);
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
/*                     <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*                 {% endif %}*/
/*                 <table class="table table-bordered table-striped">*/
/*                     {% block table_header %}*/
/*                         <thead>*/
/*                         <tr class="sonata-ba-list-field-header">*/
/*                             {% for field_description in admin.list.elements %}*/
/*                                 {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                     <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                                         <input type="checkbox" id="list_batch_checkbox">*/
/*                                     </th>*/
/*                                 {% elseif field_description.getOption('code') == '_select' %}*/
/*                                     <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                 {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                     {# Action buttons disabled in ajax view! #}*/
/*                                 {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                     {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                 {% else %}*/
/*                                     {% set sortable = false %}*/
/*                                     {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                         {% set sortable             = true %}*/
/*                                         {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                         {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                         {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                         {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% spaceless %}*/
/*                                         <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}">*/
/*                                             {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                 {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                 {% if sortable %}</a>{% endif %}*/
/*                                         </th>*/
/*                                     {% endspaceless %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </tr>*/
/*                         </thead>*/
/*                     {% endblock %}*/
/* */
/*                     {% block table_body %}*/
/*                         <tbody>*/
/*                         {% for object in admin.datagrid.results %}*/
/*                             <tr>*/
/*                                 {% include admin.getTemplate('inner_list_row') %}*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     {% endblock %}*/
/* */
/*                     {% block table_footer %}*/
/*                         <tr>*/
/*                             <th colspan="{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}">*/
/*                                 <div class="form-inline">*/
/*                                     {% if not app.request.isXmlHttpRequest %}*/
/*                                         {% if admin.hasRoute('batch') and batchactions|length > 0  %}*/
/*                                             {% block batch %}*/
/*                                                 <script>*/
/*                                                     {% block batch_javascript %}*/
/*                                                     jQuery(document).ready(function ($) {*/
/*                                                         $('#list_batch_checkbox').on('ifChanged', function () {*/
/*                                                             $(this)*/
/*                                                                     .closest('table')*/
/*                                                                     .find('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                     .iCheck($(this).is(':checked') ? 'check' : 'uncheck')*/
/*                                                             ;*/
/*                                                         });*/
/* */
/*                                                         $('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                 .on('ifChanged', function () {*/
/*                                                                     $(this)*/
/*                                                                             .closest('tr')*/
/*                                                                             .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                                                     ;*/
/*                                                                 })*/
/*                                                                 .trigger('ifChanged')*/
/*                                                         ;*/
/*                                                     });*/
/*                                                     {% endblock %}*/
/*                                                 </script>*/
/* */
/*                                                 {% block batch_actions %}*/
/*                                                     <label class="checkbox" for="{{ admin.uniqid }}_all_elements">*/
/*                                                         <input type="checkbox" name="all_elements" id="{{ admin.uniqid }}_all_elements">*/
/*                                                         {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}*/
/*                                                         ({{ admin.datagrid.pager.nbresults }})*/
/*                                                     </label>*/
/* */
/*                                                     <select name="action" style="width: auto; height: auto">*/
/*                                                         {% for action, options in batchactions %}*/
/*                                                             <option value="{{ action }}">{{ options.label }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                 {% endblock %}*/
/* */
/*                                                 <input type="submit" class="btn btn-small btn-primary" value="{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}">*/
/*                                             {% endblock %}*/
/*                                         {% endif %}*/
/* */
/*                                         <div class="pull-right">*/
/*                                             {% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}*/
/*                                                 <div class="btn-group">*/
/*                                                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                         <i class="glyphicon glyphicon-export"></i>*/
/*                                                         {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                         <span class="caret"></span>*/
/*                                                     </button>*/
/*                                                     <ul class="dropdown-menu">*/
/*                                                         {% for format in admin.getExportFormats() %}*/
/*                                                         <li>*/
/*                                                             <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                                 <i class="glyphicon glyphicon-download"></i>*/
/*                                                                 {{ format|upper }}*/
/*                                                             </a>*/
/*                                                         <li>*/
/*                                                             {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/* */
/*                                                 &nbsp;-&nbsp;*/
/*                                             {% endif %}*/
/* */
/*                                             {% block pager_results %}*/
/*                                                 {% include admin.getTemplate('pager_results') %}*/
/*                                             {% endblock %}*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </th>*/
/*                         </tr>*/
/* */
/*                         {% block pager_links %}*/
/*                             {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                 {% include admin.getTemplate('pager_links') %}*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/* */
/*                     {% endblock %}*/
/*                 </table>*/
/*                 {% if admin.hasRoute('batch') %}*/
/*                     </form>*/
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
/*                     <div class="filter_container {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">*/
/*                         {% for filter in admin.datagrid.filters %}*/
/*                             <div class="form-group">*/
/*                                 <label for="{{ form.children[filter.formName].children['value'].vars.id }}">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                 {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/*                                 {% set attr = attr|merge({'class': (attr.class|default('') ~ ' sonata-filter-option')|trim}) %}*/
/* */
/*                                 {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/* */
/*                                 {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/* */
/*                         <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                         {% set foo = form.children['_page'].setRendered() %}*/
/*                         {{ form_rest(form) }}*/
/* */
/*                         <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                         <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">{{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                     </div>*/
/* */
/*                     {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                         <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                     {% endfor %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
