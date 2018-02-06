<?php

/* ZesharCRMCoreBundle:Reports:list.html.twig */
class __TwigTemplate_18c282910cbbb06f46668b9a0786551ea4f5441a0614797204cec08863134b27 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/lead_opportunity_list.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 9
        echo "    <ol class=\"nav navbar-top-links breadcrumb\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">Dashboard</a></li>
        <li class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 15
    public function block_actions($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
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
        if ((twig_length_filter($this->env, (isset($context["dataSet"]) ? $context["dataSet"] : null)) > 0)) {
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
    }

    // line 24
    public function block_list_header($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
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
    }

    // line 62
    public function block_table_header($context, array $blocks = array())
    {
        // line 63
        echo "                <thead class=\"title-head\">
                <tr>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
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
    }

    // line 107
    public function block_table_body($context, array $blocks = array())
    {
        // line 108
        echo "                <tbody>
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataSet"]) ? $context["dataSet"] : null));
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
    }

    // line 121
    public function block_table_footer($context, array $blocks = array())
    {
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
    }

    // line 175
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 181
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        // line 182
        echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
";
    }

    // line 187
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
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
    }

    // line 195
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"date-range-from\" class=\"form-control datepicker\" id=\"date-range-from\" autocomplete=\"off\" placeholder=\"From\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["rangeFrom"]) ? $context["rangeFrom"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"date-range-to\" class=\"form-control datepicker\" id=\"date-range-to\" autocomplete=\"off\" placeholder=\"To\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["rangeTo"]) ? $context["rangeTo"] : null), "html", null, true);
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
    }

    // line 227
    public function block_list_filters($context, array $blocks = array())
    {
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
    }

    // line 271
    public function block_tab_menu($context, array $blocks = array())
    {
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
        return array (  564 => 271,  559 => 267,  557 => 266,  555 => 265,  553 => 264,  551 => 263,  549 => 262,  546 => 260,  544 => 259,  541 => 257,  538 => 255,  536 => 254,  533 => 252,  530 => 250,  528 => 249,  526 => 248,  523 => 246,  520 => 244,  518 => 243,  516 => 242,  514 => 241,  512 => 240,  510 => 239,  508 => 238,  506 => 237,  504 => 236,  501 => 234,  499 => 233,  497 => 232,  495 => 231,  493 => 230,  491 => 229,  489 => 228,  486 => 227,  468 => 211,  462 => 208,  457 => 206,  448 => 199,  446 => 198,  444 => 197,  442 => 196,  439 => 195,  431 => 190,  427 => 188,  424 => 187,  417 => 182,  414 => 181,  409 => 175,  404 => 167,  402 => 166,  400 => 165,  398 => 164,  396 => 163,  391 => 159,  389 => 158,  387 => 157,  385 => 156,  383 => 155,  381 => 154,  379 => 153,  377 => 152,  375 => 151,  373 => 150,  371 => 149,  369 => 148,  367 => 147,  365 => 146,  363 => 145,  361 => 144,  359 => 143,  357 => 142,  355 => 141,  352 => 139,  350 => 138,  348 => 137,  346 => 136,  344 => 135,  342 => 134,  340 => 133,  338 => 132,  336 => 131,  334 => 130,  332 => 129,  324 => 122,  321 => 121,  316 => 118,  309 => 116,  300 => 113,  297 => 112,  293 => 111,  290 => 110,  286 => 109,  283 => 108,  280 => 107,  274 => 103,  268 => 102,  266 => 101,  262 => 99,  260 => 98,  256 => 96,  247 => 95,  245 => 94,  242 => 93,  240 => 92,  238 => 91,  236 => 90,  234 => 89,  232 => 88,  230 => 87,  227 => 85,  225 => 84,  223 => 83,  221 => 82,  219 => 81,  217 => 80,  215 => 79,  213 => 78,  211 => 77,  209 => 76,  207 => 75,  205 => 74,  203 => 73,  201 => 72,  199 => 71,  197 => 70,  195 => 69,  193 => 68,  191 => 67,  189 => 66,  185 => 65,  181 => 63,  178 => 62,  161 => 45,  139 => 25,  136 => 24,  129 => 176,  127 => 175,  124 => 174,  118 => 171,  115 => 170,  112 => 169,  110 => 121,  107 => 120,  105 => 107,  102 => 106,  100 => 62,  97 => 61,  95 => 60,  91 => 58,  89 => 24,  86 => 23,  82 => 20,  79 => 19,  75 => 16,  72 => 15,  65 => 11,  61 => 10,  58 => 9,  55 => 8,  49 => 5,  44 => 4,  41 => 3,  11 => 1,);
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
