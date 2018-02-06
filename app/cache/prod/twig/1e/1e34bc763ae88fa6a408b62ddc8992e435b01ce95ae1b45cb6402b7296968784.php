<?php

/* ZesharCRMCallsBundle:CRUD:list_show.html.twig */
class __TwigTemplate_863c379d5a2e1da3c0ca633f600feb4290fc0df5ed12710e7e40509ac40ef92e extends Twig_Template
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
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "ZesharCRMCallsBundle:CRUD:list_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "ZesharCRMCallsBundle:CRUD:list_show.html.twig", 15)->display($context);
        echo "</li>
";
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 21
    public function block_list_table($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

            ";
        // line 26
        $this->displayBlock('list_header', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", array());
        // line 29
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            // line 30
            echo "
                <table class=\"table table-bordered table-striped\">
                    ";
            // line 32
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
            // line 126
            echo "                </table>

            ";
        } else {
            // line 129
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 133
        echo "
            ";
        // line 134
        $this->displayBlock('list_footer', $context, $blocks);
        // line 135
        echo "
            ";
        // line 136
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "


        </div>
    </div>
";
    }

    // line 26
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 32
    public function block_table_header($context, array $blocks = array())
    {
        // line 33
        echo "                        <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 36
            echo "                                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 37
                echo "                                    ";
                // line 38
                echo "                                        ";
                // line 39
                echo "                                    ";
                // line 40
                echo "                                ";
            } elseif (($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 41
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute(            // line 42
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 43
                echo "                                    ";
                // line 44
                echo "                                ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 45
                echo "                                    ";
                // line 46
                echo "                                ";
            } else {
                // line 47
                echo "                                    ";
                $context["sortable"] = false;
                // line 48
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 49
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 50
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array())), "method");
                    // line 51
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter", array()), "_sort_by", array())));
                    // line 52
                    echo "                                        ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 53
                    echo "                                        ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 54
                    echo "                                    ";
                }
                // line 55
                echo "
                                    ";
                // line 56
                if (($this->getAttribute($context["field_description"], "label", array()) != "Action")) {
                    // line 57
                    echo "                                        ";
                    ob_start();
                    // line 58
                    echo "                                            <th class=\"sonata-ba-list-field-header-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                    echo " ";
                    if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                        echo " sonata-ba-list-field-header-order-";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                    }
                    echo "\">
                                                ";
                    // line 59
                    if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                        echo "\">";
                    }
                    // line 60
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                                                    ";
                    // line 61
                    if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                        echo "</a>";
                    }
                    // line 62
                    echo "                                            </th>

                                        ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 65
                    echo "                                    ";
                }
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
    }

    // line 72
    public function block_table_body($context, array $blocks = array())
    {
        // line 73
        echo "                        <tbody>
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array()));
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
            $this->loadTemplate("ZesharCRMCallsBundle:CRUD:list_inner_row.html.twig", "ZesharCRMCallsBundle:CRUD:list_show.html.twig", 76)->display($context);
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
    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        // line 83
        echo "                        <tr>
                            <th colspan=\"";
        // line 84
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                <div class=\"form-inline\">
                                    ";
        // line 86
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array())) {
            // line 87
            echo "                                        <div class=\"pull-right\">
                                            ";
            // line 88
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                // line 89
                echo "                                                <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                        <i class=\"glyphicon glyphicon-export\"></i>
                                                        ";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                        <span class=\"caret\"></span>
                                                    </button>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 97
                    echo "                                                        <li>
                                                            <a href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                    echo "\">
                                                                <i class=\"glyphicon glyphicon-download\"></i>
                                                                ";
                    // line 100
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                    echo "
                                                            </a>
                                                        <li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                                                    </ul>
                                                </div>

                                                &nbsp;-&nbsp;
                                            ";
            }
            // line 109
            echo "
                                            ";
            // line 110
            $this->displayBlock('pager_results', $context, $blocks);
            // line 113
            echo "                                        </div>
                                    ";
        }
        // line 115
        echo "                                </div>
                            </th>
                        </tr>

                        ";
        // line 119
        $this->displayBlock('pager_links', $context, $blocks);
        // line 124
        echo "
                    ";
    }

    // line 110
    public function block_pager_results($context, array $blocks = array())
    {
        // line 111
        echo "                                                ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"), "ZesharCRMCallsBundle:CRUD:list_show.html.twig", 111)->display($context);
        // line 112
        echo "                                            ";
    }

    // line 119
    public function block_pager_links($context, array $blocks = array())
    {
        // line 120
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 121
            echo "                                ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCallsBundle:CRUD:list_show.html.twig", 121)->display($context);
            // line 122
            echo "                            ";
        }
        // line 123
        echo "                        ";
    }

    // line 134
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 143
    public function block_list_filters($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array())) {
            // line 145
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 146
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 148
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 152
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 153
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                    <div class=\"filter_container ";
            // line 154
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 156
                echo "                            <div class=\"form-group\">
                                <label for=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 158
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 159
                echo "                                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 160
                echo "
                                ";
                // line 161
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
                echo "

                                ";
                // line 163
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "
                        <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                        ";
            // line 169
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 170
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                        <a class=\"btn btn-default\" href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    </div>

                    ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 178
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
            // line 180
            echo "                </form>
            </div>
        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCallsBundle:CRUD:list_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 180,  509 => 178,  505 => 177,  497 => 174,  492 => 172,  486 => 170,  484 => 169,  479 => 166,  470 => 163,  465 => 161,  462 => 160,  459 => 159,  457 => 158,  451 => 157,  448 => 156,  444 => 155,  440 => 154,  436 => 153,  430 => 152,  421 => 148,  417 => 146,  414 => 145,  411 => 144,  408 => 143,  403 => 134,  399 => 123,  396 => 122,  393 => 121,  390 => 120,  387 => 119,  383 => 112,  380 => 111,  377 => 110,  372 => 124,  370 => 119,  364 => 115,  360 => 113,  358 => 110,  355 => 109,  348 => 104,  338 => 100,  333 => 98,  330 => 97,  326 => 96,  319 => 92,  314 => 89,  312 => 88,  309 => 87,  307 => 86,  302 => 84,  299 => 83,  296 => 82,  291 => 79,  276 => 77,  274 => 76,  271 => 75,  254 => 74,  251 => 73,  248 => 72,  242 => 68,  236 => 67,  233 => 66,  230 => 65,  225 => 62,  221 => 61,  216 => 60,  210 => 59,  198 => 58,  195 => 57,  193 => 56,  190 => 55,  187 => 54,  184 => 53,  181 => 52,  178 => 51,  175 => 50,  172 => 49,  169 => 48,  166 => 47,  163 => 46,  161 => 45,  158 => 44,  156 => 43,  154 => 42,  151 => 41,  148 => 40,  146 => 39,  144 => 38,  142 => 37,  139 => 36,  135 => 35,  131 => 33,  128 => 32,  123 => 26,  113 => 136,  110 => 135,  108 => 134,  105 => 133,  99 => 130,  96 => 129,  91 => 126,  89 => 82,  86 => 81,  84 => 72,  81 => 71,  79 => 32,  75 => 30,  72 => 29,  70 => 28,  67 => 27,  65 => 26,  60 => 24,  56 => 22,  53 => 21,  47 => 18,  40 => 15,  37 => 14,  28 => 12,);
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
/* */
/*                 <table class="table table-bordered table-striped">*/
/*                     {% block table_header %}*/
/*                         <thead>*/
/*                         <tr class="sonata-ba-list-field-header">*/
/*                             {% for field_description in admin.list.elements %}*/
/*                                 {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                     {#<th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">#}*/
/*                                         {#<input type="checkbox" id="list_batch_checkbox">#}*/
/*                                     {#</th>#}*/
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
/*                                     {% if field_description.label != 'Action' %}*/
/*                                         {% spaceless %}*/
/*                                             <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}">*/
/*                                                 {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                     {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                     {% if sortable %}</a>{% endif %}*/
/*                                             </th>*/
/* */
/*                                         {% endspaceless %}*/
/*                                     {% endif %}*/
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
/*                                 {% include 'ZesharCRMCallsBundle:CRUD:list_inner_row.html.twig' %}*/
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
/* */
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
