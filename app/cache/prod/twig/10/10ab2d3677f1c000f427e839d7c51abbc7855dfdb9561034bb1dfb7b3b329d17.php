<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig */
class __TwigTemplate_919ae7a6f3b0d0921f9fd961d9389736c49aebbda89d3f649f6ab5fe2ccdeb6b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 12);
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
        $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 15)->display($context);
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
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 31
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
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
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
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

    // line 35
    public function block_table_header($context, array $blocks = array())
    {
        // line 36
        echo "                        <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 39
            echo "                                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
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
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 46
                echo "                                    ";
                // line 47
                echo "                                ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
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
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array())), "method");
                    // line 54
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter", array()), "_sort_by", array())));
                    // line 55
                    echo "                                        ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 56
                    echo "                                        ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
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
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                            ";
                // line 61
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 62
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                ";
                // line 63
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
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
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 76)->display($context);
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
            echo "                                        ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
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
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 141
                    echo "                                                        <li>
                                                            <a href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
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
    }

    // line 88
    public function block_batch($context, array $blocks = array())
    {
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
    }

    // line 90
    public function block_batch_javascript($context, array $blocks = array())
    {
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
    }

    // line 113
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 114
        echo "                                                    <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                        <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                        ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                        (";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                                    </label>

                                                    <select name=\"action\" style=\"width: auto; height: auto\">
                                                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
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
    }

    // line 154
    public function block_pager_results($context, array $blocks = array())
    {
        // line 155
        echo "                                                ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 155)->display($context);
        // line 156
        echo "                                            ";
    }

    // line 163
    public function block_pager_links($context, array $blocks = array())
    {
        // line 164
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 165
            echo "                                ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list.html.twig", 165)->display($context);
            // line 166
            echo "                            ";
        }
        // line 167
        echo "                        ";
    }

    // line 180
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 189
    public function block_list_filters($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array())) {
            // line 191
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 192
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 194
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 198
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                    <div class=\"filter_container ";
            // line 200
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                        ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 202
                echo "                            <div class=\"form-group\">
                                <label for=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 204
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 205
                echo "                                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 206
                echo "
                                ";
                // line 207
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
                echo "

                                ";
                // line 209
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
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
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 216
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                        <a class=\"btn btn-default\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    </div>

                    ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters", array()));
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
        return array (  635 => 226,  624 => 224,  620 => 223,  612 => 220,  607 => 218,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  505 => 164,  502 => 163,  498 => 156,  495 => 155,  492 => 154,  487 => 124,  476 => 122,  472 => 121,  465 => 117,  461 => 116,  457 => 115,  452 => 114,  449 => 113,  426 => 91,  423 => 90,  417 => 127,  414 => 126,  412 => 113,  408 => 111,  406 => 90,  403 => 89,  400 => 88,  395 => 168,  393 => 163,  387 => 159,  383 => 157,  381 => 154,  378 => 153,  371 => 148,  361 => 144,  356 => 142,  353 => 141,  349 => 140,  342 => 136,  337 => 133,  335 => 132,  331 => 130,  328 => 129,  325 => 88,  322 => 87,  320 => 86,  315 => 84,  312 => 83,  309 => 82,  304 => 79,  289 => 77,  287 => 76,  284 => 75,  267 => 74,  264 => 73,  261 => 72,  255 => 68,  249 => 67,  246 => 66,  242 => 64,  238 => 63,  233 => 62,  227 => 61,  215 => 60,  213 => 59,  210 => 58,  207 => 57,  204 => 56,  201 => 55,  198 => 54,  195 => 53,  192 => 52,  189 => 51,  186 => 50,  183 => 49,  181 => 48,  178 => 47,  176 => 46,  174 => 45,  171 => 44,  169 => 43,  164 => 40,  161 => 39,  157 => 38,  153 => 36,  150 => 35,  145 => 26,  135 => 182,  132 => 181,  130 => 180,  127 => 179,  121 => 176,  118 => 175,  115 => 174,  111 => 172,  109 => 171,  106 => 170,  104 => 82,  101 => 81,  99 => 72,  96 => 71,  94 => 35,  91 => 34,  86 => 32,  81 => 31,  78 => 30,  75 => 29,  73 => 28,  70 => 27,  68 => 26,  63 => 24,  59 => 22,  56 => 21,  50 => 18,  43 => 15,  40 => 14,  31 => 12,);
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
