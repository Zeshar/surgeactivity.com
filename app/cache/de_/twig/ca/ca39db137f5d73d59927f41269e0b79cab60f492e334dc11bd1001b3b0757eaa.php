<?php

/* ZesharCRMCoreBundle:Reports:list.html.twig */
class __TwigTemplate_81e7a002664092ee5de34761238e37dbf0561506b22235902533488becb9092d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_list.html.twig", "ZesharCRMCoreBundle:Reports:list.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'actions' => array($this, 'block_actions'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'sonata_admin_filter_right_column' => array($this, 'block_sonata_admin_filter_right_column'),
            'sonata_admin_right_column' => array($this, 'block_sonata_admin_right_column'),
            'sonata_admin_filter_left_column' => array($this, 'block_sonata_admin_filter_left_column'),
            'list_filters' => array($this, 'block_list_filters'),
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle::sonata_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f32a66d9072c3df6acbdf0a2bb3389a4aff0ba6571524bbf5f0631d238eba4 = $this->env->getExtension("native_profiler");
        $__internal_31f32a66d9072c3df6acbdf0a2bb3389a4aff0ba6571524bbf5f0631d238eba4->enter($__internal_31f32a66d9072c3df6acbdf0a2bb3389a4aff0ba6571524bbf5f0631d238eba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Reports:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f32a66d9072c3df6acbdf0a2bb3389a4aff0ba6571524bbf5f0631d238eba4->leave($__internal_31f32a66d9072c3df6acbdf0a2bb3389a4aff0ba6571524bbf5f0631d238eba4_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c732aa78198a26c31bd44ec668a370a67cafcaaac910813d97952ca80ed09a9 = $this->env->getExtension("native_profiler");
        $__internal_9c732aa78198a26c31bd44ec668a370a67cafcaaac910813d97952ca80ed09a9->enter($__internal_9c732aa78198a26c31bd44ec668a370a67cafcaaac910813d97952ca80ed09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/lead_opportunity_list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9c732aa78198a26c31bd44ec668a370a67cafcaaac910813d97952ca80ed09a9->leave($__internal_9c732aa78198a26c31bd44ec668a370a67cafcaaac910813d97952ca80ed09a9_prof);

    }

    // line 8
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_2ef93fdeb156747ed79de712cb96670b3a4d53cb1a6f8c7e2886495255bd028c = $this->env->getExtension("native_profiler");
        $__internal_2ef93fdeb156747ed79de712cb96670b3a4d53cb1a6f8c7e2886495255bd028c->enter($__internal_2ef93fdeb156747ed79de712cb96670b3a4d53cb1a6f8c7e2886495255bd028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 9
        echo "    <ol class=\"nav navbar-top-links breadcrumb\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">Dashboard</a></li>
        <li class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
        echo "</li>
    </ol>
";
        
        $__internal_2ef93fdeb156747ed79de712cb96670b3a4d53cb1a6f8c7e2886495255bd028c->leave($__internal_2ef93fdeb156747ed79de712cb96670b3a4d53cb1a6f8c7e2886495255bd028c_prof);

    }

    // line 15
    public function block_actions($context, array $blocks = array())
    {
        $__internal_98e34f068397b4c3a67e376cf396334568d4fc9dbc20e8ea2b7f4de02fa94e2e = $this->env->getExtension("native_profiler");
        $__internal_98e34f068397b4c3a67e376cf396334568d4fc9dbc20e8ea2b7f4de02fa94e2e->enter($__internal_98e34f068397b4c3a67e376cf396334568d4fc9dbc20e8ea2b7f4de02fa94e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 16
        echo "    ";
        
        $__internal_98e34f068397b4c3a67e376cf396334568d4fc9dbc20e8ea2b7f4de02fa94e2e->leave($__internal_98e34f068397b4c3a67e376cf396334568d4fc9dbc20e8ea2b7f4de02fa94e2e_prof);

    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_b7724ac2ad87dae891ecf50edb792c446908da0d0310f066d8cdffb9fd647793 = $this->env->getExtension("native_profiler");
        $__internal_b7724ac2ad87dae891ecf50edb792c446908da0d0310f066d8cdffb9fd647793->enter($__internal_b7724ac2ad87dae891ecf50edb792c446908da0d0310f066d8cdffb9fd647793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 20
        echo "    <div class=\"box box-primary\">
    <div class=\"box-body table-responsive no-padding\">
    ";
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('list_header', $context, $blocks);
        // line 58
        echo "

    ";
        // line 60
        if ((twig_length_filter($this->env, (isset($context["dataSet"]) ? $context["dataSet"] : $this->getContext($context, "dataSet"))) > 0)) {
            // line 61
            echo "        <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
            ";
            // line 62
            $this->displayBlock('table_header', $context, $blocks);
            // line 106
            echo "
            ";
            // line 107
            $this->displayBlock('table_body', $context, $blocks);
            // line 120
            echo "        </table>
        ";
            // line 121
            $this->displayBlock('table_footer', $context, $blocks);
            // line 169
            echo "    ";
        } else {
            // line 170
            echo "        <div class=\"callout callout-info\">
            ";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 174
        echo "
    ";
        // line 175
        $this->displayBlock('list_footer', $context, $blocks);
        // line 176
        echo "
    </div>
    </div>
";
        
        $__internal_b7724ac2ad87dae891ecf50edb792c446908da0d0310f066d8cdffb9fd647793->leave($__internal_b7724ac2ad87dae891ecf50edb792c446908da0d0310f066d8cdffb9fd647793_prof);

    }

    // line 24
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_5dd036261fdc4fbdddb9edd78b7576b045e35e45882f70edc336236abf6d9cc8 = $this->env->getExtension("native_profiler");
        $__internal_5dd036261fdc4fbdddb9edd78b7576b045e35e45882f70edc336236abf6d9cc8->enter($__internal_5dd036261fdc4fbdddb9edd78b7576b045e35e45882f70edc336236abf6d9cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        // line 25
        echo "        <script>
            (function() {
//
//
                var _init = function () {

//
//                    // search button
//
                    \$('.btn-list-search').on('click', function(e) {
                        var filterForm = \$('form.report-filter-form');
                        console.log(filterForm);
                        filterForm.off('submit');
                        filterForm.trigger('submit');
//                        e.preventDefault();
                    });

                    // \"reset filters\" button

                    \$('.btn-list-reset').on('click', function(e) {
                        var resetUrl = \"";
        // line 45
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\";
                        if (resetUrl) {
                            window.location = resetUrl;
                        }

                        e.preventDefault();
                    });

                };
                \$(document).ready(setTimeout(_init, 30));
            })();
        </script>
    ";
        
        $__internal_5dd036261fdc4fbdddb9edd78b7576b045e35e45882f70edc336236abf6d9cc8->leave($__internal_5dd036261fdc4fbdddb9edd78b7576b045e35e45882f70edc336236abf6d9cc8_prof);

    }

    // line 62
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_a176b6a92ae775f994bc5040d1a7e319de32024988803d01f3606062bcf735a0 = $this->env->getExtension("native_profiler");
        $__internal_a176b6a92ae775f994bc5040d1a7e319de32024988803d01f3606062bcf735a0->enter($__internal_a176b6a92ae775f994bc5040d1a7e319de32024988803d01f3606062bcf735a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 63
        echo "                <thead class=\"title-head\">
                <tr>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 66
            echo "                        ";
            // line 67
            echo "                            ";
            // line 68
            echo "                                ";
            // line 69
            echo "                            ";
            // line 70
            echo "                        ";
            // line 71
            echo "                            ";
            // line 72
            echo "                        ";
            // line 73
            echo "                            ";
            // line 74
            echo "                        ";
            // line 75
            echo "                            ";
            // line 76
            echo "                        ";
            // line 77
            echo "                            ";
            // line 78
            echo "                            ";
            // line 79
            echo "                                ";
            // line 80
            echo "                                ";
            // line 81
            echo "                                ";
            // line 82
            echo "                                ";
            // line 83
            echo "                                ";
            // line 84
            echo "                            ";
            // line 85
            echo "
                            ";
            // line 87
            echo "                                ";
            // line 88
            echo "                                    ";
            // line 89
            echo "                                    ";
            // line 90
            echo "                                        ";
            // line 91
            echo "                                ";
            // line 92
            echo "                            ";
            // line 93
            echo "
                        ";
            // line 94
            ob_start();
            // line 95
            echo "                            <th class=\"sonata-ba-list-field-header-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"sonata-list-field-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" data-fieldname=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                                <span>";
            // line 96
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</span>
                                ";
            // line 98
            echo "                                    ";
            // line 99
            echo "                            </th>
                        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 101
            echo "                        ";
            // line 102
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </tr>
                </thead>
            ";
        
        $__internal_a176b6a92ae775f994bc5040d1a7e319de32024988803d01f3606062bcf735a0->leave($__internal_a176b6a92ae775f994bc5040d1a7e319de32024988803d01f3606062bcf735a0_prof);

    }

    // line 107
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_30f7b6695284ee980fe0ca6eec3ba15ae301026180e51cec7368e5506a4a8cee = $this->env->getExtension("native_profiler");
        $__internal_30f7b6695284ee980fe0ca6eec3ba15ae301026180e51cec7368e5506a4a8cee->enter($__internal_30f7b6695284ee980fe0ca6eec3ba15ae301026180e51cec7368e5506a4a8cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 108
        echo "                <tbody>
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataSet"]) ? $context["dataSet"] : $this->getContext($context, "dataSet")));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 110
            echo "                    <tr>
                        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["object"]);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 112
                echo "                            <td>
                                ";
                // line 113
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </tbody>
            ";
        
        $__internal_30f7b6695284ee980fe0ca6eec3ba15ae301026180e51cec7368e5506a4a8cee->leave($__internal_30f7b6695284ee980fe0ca6eec3ba15ae301026180e51cec7368e5506a4a8cee_prof);

    }

    // line 121
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_5d6283d6f18a3897efcb875fdf451f07fe591104fa4f4f360a541f33d6436cd8 = $this->env->getExtension("native_profiler");
        $__internal_5d6283d6f18a3897efcb875fdf451f07fe591104fa4f4f360a541f33d6436cd8->enter($__internal_5d6283d6f18a3897efcb875fdf451f07fe591104fa4f4f360a541f33d6436cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 122
        echo "            <div class=\"table-filter clearfix\">
                <div class=\"pull-left batch-wrap\">

                </div>

                <div class=\"pull-right\">
                    ";
        // line 129
        echo "                        ";
        // line 130
        echo "                        ";
        // line 131
        echo "                            ";
        // line 132
        echo "                                ";
        // line 133
        echo "                                    ";
        // line 134
        echo "                                ";
        // line 135
        echo "                            ";
        // line 136
        echo "                        ";
        // line 137
        echo "                        ";
        // line 138
        echo "                    ";
        // line 139
        echo "
                    ";
        // line 141
        echo "                        ";
        // line 142
        echo "                            ";
        // line 143
        echo "                                ";
        // line 144
        echo "                                ";
        // line 145
        echo "                                ";
        // line 146
        echo "                            ";
        // line 147
        echo "                            ";
        // line 148
        echo "                                ";
        // line 149
        echo "                                ";
        // line 150
        echo "                                    ";
        // line 151
        echo "                                        ";
        // line 152
        echo "                                        ";
        // line 153
        echo "                                    ";
        // line 154
        echo "                                ";
        // line 155
        echo "                                    ";
        // line 156
        echo "                            ";
        // line 157
        echo "                        ";
        // line 158
        echo "                    ";
        // line 159
        echo "                </div>
            </div>

            ";
        // line 163
        echo "                ";
        // line 164
        echo "                    ";
        // line 165
        echo "                ";
        // line 166
        echo "            ";
        // line 167
        echo "
        ";
        
        $__internal_5d6283d6f18a3897efcb875fdf451f07fe591104fa4f4f360a541f33d6436cd8->leave($__internal_5d6283d6f18a3897efcb875fdf451f07fe591104fa4f4f360a541f33d6436cd8_prof);

    }

    // line 175
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_6dee85a52c3b7244ed5996d4b892dcb4f69721497d3bda0c15da0117a377efd6 = $this->env->getExtension("native_profiler");
        $__internal_6dee85a52c3b7244ed5996d4b892dcb4f69721497d3bda0c15da0117a377efd6->enter($__internal_6dee85a52c3b7244ed5996d4b892dcb4f69721497d3bda0c15da0117a377efd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_6dee85a52c3b7244ed5996d4b892dcb4f69721497d3bda0c15da0117a377efd6->leave($__internal_6dee85a52c3b7244ed5996d4b892dcb4f69721497d3bda0c15da0117a377efd6_prof);

    }

    // line 181
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        $__internal_36c2f413c19cf1be9aee69cc44f5b71710a040c731fefc1b1fd0f170f1ed7aae = $this->env->getExtension("native_profiler");
        $__internal_36c2f413c19cf1be9aee69cc44f5b71710a040c731fefc1b1fd0f170f1ed7aae->enter($__internal_36c2f413c19cf1be9aee69cc44f5b71710a040c731fefc1b1fd0f170f1ed7aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_right_column"));

        // line 182
        echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
";
        
        $__internal_36c2f413c19cf1be9aee69cc44f5b71710a040c731fefc1b1fd0f170f1ed7aae->leave($__internal_36c2f413c19cf1be9aee69cc44f5b71710a040c731fefc1b1fd0f170f1ed7aae_prof);

    }

    // line 187
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        $__internal_720700a8cfa2a26fb9b351ce70a1d97f707cefd29aa19bd9cae5f8062b21fed8 = $this->env->getExtension("native_profiler");
        $__internal_720700a8cfa2a26fb9b351ce70a1d97f707cefd29aa19bd9cae5f8062b21fed8->enter($__internal_720700a8cfa2a26fb9b351ce70a1d97f707cefd29aa19bd9cae5f8062b21fed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_right_column"));

        // line 188
        echo "    <div id=\"collapse-block\" class=\"right-column\">
        <div class=\"widget-wrap\">
            ";
        // line 190
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
        echo "
        </div>
    </div>
";
        
        $__internal_720700a8cfa2a26fb9b351ce70a1d97f707cefd29aa19bd9cae5f8062b21fed8->leave($__internal_720700a8cfa2a26fb9b351ce70a1d97f707cefd29aa19bd9cae5f8062b21fed8_prof);

    }

    // line 195
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        $__internal_96ca0463a8544bb4322a853165f065963d30d35e46fe03706f7f8e332f5bd932 = $this->env->getExtension("native_profiler");
        $__internal_96ca0463a8544bb4322a853165f065963d30d35e46fe03706f7f8e332f5bd932->enter($__internal_96ca0463a8544bb4322a853165f065963d30d35e46fe03706f7f8e332f5bd932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_left_column"));

        // line 196
        echo "    ";
        // line 197
        echo "        ";
        // line 198
        echo "    ";
        // line 199
        echo "
    <div class=\"\">




            <div class=\"pull-right filter-controls\">
                <form method=\"get\" class=\"form-inline report-filter-form\" action=\"";
        // line 206
        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"date-range-from\" class=\"form-control datepicker\" id=\"date-range-from\" autocomplete=\"off\" placeholder=\"From\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["rangeFrom"]) ? $context["rangeFrom"] : $this->getContext($context, "rangeFrom")), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"date-range-to\" class=\"form-control datepicker\" id=\"date-range-to\" autocomplete=\"off\" placeholder=\"To\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["rangeTo"]) ? $context["rangeTo"] : $this->getContext($context, "rangeTo")), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-green btn-list-search\">Search</button>
                        <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
                    </div>
                </form>

            </div>


    </div>

";
        
        $__internal_96ca0463a8544bb4322a853165f065963d30d35e46fe03706f7f8e332f5bd932->leave($__internal_96ca0463a8544bb4322a853165f065963d30d35e46fe03706f7f8e332f5bd932_prof);

    }

    // line 227
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_9f4dd9188104d0e5deaca865a829eb14495e3be0c1434541b668c5706418b3df = $this->env->getExtension("native_profiler");
        $__internal_9f4dd9188104d0e5deaca865a829eb14495e3be0c1434541b668c5706418b3df->enter($__internal_9f4dd9188104d0e5deaca865a829eb14495e3be0c1434541b668c5706418b3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 228
        echo "    ";
        // line 229
        echo "        ";
        // line 230
        echo "        ";
        // line 231
        echo "            ";
        // line 232
        echo "                ";
        // line 233
        echo "            ";
        // line 234
        echo "
            ";
        // line 236
        echo "                ";
        // line 237
        echo "                    ";
        // line 238
        echo "                    ";
        // line 239
        echo "                        ";
        // line 240
        echo "                            ";
        // line 241
        echo "                                ";
        // line 242
        echo "                                ";
        // line 243
        echo "                                ";
        // line 244
        echo "
                                ";
        // line 246
        echo "
                                ";
        // line 248
        echo "                            ";
        // line 249
        echo "                        ";
        // line 250
        echo "
                        ";
        // line 252
        echo "
                        ";
        // line 254
        echo "                        ";
        // line 255
        echo "
                        ";
        // line 257
        echo "
                        ";
        // line 259
        echo "                    ";
        // line 260
        echo "
                    ";
        // line 262
        echo "                        ";
        // line 263
        echo "                    ";
        // line 264
        echo "                ";
        // line 265
        echo "            ";
        // line 266
        echo "        ";
        // line 267
        echo "
    ";
        
        $__internal_9f4dd9188104d0e5deaca865a829eb14495e3be0c1434541b668c5706418b3df->leave($__internal_9f4dd9188104d0e5deaca865a829eb14495e3be0c1434541b668c5706418b3df_prof);

    }

    // line 271
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_914121a801766bf727599d6c2f12432da8625b56432ef78fdf7d56f5162bf083 = $this->env->getExtension("native_profiler");
        $__internal_914121a801766bf727599d6c2f12432da8625b56432ef78fdf7d56f5162bf083->enter($__internal_914121a801766bf727599d6c2f12432da8625b56432ef78fdf7d56f5162bf083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        
        $__internal_914121a801766bf727599d6c2f12432da8625b56432ef78fdf7d56f5162bf083->leave($__internal_914121a801766bf727599d6c2f12432da8625b56432ef78fdf7d56f5162bf083_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Reports:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 271,  640 => 267,  638 => 266,  636 => 265,  634 => 264,  632 => 263,  630 => 262,  627 => 260,  625 => 259,  622 => 257,  619 => 255,  617 => 254,  614 => 252,  611 => 250,  609 => 249,  607 => 248,  604 => 246,  601 => 244,  599 => 243,  597 => 242,  595 => 241,  593 => 240,  591 => 239,  589 => 238,  587 => 237,  585 => 236,  582 => 234,  580 => 233,  578 => 232,  576 => 231,  574 => 230,  572 => 229,  570 => 228,  564 => 227,  543 => 211,  537 => 208,  532 => 206,  523 => 199,  521 => 198,  519 => 197,  517 => 196,  511 => 195,  500 => 190,  496 => 188,  490 => 187,  480 => 182,  474 => 181,  463 => 175,  455 => 167,  453 => 166,  451 => 165,  449 => 164,  447 => 163,  442 => 159,  440 => 158,  438 => 157,  436 => 156,  434 => 155,  432 => 154,  430 => 153,  428 => 152,  426 => 151,  424 => 150,  422 => 149,  420 => 148,  418 => 147,  416 => 146,  414 => 145,  412 => 144,  410 => 143,  408 => 142,  406 => 141,  403 => 139,  401 => 138,  399 => 137,  397 => 136,  395 => 135,  393 => 134,  391 => 133,  389 => 132,  387 => 131,  385 => 130,  383 => 129,  375 => 122,  369 => 121,  361 => 118,  354 => 116,  345 => 113,  342 => 112,  338 => 111,  335 => 110,  331 => 109,  328 => 108,  322 => 107,  313 => 103,  307 => 102,  305 => 101,  301 => 99,  299 => 98,  295 => 96,  286 => 95,  284 => 94,  281 => 93,  279 => 92,  277 => 91,  275 => 90,  273 => 89,  271 => 88,  269 => 87,  266 => 85,  264 => 84,  262 => 83,  260 => 82,  258 => 81,  256 => 80,  254 => 79,  252 => 78,  250 => 77,  248 => 76,  246 => 75,  244 => 74,  242 => 73,  240 => 72,  238 => 71,  236 => 70,  234 => 69,  232 => 68,  230 => 67,  228 => 66,  224 => 65,  220 => 63,  214 => 62,  194 => 45,  172 => 25,  166 => 24,  156 => 176,  154 => 175,  151 => 174,  145 => 171,  142 => 170,  139 => 169,  137 => 121,  134 => 120,  132 => 107,  129 => 106,  127 => 62,  124 => 61,  122 => 60,  118 => 58,  116 => 24,  113 => 23,  109 => 20,  103 => 19,  96 => 16,  90 => 15,  80 => 11,  76 => 10,  73 => 9,  67 => 8,  58 => 5,  53 => 4,  47 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_list.html.twig' %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/lead_opportunity_list.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block sonata_breadcrumb %}*/
/*     <ol class="nav navbar-top-links breadcrumb">*/
/*         <li><a href="{{ url('sonata_admin_dashboard') }}">Dashboard</a></li>*/
/*         <li class="active">{{ pageTitle }}</li>*/
/*     </ol>*/
/* {% endblock sonata_breadcrumb %}*/
/* */
/* {% block actions %}*/
/*     {#<li>{% include 'SonataAdminBundle:Core:create_button.html.twig' %}</li>#}*/
/* {% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="box box-primary">*/
/*     <div class="box-body table-responsive no-padding">*/
/*     {#{{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}#}*/
/* */
/*     {% block list_header %}*/
/*         <script>*/
/*             (function() {*/
/* //*/
/* //*/
/*                 var _init = function () {*/
/* */
/* //*/
/* //                    // search button*/
/* //*/
/*                     $('.btn-list-search').on('click', function(e) {*/
/*                         var filterForm = $('form.report-filter-form');*/
/*                         console.log(filterForm);*/
/*                         filterForm.off('submit');*/
/*                         filterForm.trigger('submit');*/
/* //                        e.preventDefault();*/
/*                     });*/
/* */
/*                     // "reset filters" button*/
/* */
/*                     $('.btn-list-reset').on('click', function(e) {*/
/*                         var resetUrl = "{{ path(app.request.attributes.get('_route')) }}";*/
/*                         if (resetUrl) {*/
/*                             window.location = resetUrl;*/
/*                         }*/
/* */
/*                         e.preventDefault();*/
/*                     });*/
/* */
/*                 };*/
/*                 $(document).ready(setTimeout(_init, 30));*/
/*             })();*/
/*         </script>*/
/*     {% endblock %}*/
/* */
/* */
/*     {% if dataSet|length > 0 %}*/
/*         <table class="table table-sonata-list table-bordered table-striped custom-table-2">*/
/*             {% block table_header %}*/
/*                 <thead class="title-head">*/
/*                 <tr>*/
/*                     {% for key,name in header %}*/
/*                         {#{% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}#}*/
/*                             {#<th>#}*/
/*                                 {#<input type="checkbox" id="list_batch_checkbox">#}*/
/*                             {#</th>#}*/
/*                         {#{% elseif field_description.getOption('code') == '_select' %}#}*/
/*                             {#<th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>#}*/
/*                         {#{% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}#}*/
/*                             {#&#123;&#35; Action buttons disabled in ajax view! &#35;&#125;#}*/
/*                         {#{% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}#}*/
/*                             {#&#123;&#35; Disable fields with 'ajax_hidden' option set to true &#35;&#125;#}*/
/*                         {#{% else %}#}*/
/*                             {#{% set sortable = false %}#}*/
/*                             {#{% if field_description.options.sortable is defined and field_description.options.sortable %}#}*/
/*                                 {#{% set sortable             = true %}#}*/
/*                                 {#{% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}#}*/
/*                                 {#{% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}#}*/
/*                                 {#{% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}#}*/
/*                                 {#{% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}#}*/
/*                             {#{% endif %}#}*/
/* */
/*                             {#{% spaceless %}#}*/
/*                                 {#<th class="sonata-ba-list-field-header-{{ field_description.type}}" class="sonata-list-field-{{ field_description.name }}" data-fieldname="{{ field_description.name }}">#}*/
/*                                     {#<span>{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}</span>#}*/
/*                                     {#{% if sortable %}<a class="filter-link" href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}#}*/
/*                                         {#{% if sortable %}</a>{% endif %}#}*/
/*                                 {#</th>#}*/
/*                             {#{% endspaceless %}#}*/
/* */
/*                         {% spaceless %}*/
/*                             <th class="sonata-ba-list-field-header-{{ key }}" class="sonata-list-field-{{ key }}" data-fieldname="{{ key }}">*/
/*                                 <span>{{ name }}</span>*/
/*                                 {#{% if sortable %}<a class="filter-link" href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}#}*/
/*                                     {#{% if sortable %}</a>{% endif %}#}*/
/*                             </th>*/
/*                         {% endspaceless %}*/
/*                         {#{% endif %}#}*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*                 </thead>*/
/*             {% endblock %}*/
/* */
/*             {% block table_body %}*/
/*                 <tbody>*/
/*                 {% for object in dataSet %}*/
/*                     <tr>*/
/*                         {% for field in object %}*/
/*                             <td>*/
/*                                 {{ field }}*/
/*                             </td>*/
/*                         {% endfor %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endblock %}*/
/*         </table>*/
/*         {% block table_footer %}*/
/*             <div class="table-filter clearfix">*/
/*                 <div class="pull-left batch-wrap">*/
/* */
/*                 </div>*/
/* */
/*                 <div class="pull-right">*/
/*                     {#{% block pager_results %}#}*/
/*                         {#Show#}*/
/*                         {#<select class="custom-select-to-init light per-page small" id="{{ admin.uniqid }}_per_page">#}*/
/*                             {#{% for per_page in admin.getperpageoptions %}#}*/
/*                                 {#<option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values | merge({'_page': 1, '_per_page': per_page})}) }}">#}*/
/*                                     {#{{ per_page }}#}*/
/*                                 {#</option>#}*/
/*                             {#{% endfor %}#}*/
/*                         {#</select>#}*/
/*                         {#per page#}*/
/*                     {#{% endblock %}#}*/
/* */
/*                     {#{% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}#}*/
/*                         {#<div class="btn-group">#}*/
/*                             {#<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">#}*/
/*                                 {#<i class="glyphicon glyphicon-export"></i>#}*/
/*                                 {#{{ "label_export_download"|trans({}, "SonataAdminBundle") }}#}*/
/*                                 {#<span class="caret"></span>#}*/
/*                             {#</button>#}*/
/*                             {#<ul class="dropdown-menu" style="margin-left: 50px;">#}*/
/*                                 {#{% for format in admin.getExportFormats() %}#}*/
/*                                 {#<li>#}*/
/*                                     {#<a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">#}*/
/*                                         {#<i class="glyphicon glyphicon-download"></i>#}*/
/*                                         {#{{ format|upper }}#}*/
/*                                     {#</a>#}*/
/*                                 {#<li>#}*/
/*                                     {#{% endfor %}#}*/
/*                             {#</ul>#}*/
/*                         {#</div>#}*/
/*                     {#{% endif %}#}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {#{% block pager_links %}#}*/
/*                 {#{% if admin.datagrid.pager.haveToPaginate() %}#}*/
/*                     {#{% include admin.getTemplate('pager_links') %}#}*/
/*                 {#{% endif %}#}*/
/*             {#{% endblock %}#}*/
/* */
/*         {% endblock %}*/
/*     {% else %}*/
/*         <div class="callout callout-info">*/
/*             {{ 'no_result'|trans({}, 'SonataAdminBundle') }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% block list_footer %}{% endblock %}*/
/* */
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_filter_right_column %}*/
/*     <div class="pull-right">*/
/*         <button class="btn filter-widget hidden-widget" data-target="collapse-block">Hide widgets</button>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_right_column %}*/
/*     <div id="collapse-block" class="right-column">*/
/*         <div class="widget-wrap">*/
/*             {{ render(controller('ZesharCRMCoreBundle:Dashboard:showBlockWidget')) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_filter_left_column %}*/
/*     {#<div class="pull-left">#}*/
/*         {#<a href="{{ admin.generateUrl('create') }}"><button type="button" class="btn btn-green"><i class="fa fa-plus"></i>Add New {{ admin.getLabel() }}</button></a>#}*/
/*     {#</div>#}*/
/* */
/*     <div class="">*/
/* */
/* */
/* */
/* */
/*             <div class="pull-right filter-controls">*/
/*                 <form method="get" class="form-inline report-filter-form" action="{{ url(app.request.attributes.get('_route')) }}">*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="date-range-from" class="form-control datepicker" id="date-range-from" autocomplete="off" placeholder="From" value="{{ rangeFrom }}">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="date-range-to" class="form-control datepicker" id="date-range-to" autocomplete="off" placeholder="To" value="{{ rangeTo }}">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <button type="submit" class="btn btn-green btn-list-search">Search</button>*/
/*                         <input type="button" class="btn btn-white btn-list-reset" value="Reset Filters">*/
/*                     </div>*/
/*                 </form>*/
/* */
/*             </div>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block list_filters %}*/
/*     {#{% if admin.datagrid.filters %}#}*/
/*         {#{% form_theme form "SonataAdminBundle:Form:filter_admin_fields.html.twig" %}#}*/
/*         {#<div class="box box-primary">#}*/
/*             {#<div class="box-header">#}*/
/*                 {#<h4 class="box-title filter_legend {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">{{ 'label_filters'|trans({}, 'SonataAdminBundle') }}</h4>#}*/
/*             {#</div>#}*/
/* */
/*             {#<div class="box-body">#}*/
/*                 {#<form class="sonata-filter-form {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">#}*/
/*                     {#{{ form_errors(form) }}#}*/
/*                     {#<div class="filter_container {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">#}*/
/*                         {#{% for filter in admin.datagrid.filters %}#}*/
/*                             {#<div class="form-group">#}*/
/*                                 {#<label for="{{ form.children[filter.formName].children['value'].vars.id }}">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>#}*/
/*                                 {#{% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}#}*/
/*                                 {#{% set attr = attr|merge({'class': (attr.class|default('') ~ ' sonata-filter-option')|trim}) %}#}*/
/* */
/*                                 {#{{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}#}*/
/* */
/*                                 {#{{ form_widget(form.children[filter.formName].children['value']) }}#}*/
/*                             {#</div>#}*/
/*                         {#{% endfor %}#}*/
/* */
/*                         {#<input type="hidden" name="filter[_page]" id="filter__page" value="1">#}*/
/* */
/*                         {#{% set foo = form.children['_page'].setRendered() %}#}*/
/*                         {#{{ form_rest(form) }}#}*/
/* */
/*                         {#<button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}</button>#}*/
/* */
/*                         {#<a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">{{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}</a>#}*/
/*                     {#</div>#}*/
/* */
/*                     {#{% for paramKey, paramValue in admin.persistentParameters %}#}*/
/*                         {#<input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">#}*/
/*                     {#{% endfor %}#}*/
/*                 {#</form>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/* */
/*     {#{% endif %}#}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{#{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}#}{% endblock %}*/
