<?php

/* ZesharCRMCoreBundle:CRUD:deleted_lead_list.html.twig */
class __TwigTemplate_6e0dbce2dcad86a2f85b90f063dc8d87865e8eac2db88bf83c7381f5947fe23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list.html.twig", "ZesharCRMCoreBundle:CRUD:deleted_lead_list.html.twig", 12);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'sonata_admin_filter_right_column' => array($this, 'block_sonata_admin_filter_right_column'),
            'sonata_admin_right_column' => array($this, 'block_sonata_admin_right_column'),
            'sonata_admin_filter_left_column' => array($this, 'block_sonata_admin_filter_left_column'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f03cc75a286bbe3a1583cd9d6138f56f3beba46fc3e6375bdfac473f82a855ec = $this->env->getExtension("native_profiler");
        $__internal_f03cc75a286bbe3a1583cd9d6138f56f3beba46fc3e6375bdfac473f82a855ec->enter($__internal_f03cc75a286bbe3a1583cd9d6138f56f3beba46fc3e6375bdfac473f82a855ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:deleted_lead_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03cc75a286bbe3a1583cd9d6138f56f3beba46fc3e6375bdfac473f82a855ec->leave($__internal_f03cc75a286bbe3a1583cd9d6138f56f3beba46fc3e6375bdfac473f82a855ec_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21cef7785b14a6f4e70ba23eb360bb7543dd4424852b4040b80704e578ee56ae = $this->env->getExtension("native_profiler");
        $__internal_21cef7785b14a6f4e70ba23eb360bb7543dd4424852b4040b80704e578ee56ae->enter($__internal_21cef7785b14a6f4e70ba23eb360bb7543dd4424852b4040b80704e578ee56ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/lead_opportunity_list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_21cef7785b14a6f4e70ba23eb360bb7543dd4424852b4040b80704e578ee56ae->leave($__internal_21cef7785b14a6f4e70ba23eb360bb7543dd4424852b4040b80704e578ee56ae_prof);

    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_c2220959191a33c21fb06328120c677b322bb041f1aaec19f255a3bf0b3423ac = $this->env->getExtension("native_profiler");
        $__internal_c2220959191a33c21fb06328120c677b322bb041f1aaec19f255a3bf0b3423ac->enter($__internal_c2220959191a33c21fb06328120c677b322bb041f1aaec19f255a3bf0b3423ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 20
        echo "    <div class=\"box box-primary\">
    <div class=\"box-body table-responsive no-padding\">
    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

    ";
        // line 24
        $this->displayBlock('list_header', $context, $blocks);
        // line 219
        echo "
    ";
        // line 220
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 221
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 222
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 223
                echo "            <div class=\"table-scroll\" style=\"overflow: visible;\">
            <form action=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 225
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
        ";
            }
            // line 227
            echo "        <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
            ";
            // line 228
            $this->displayBlock('table_header', $context, $blocks);
            // line 264
            echo "
            ";
            // line 265
            $this->displayBlock('table_body', $context, $blocks);
            // line 276
            echo "        </table>
        ";
            // line 277
            $this->displayBlock('table_footer', $context, $blocks);
            // line 329
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 330
                echo "            </form>
            </div>
        ";
            }
            // line 333
            echo "    ";
        } else {
            // line 334
            echo "        <div class=\"callout callout-info\">
            ";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 338
        echo "
    ";
        // line 339
        $this->displayBlock('list_footer', $context, $blocks);
        // line 340
        echo "
    ";
        // line 341
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


    </div>
    </div>
";
        
        $__internal_c2220959191a33c21fb06328120c677b322bb041f1aaec19f255a3bf0b3423ac->leave($__internal_c2220959191a33c21fb06328120c677b322bb041f1aaec19f255a3bf0b3423ac_prof);

    }

    // line 24
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_5400a51f366b6057efdf37528285829a9fef8aafd0f3bb638b628bdb8c5cc539 = $this->env->getExtension("native_profiler");
        $__internal_5400a51f366b6057efdf37528285829a9fef8aafd0f3bb638b628bdb8c5cc539->enter($__internal_5400a51f366b6057efdf37528285829a9fef8aafd0f3bb638b628bdb8c5cc539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        // line 25
        echo "        ";
        if (array_key_exists("pageTitle", $context)) {
            // line 26
            echo "        <script>
            \$(function(){
                page_title = \"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
            echo "\";
                if(page_title.length > 0){
                    document.title = page_title;
                }
            });
        </script>
        ";
        }
        // line 35
        echo "        <script>
            (function() {


                var _init = function () {

                    // bulk operations checkboxes

                    var listBatchCheckbox = \$('#list_batch_checkbox');
                    var otherCheckboxes = listBatchCheckbox
                                    .closest('table')
                                    .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                    .not(listBatchCheckbox)
                            ;
                    listBatchCheckbox.on('change', function () {
                        if (\$(this).is(':checked')) {
                            otherCheckboxes
                                    .prop('checked', true)
                                    .trigger('change')
                            ;
                        } else {
                            otherCheckboxes
                                    .prop('checked', false)
                                    .trigger('change')
                            ;
                        }
                    });

                    otherCheckboxes
                            .on('change', function () {
                                \$(this)
                                        .closest('tr')
                                        .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                ;
                                var selectedCheckboxesCount = otherCheckboxes.filter(':checked').size();
                                var selectedCheckboxesCountText = '';
                                if (selectedCheckboxesCount == 0) {
                                    selectedCheckboxesCountText = 'No items selected';
                                } else {
                                    if (selectedCheckboxesCount == 1) {
                                        selectedCheckboxesCountText = '1 Item Selected';
                                    } else {
                                        selectedCheckboxesCountText = selectedCheckboxesCount + ' Items Selected';
                                    }
                                }
                                \$('.selected-items-count').text(selectedCheckboxesCountText);
                            })
                            .trigger('ifChanged')
                    ;


                    // top list filters

                    \$('.table-sonata-list').each(function() {
                        var filtersThead = \$('<thead></thead>');
                        var filtersTheadTr = \$('<tr></tr>');
                        var titlesThead = \$(this).children('thead.title-head');
                        titlesThead.find('th').each(function() {
                            var th = \$('<th></th>');
                            if (\$(this).is('[data-fieldname]')) {
                                th.addClass('sonata-list-field-' + \$(this).data('fieldname'));
                                var realFilterInputId = 'filter_' + (\$(this).data('fieldname').replace('.', '__')) + '_value';
                                var realFilterInput = \$('#' + realFilterInputId).not('div');
                                if (realFilterInput.size()) { // else - filter for this field exist
                                    var newFilterInput = realFilterInput.clone();
                                    newFilterInput
                                            .addClass('fake-filter-input')
                                            .css('margin', '0')
                                            .appendTo(th)
                                    ;
                                    if (newFilterInput.prop(\"tagName\") == 'select' || newFilterInput.prop(\"tagName\") == 'SELECT') { // init select2
                                        newFilterInput.addClass('light');
                                        newFilterInput.select2();
                                    }
                                } else {
                                    // check for date filters
                                    var yearFilter = \$('#' + realFilterInputId + '_year');
                                    var monthFilter = \$('#' + realFilterInputId + '_month');
                                    var dayFilter = \$('#' + realFilterInputId + '_day');
                                    if (yearFilter.size() || monthFilter.size() || dayFilter.size()) {
                                        var date = new Date();
                                        var dateNotEmpty = false;
                                        if (yearFilter.size()) {
                                            if (yearFilter.val()) {
                                                date.setYear(yearFilter.val());
                                                dateNotEmpty = true;
                                            }
                                        }
                                        if (monthFilter.size()) {
                                            if (monthFilter.val()) {
                                                date.setMonth(monthFilter.val() - 1);
                                                dateNotEmpty = true;
                                            }
                                        }
                                        if (dayFilter.size()) {
                                            if (dayFilter.val()) {
                                                date.setDate(dayFilter.val());
                                                dateNotEmpty = true;
                                            }
                                        }
                                        var dateInput = \$('<input type=\"text\" class=\"datepicker\"/>');

                                        var m_names = new Array(\"january\", \"february\", \"march\",
                                                \"april\", \"may\", \"june\", \"july\", \"august\", \"september\",
                                                \"october\", \"november\", \"december\");
                                        var dateString = date.getDate() + ' ' + m_names[date.getMonth()] + ', ' + date.getFullYear();

                                        // hack for datepicker (smth overrides it)
                                        setTimeout(function() {
                                            if (dateNotEmpty) {
                                                dateInput.val(dateString);
                                            }
                                        }, 1000);

                                        dateInput
                                            //.val(dateString)
                                            //.trigger('change')
                                                .datepicker( \"option\", \"dateFormat\", \"M d, yy\" )
                                                .datepicker('setDate', date)
                                                .addClass('fake-filter-input')
                                                .css('margin', '0')
                                                .data('real-inpit-id', realFilterInputId)
                                                .appendTo(th)
                                        ;
                                    }
                                }
                            }
                            th.appendTo(filtersTheadTr);
                        });
                        filtersTheadTr.appendTo(filtersThead);
                        filtersThead.addClass('fake-filters').insertAfter(titlesThead);

                        \$('.fake-filter-input').on('keypress', function(e) {
                            if (13 == e.keyCode) { // catch Enter key
                                e.preventDefault();
                            }
                        });
                    });

                    // search button

                    \$('.btn-list-search').on('click', function(e) {
                        var sonataFilterForm = \$('form.sonata-filter-form');

                        \$('.fake-filters').find('input.fake-filter-input, select.fake-filter-input').each(function() {
                            var fakeFilterName = \$(this).attr('name');
                            var realFilterInput = sonataFilterForm.find('[name=\"' + fakeFilterName + '\"]');
                            if (realFilterInput.size()) {
                                realFilterInput.val(\$(this).val()).trigger('change');
                            } else { // try to handle date
                                var realInputId = \$(this).data('real-inpit-id');
                                if (realInputId) {
                                    if (\$(this).val()) {
                                        var date = \$(this).datepicker( \"getDate\" );
                                        \$('#' + realInputId + '_year').val(date.getFullYear()).trigger('change');
                                        \$('#' + realInputId + '_month').val(date.getMonth() + 1).trigger('change');
                                        \$('#' + realInputId + '_day').val(date.getDate()).trigger('change');
                                    }
                                }
                            }
                        });
                        sonataFilterForm.off('submit');
                        sonataFilterForm.trigger('submit');


                        e.preventDefault();
                    });

                    // \"reset filters\" button

                    \$('.btn-list-reset').on('click', function(e) {
                        var resetUrl = \$('form.sonata-filter-form button[type=\"submit\"]').next().attr('href');
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
        
        $__internal_5400a51f366b6057efdf37528285829a9fef8aafd0f3bb638b628bdb8c5cc539->leave($__internal_5400a51f366b6057efdf37528285829a9fef8aafd0f3bb638b628bdb8c5cc539_prof);

    }

    // line 228
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_3e0c42cd7733ced354c0f5ff365760029147ca2645a75cabc53187804f6ecd5d = $this->env->getExtension("native_profiler");
        $__internal_3e0c42cd7733ced354c0f5ff365760029147ca2645a75cabc53187804f6ecd5d->enter($__internal_3e0c42cd7733ced354c0f5ff365760029147ca2645a75cabc53187804f6ecd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 229
        echo "                <thead class=\"title-head\">
                <tr>
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 232
            echo "                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 233
                echo "                            <th>
                                <input type=\"checkbox\" id=\"list_batch_checkbox\">
                            </th>
                        ";
            } elseif (($this->getAttribute(            // line 236
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 237
                echo "                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                        ";
            } elseif ((($this->getAttribute(            // line 238
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 239
                echo "                            ";
                // line 240
                echo "                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 241
                echo "                            ";
                // line 242
                echo "                        ";
            } else {
                // line 243
                echo "                            ";
                $context["sortable"] = false;
                // line 244
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 245
                    echo "                                ";
                    $context["sortable"] = true;
                    // line 246
                    echo "                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 247
                    echo "                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 248
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 249
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 250
                    echo "                            ";
                }
                // line 251
                echo "
                            ";
                // line 252
                ob_start();
                // line 253
                echo "                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo "\" class=\"sonata-list-field-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\" data-fieldname=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\">
                                    <span>";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "</span>
                                    ";
                // line 255
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a class=\"filter-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 256
                echo "                                        ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 257
                echo "                                </th>
                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 259
                echo "                        ";
            }
            // line 260
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "                </tr>
                </thead>
            ";
        
        $__internal_3e0c42cd7733ced354c0f5ff365760029147ca2645a75cabc53187804f6ecd5d->leave($__internal_3e0c42cd7733ced354c0f5ff365760029147ca2645a75cabc53187804f6ecd5d_prof);

    }

    // line 265
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_01f03e7df0e636ea51c8d3b4fe2a357e7d978324e71727c1051e253f51faf909 = $this->env->getExtension("native_profiler");
        $__internal_01f03e7df0e636ea51c8d3b4fe2a357e7d978324e71727c1051e253f51faf909->enter($__internal_01f03e7df0e636ea51c8d3b4fe2a357e7d978324e71727c1051e253f51faf909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 266
        echo "                <tbody>
                ";
        // line 267
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
            // line 268
            echo "                    ";
            // line 269
            echo "                        <tr>
                            ";
            // line 270
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle:CRUD:deleted_lead_list.html.twig", 270)->display($context);
            // line 271
            echo "                        </tr>
                    ";
            // line 273
            echo "                ";
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
        // line 274
        echo "                </tbody>
            ";
        
        $__internal_01f03e7df0e636ea51c8d3b4fe2a357e7d978324e71727c1051e253f51faf909->leave($__internal_01f03e7df0e636ea51c8d3b4fe2a357e7d978324e71727c1051e253f51faf909_prof);

    }

    // line 277
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_4c188e19ee1030bc6d83302f4b85c783960d4688d2a3f04ac322d0e6a9a61544 = $this->env->getExtension("native_profiler");
        $__internal_4c188e19ee1030bc6d83302f4b85c783960d4688d2a3f04ac322d0e6a9a61544->enter($__internal_4c188e19ee1030bc6d83302f4b85c783960d4688d2a3f04ac322d0e6a9a61544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 278
        echo "            <div class=\"table-filter clearfix\">
                <div class=\"pull-left batch-wrap\">
                    <span class=\"selected-items-count\" style=\"display: inline-block; min-width: 110px;\">No items selected</span>
                    ";
        // line 282
        echo "                    ";
        // line 283
        echo "                    <input type=\"submit\" data-ajax-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_list/leadReestablish\" value=\"Reestablish\" data-batch=\"reestablish\" class=\"btn btn-small btn-primary btn-list-reestablish btn-batch\">
                    <input type=\"submit\" data-ajax-url=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_list/leadDelete\" value=\"Delete Permanently\" data-batch=\"delete_permanently\" class=\"btn btn-small btn-primary btn-list-delete btn-batch\">
                </div>

                <div class=\"pull-right\">
                    ";
        // line 288
        $this->displayBlock('pager_results', $context, $blocks);
        // line 299
        echo "
                    ";
        // line 300
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
            // line 301
            echo "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-export\"></i>
                                ";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" style=\"margin-left: 50px;\">
                                ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 309
                echo "                                <li>
                                    <a href=\"";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-download\"></i>
                                        ";
                // line 312
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                echo "
                                    </a>
                                <li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 319
        echo "                </div>
            </div>

            ";
        // line 322
        $this->displayBlock('pager_links', $context, $blocks);
        // line 327
        echo "
        ";
        
        $__internal_4c188e19ee1030bc6d83302f4b85c783960d4688d2a3f04ac322d0e6a9a61544->leave($__internal_4c188e19ee1030bc6d83302f4b85c783960d4688d2a3f04ac322d0e6a9a61544_prof);

    }

    // line 288
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_a1d69dfe760dacb29f528ef0dc42e54b094be9682d9856f7468f1abba881c83b = $this->env->getExtension("native_profiler");
        $__internal_a1d69dfe760dacb29f528ef0dc42e54b094be9682d9856f7468f1abba881c83b->enter($__internal_a1d69dfe760dacb29f528ef0dc42e54b094be9682d9856f7468f1abba881c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 289
        echo "                        Show
                        <select class=\"custom-select-to-init light per-page small\" id=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">
                            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 292
            echo "                                <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                                    ";
            // line 293
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                        </select>
                        per page
                    ";
        
        $__internal_a1d69dfe760dacb29f528ef0dc42e54b094be9682d9856f7468f1abba881c83b->leave($__internal_a1d69dfe760dacb29f528ef0dc42e54b094be9682d9856f7468f1abba881c83b_prof);

    }

    // line 322
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_2e373d8490569207f90b1d175f87024f1889281c0cd9b062e9b442bc572fb726 = $this->env->getExtension("native_profiler");
        $__internal_2e373d8490569207f90b1d175f87024f1889281c0cd9b062e9b442bc572fb726->enter($__internal_2e373d8490569207f90b1d175f87024f1889281c0cd9b062e9b442bc572fb726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 323
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 324
            echo "                    ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:deleted_lead_list.html.twig", 324)->display($context);
            // line 325
            echo "                ";
        }
        // line 326
        echo "            ";
        
        $__internal_2e373d8490569207f90b1d175f87024f1889281c0cd9b062e9b442bc572fb726->leave($__internal_2e373d8490569207f90b1d175f87024f1889281c0cd9b062e9b442bc572fb726_prof);

    }

    // line 339
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_b1f7aba1b51b32f9e71eaed717915b652cbac2fe5899f51385ee0dbe91e18575 = $this->env->getExtension("native_profiler");
        $__internal_b1f7aba1b51b32f9e71eaed717915b652cbac2fe5899f51385ee0dbe91e18575->enter($__internal_b1f7aba1b51b32f9e71eaed717915b652cbac2fe5899f51385ee0dbe91e18575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_b1f7aba1b51b32f9e71eaed717915b652cbac2fe5899f51385ee0dbe91e18575->leave($__internal_b1f7aba1b51b32f9e71eaed717915b652cbac2fe5899f51385ee0dbe91e18575_prof);

    }

    // line 348
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        $__internal_85453376bed9f7ae5a16996bc7a8fbdff681e312bd8dc6d39686623dd8b3071e = $this->env->getExtension("native_profiler");
        $__internal_85453376bed9f7ae5a16996bc7a8fbdff681e312bd8dc6d39686623dd8b3071e->enter($__internal_85453376bed9f7ae5a16996bc7a8fbdff681e312bd8dc6d39686623dd8b3071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_right_column"));

        // line 349
        echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
";
        
        $__internal_85453376bed9f7ae5a16996bc7a8fbdff681e312bd8dc6d39686623dd8b3071e->leave($__internal_85453376bed9f7ae5a16996bc7a8fbdff681e312bd8dc6d39686623dd8b3071e_prof);

    }

    // line 354
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        $__internal_2d2b5cb82734af40744e42f5901fc4d9c1627929ba80752adb196f76a61cced9 = $this->env->getExtension("native_profiler");
        $__internal_2d2b5cb82734af40744e42f5901fc4d9c1627929ba80752adb196f76a61cced9->enter($__internal_2d2b5cb82734af40744e42f5901fc4d9c1627929ba80752adb196f76a61cced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_right_column"));

        // line 355
        echo "    <div id=\"collapse-block\" class=\"right-column\">
        <div class=\"widget-wrap\">
            ";
        // line 357
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
        echo "
        </div>
    </div>
";
        
        $__internal_2d2b5cb82734af40744e42f5901fc4d9c1627929ba80752adb196f76a61cced9->leave($__internal_2d2b5cb82734af40744e42f5901fc4d9c1627929ba80752adb196f76a61cced9_prof);

    }

    // line 362
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        $__internal_580600b8b1fb24a34162869091317092a55d1900fa8c537cfd00285ec2957f30 = $this->env->getExtension("native_profiler");
        $__internal_580600b8b1fb24a34162869091317092a55d1900fa8c537cfd00285ec2957f30->enter($__internal_580600b8b1fb24a34162869091317092a55d1900fa8c537cfd00285ec2957f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_left_column"));

        // line 363
        echo "    <div class=\"pull-left\">
        <a href=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo "</button></a>
    </div>
    <div class=\"pull-right filter-controls\">
        ";
        // line 367
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 368
            echo "            <input type=\"button\" class=\"btn btn-green btn-list-search\" value=\"Search\">
        ";
        }
        // line 370
        echo "        <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
    </div>
";
        
        $__internal_580600b8b1fb24a34162869091317092a55d1900fa8c537cfd00285ec2957f30->leave($__internal_580600b8b1fb24a34162869091317092a55d1900fa8c537cfd00285ec2957f30_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:deleted_lead_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  769 => 370,  765 => 368,  763 => 367,  755 => 364,  752 => 363,  746 => 362,  735 => 357,  731 => 355,  725 => 354,  715 => 349,  709 => 348,  698 => 339,  691 => 326,  688 => 325,  685 => 324,  682 => 323,  676 => 322,  667 => 296,  658 => 293,  649 => 292,  645 => 291,  641 => 290,  638 => 289,  632 => 288,  624 => 327,  622 => 322,  617 => 319,  612 => 316,  602 => 312,  597 => 310,  594 => 309,  590 => 308,  583 => 304,  578 => 301,  576 => 300,  573 => 299,  571 => 288,  564 => 284,  559 => 283,  557 => 282,  552 => 278,  546 => 277,  538 => 274,  524 => 273,  521 => 271,  519 => 270,  516 => 269,  514 => 268,  497 => 267,  494 => 266,  488 => 265,  479 => 261,  473 => 260,  470 => 259,  466 => 257,  461 => 256,  455 => 255,  451 => 254,  442 => 253,  440 => 252,  437 => 251,  434 => 250,  431 => 249,  428 => 248,  425 => 247,  422 => 246,  419 => 245,  416 => 244,  413 => 243,  410 => 242,  408 => 241,  405 => 240,  403 => 239,  401 => 238,  398 => 237,  396 => 236,  391 => 233,  388 => 232,  384 => 231,  380 => 229,  374 => 228,  184 => 35,  174 => 28,  170 => 26,  167 => 25,  161 => 24,  148 => 341,  145 => 340,  143 => 339,  140 => 338,  134 => 335,  131 => 334,  128 => 333,  123 => 330,  120 => 329,  118 => 277,  115 => 276,  113 => 265,  110 => 264,  108 => 228,  105 => 227,  100 => 225,  96 => 224,  93 => 223,  90 => 222,  87 => 221,  85 => 220,  82 => 219,  80 => 24,  75 => 22,  71 => 20,  65 => 19,  56 => 16,  51 => 15,  45 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:list.html.twig' %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/lead_opportunity_list.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="box box-primary">*/
/*     <div class="box-body table-responsive no-padding">*/
/*     {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*     {% block list_header %}*/
/*         {% if pageTitle is defined %}*/
/*         <script>*/
/*             $(function(){*/
/*                 page_title = "{{ pageTitle }}";*/
/*                 if(page_title.length > 0){*/
/*                     document.title = page_title;*/
/*                 }*/
/*             });*/
/*         </script>*/
/*         {% endif %}*/
/*         <script>*/
/*             (function() {*/
/* */
/* */
/*                 var _init = function () {*/
/* */
/*                     // bulk operations checkboxes*/
/* */
/*                     var listBatchCheckbox = $('#list_batch_checkbox');*/
/*                     var otherCheckboxes = listBatchCheckbox*/
/*                                     .closest('table')*/
/*                                     .find('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                     .not(listBatchCheckbox)*/
/*                             ;*/
/*                     listBatchCheckbox.on('change', function () {*/
/*                         if ($(this).is(':checked')) {*/
/*                             otherCheckboxes*/
/*                                     .prop('checked', true)*/
/*                                     .trigger('change')*/
/*                             ;*/
/*                         } else {*/
/*                             otherCheckboxes*/
/*                                     .prop('checked', false)*/
/*                                     .trigger('change')*/
/*                             ;*/
/*                         }*/
/*                     });*/
/* */
/*                     otherCheckboxes*/
/*                             .on('change', function () {*/
/*                                 $(this)*/
/*                                         .closest('tr')*/
/*                                         .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                 ;*/
/*                                 var selectedCheckboxesCount = otherCheckboxes.filter(':checked').size();*/
/*                                 var selectedCheckboxesCountText = '';*/
/*                                 if (selectedCheckboxesCount == 0) {*/
/*                                     selectedCheckboxesCountText = 'No items selected';*/
/*                                 } else {*/
/*                                     if (selectedCheckboxesCount == 1) {*/
/*                                         selectedCheckboxesCountText = '1 Item Selected';*/
/*                                     } else {*/
/*                                         selectedCheckboxesCountText = selectedCheckboxesCount + ' Items Selected';*/
/*                                     }*/
/*                                 }*/
/*                                 $('.selected-items-count').text(selectedCheckboxesCountText);*/
/*                             })*/
/*                             .trigger('ifChanged')*/
/*                     ;*/
/* */
/* */
/*                     // top list filters*/
/* */
/*                     $('.table-sonata-list').each(function() {*/
/*                         var filtersThead = $('<thead></thead>');*/
/*                         var filtersTheadTr = $('<tr></tr>');*/
/*                         var titlesThead = $(this).children('thead.title-head');*/
/*                         titlesThead.find('th').each(function() {*/
/*                             var th = $('<th></th>');*/
/*                             if ($(this).is('[data-fieldname]')) {*/
/*                                 th.addClass('sonata-list-field-' + $(this).data('fieldname'));*/
/*                                 var realFilterInputId = 'filter_' + ($(this).data('fieldname').replace('.', '__')) + '_value';*/
/*                                 var realFilterInput = $('#' + realFilterInputId).not('div');*/
/*                                 if (realFilterInput.size()) { // else - filter for this field exist*/
/*                                     var newFilterInput = realFilterInput.clone();*/
/*                                     newFilterInput*/
/*                                             .addClass('fake-filter-input')*/
/*                                             .css('margin', '0')*/
/*                                             .appendTo(th)*/
/*                                     ;*/
/*                                     if (newFilterInput.prop("tagName") == 'select' || newFilterInput.prop("tagName") == 'SELECT') { // init select2*/
/*                                         newFilterInput.addClass('light');*/
/*                                         newFilterInput.select2();*/
/*                                     }*/
/*                                 } else {*/
/*                                     // check for date filters*/
/*                                     var yearFilter = $('#' + realFilterInputId + '_year');*/
/*                                     var monthFilter = $('#' + realFilterInputId + '_month');*/
/*                                     var dayFilter = $('#' + realFilterInputId + '_day');*/
/*                                     if (yearFilter.size() || monthFilter.size() || dayFilter.size()) {*/
/*                                         var date = new Date();*/
/*                                         var dateNotEmpty = false;*/
/*                                         if (yearFilter.size()) {*/
/*                                             if (yearFilter.val()) {*/
/*                                                 date.setYear(yearFilter.val());*/
/*                                                 dateNotEmpty = true;*/
/*                                             }*/
/*                                         }*/
/*                                         if (monthFilter.size()) {*/
/*                                             if (monthFilter.val()) {*/
/*                                                 date.setMonth(monthFilter.val() - 1);*/
/*                                                 dateNotEmpty = true;*/
/*                                             }*/
/*                                         }*/
/*                                         if (dayFilter.size()) {*/
/*                                             if (dayFilter.val()) {*/
/*                                                 date.setDate(dayFilter.val());*/
/*                                                 dateNotEmpty = true;*/
/*                                             }*/
/*                                         }*/
/*                                         var dateInput = $('<input type="text" class="datepicker"/>');*/
/* */
/*                                         var m_names = new Array("january", "february", "march",*/
/*                                                 "april", "may", "june", "july", "august", "september",*/
/*                                                 "october", "november", "december");*/
/*                                         var dateString = date.getDate() + ' ' + m_names[date.getMonth()] + ', ' + date.getFullYear();*/
/* */
/*                                         // hack for datepicker (smth overrides it)*/
/*                                         setTimeout(function() {*/
/*                                             if (dateNotEmpty) {*/
/*                                                 dateInput.val(dateString);*/
/*                                             }*/
/*                                         }, 1000);*/
/* */
/*                                         dateInput*/
/*                                             //.val(dateString)*/
/*                                             //.trigger('change')*/
/*                                                 .datepicker( "option", "dateFormat", "M d, yy" )*/
/*                                                 .datepicker('setDate', date)*/
/*                                                 .addClass('fake-filter-input')*/
/*                                                 .css('margin', '0')*/
/*                                                 .data('real-inpit-id', realFilterInputId)*/
/*                                                 .appendTo(th)*/
/*                                         ;*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                             th.appendTo(filtersTheadTr);*/
/*                         });*/
/*                         filtersTheadTr.appendTo(filtersThead);*/
/*                         filtersThead.addClass('fake-filters').insertAfter(titlesThead);*/
/* */
/*                         $('.fake-filter-input').on('keypress', function(e) {*/
/*                             if (13 == e.keyCode) { // catch Enter key*/
/*                                 e.preventDefault();*/
/*                             }*/
/*                         });*/
/*                     });*/
/* */
/*                     // search button*/
/* */
/*                     $('.btn-list-search').on('click', function(e) {*/
/*                         var sonataFilterForm = $('form.sonata-filter-form');*/
/* */
/*                         $('.fake-filters').find('input.fake-filter-input, select.fake-filter-input').each(function() {*/
/*                             var fakeFilterName = $(this).attr('name');*/
/*                             var realFilterInput = sonataFilterForm.find('[name="' + fakeFilterName + '"]');*/
/*                             if (realFilterInput.size()) {*/
/*                                 realFilterInput.val($(this).val()).trigger('change');*/
/*                             } else { // try to handle date*/
/*                                 var realInputId = $(this).data('real-inpit-id');*/
/*                                 if (realInputId) {*/
/*                                     if ($(this).val()) {*/
/*                                         var date = $(this).datepicker( "getDate" );*/
/*                                         $('#' + realInputId + '_year').val(date.getFullYear()).trigger('change');*/
/*                                         $('#' + realInputId + '_month').val(date.getMonth() + 1).trigger('change');*/
/*                                         $('#' + realInputId + '_day').val(date.getDate()).trigger('change');*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                         });*/
/*                         sonataFilterForm.off('submit');*/
/*                         sonataFilterForm.trigger('submit');*/
/* */
/* */
/*                         e.preventDefault();*/
/*                     });*/
/* */
/*                     // "reset filters" button*/
/* */
/*                     $('.btn-list-reset').on('click', function(e) {*/
/*                         var resetUrl = $('form.sonata-filter-form button[type="submit"]').next().attr('href');*/
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
/*     {% set batchactions = admin.batchactions %}*/
/*     {% if admin.datagrid.results|length > 0 %}*/
/*         {% if admin.hasRoute('batch') %}*/
/*             <div class="table-scroll" style="overflow: visible;">*/
/*             <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*             <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*         {% endif %}*/
/*         <table class="table table-sonata-list table-bordered table-striped custom-table-2">*/
/*             {% block table_header %}*/
/*                 <thead class="title-head">*/
/*                 <tr>*/
/*                     {% for field_description in admin.list.elements %}*/
/*                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                             <th>*/
/*                                 <input type="checkbox" id="list_batch_checkbox">*/
/*                             </th>*/
/*                         {% elseif field_description.getOption('code') == '_select' %}*/
/*                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                         {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                             {# Action buttons disabled in ajax view! #}*/
/*                         {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                             {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                         {% else %}*/
/*                             {% set sortable = false %}*/
/*                             {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                 {% set sortable             = true %}*/
/*                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                             {% endif %}*/
/* */
/*                             {% spaceless %}*/
/*                                 <th class="sonata-ba-list-field-header-{{ field_description.type}}" class="sonata-list-field-{{ field_description.name }}" data-fieldname="{{ field_description.name }}">*/
/*                                     <span>{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}</span>*/
/*                                     {% if sortable %}<a class="filter-link" href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                         {% if sortable %}</a>{% endif %}*/
/*                                 </th>*/
/*                             {% endspaceless %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*                 </thead>*/
/*             {% endblock %}*/
/* */
/*             {% block table_body %}*/
/*                 <tbody>*/
/*                 {% for object in admin.datagrid.results %}*/
/*                     {#{% if not object.isAvailable %}#}*/
/*                         <tr>*/
/*                             {% include admin.getTemplate('inner_list_row') %}*/
/*                         </tr>*/
/*                     {#{% endif %}#}*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endblock %}*/
/*         </table>*/
/*         {% block table_footer %}*/
/*             <div class="table-filter clearfix">*/
/*                 <div class="pull-left batch-wrap">*/
/*                     <span class="selected-items-count" style="display: inline-block; min-width: 110px;">No items selected</span>*/
/*                     {#<input name="action" type="hidden" value="delete" />#}*/
/*                     {#<input name="action" type="hidden" value="reassign" />#}*/
/*                     <input type="submit" data-ajax-url="{{ app.request.getBaseURL() }}/ajax/leads_list/leadReestablish" value="Reestablish" data-batch="reestablish" class="btn btn-small btn-primary btn-list-reestablish btn-batch">*/
/*                     <input type="submit" data-ajax-url="{{ app.request.getBaseURL() }}/ajax/leads_list/leadDelete" value="Delete Permanently" data-batch="delete_permanently" class="btn btn-small btn-primary btn-list-delete btn-batch">*/
/*                 </div>*/
/* */
/*                 <div class="pull-right">*/
/*                     {% block pager_results %}*/
/*                         Show*/
/*                         <select class="custom-select-to-init light per-page small" id="{{ admin.uniqid }}_per_page">*/
/*                             {% for per_page in admin.getperpageoptions %}*/
/*                                 <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values | merge({'_page': 1, '_per_page': per_page})}) }}">*/
/*                                     {{ per_page }}*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                         per page*/
/*                     {% endblock %}*/
/* */
/*                     {% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="glyphicon glyphicon-export"></i>*/
/*                                 {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                 <span class="caret"></span>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu" style="margin-left: 50px;">*/
/*                                 {% for format in admin.getExportFormats() %}*/
/*                                 <li>*/
/*                                     <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                         <i class="glyphicon glyphicon-download"></i>*/
/*                                         {{ format|upper }}*/
/*                                     </a>*/
/*                                 <li>*/
/*                                     {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% block pager_links %}*/
/*                 {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                     {% include admin.getTemplate('pager_links') %}*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/* */
/*         {% endblock %}*/
/*         {% if admin.hasRoute('batch') %}*/
/*             </form>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% else %}*/
/*         <div class="callout callout-info">*/
/*             {{ 'no_result'|trans({}, 'SonataAdminBundle') }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% block list_footer %}{% endblock %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}*/
/* */
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
/*     <div class="pull-left">*/
/*         <a href="{{ admin.generateUrl('create') }}"><button type="button" class="btn btn-green"><i class="fa fa-plus"></i>Add New {{ admin.getLabel() }}</button></a>*/
/*     </div>*/
/*     <div class="pull-right filter-controls">*/
/*         {% if admin.datagrid.results|length > 0 %}*/
/*             <input type="button" class="btn btn-green btn-list-search" value="Search">*/
/*         {% endif %}*/
/*         <input type="button" class="btn btn-white btn-list-reset" value="Reset Filters">*/
/*     </div>*/
/* {% endblock %}*/
/* */
