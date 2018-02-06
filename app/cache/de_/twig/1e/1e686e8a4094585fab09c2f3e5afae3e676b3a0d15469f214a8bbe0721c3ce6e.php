<?php

/* ZesharCRMCoreBundle:CRUD:lead_opportunity_list.html.twig */
class __TwigTemplate_f68d015f5e1f15400e8a3aa00d104c558bc170878b46d84c733e01b04aa1e73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_list.html.twig", 12);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'reassign' => array($this, 'block_reassign'),
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
        $__internal_dc76691e426674f5df32b51f4ee9208b2d7e117abe0f9b3297b3f44da82d0f14 = $this->env->getExtension("native_profiler");
        $__internal_dc76691e426674f5df32b51f4ee9208b2d7e117abe0f9b3297b3f44da82d0f14->enter($__internal_dc76691e426674f5df32b51f4ee9208b2d7e117abe0f9b3297b3f44da82d0f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:lead_opportunity_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc76691e426674f5df32b51f4ee9208b2d7e117abe0f9b3297b3f44da82d0f14->leave($__internal_dc76691e426674f5df32b51f4ee9208b2d7e117abe0f9b3297b3f44da82d0f14_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf167ebfe30f0255a6eaf36ed8a7862cec46d106705c75833562b06792df7a7a = $this->env->getExtension("native_profiler");
        $__internal_cf167ebfe30f0255a6eaf36ed8a7862cec46d106705c75833562b06792df7a7a->enter($__internal_cf167ebfe30f0255a6eaf36ed8a7862cec46d106705c75833562b06792df7a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/lead_opportunity_list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cf167ebfe30f0255a6eaf36ed8a7862cec46d106705c75833562b06792df7a7a->leave($__internal_cf167ebfe30f0255a6eaf36ed8a7862cec46d106705c75833562b06792df7a7a_prof);

    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_ed2263e212774d81011e1c214009b4e8022f1328fb83ab2e2c583fffae8faef5 = $this->env->getExtension("native_profiler");
        $__internal_ed2263e212774d81011e1c214009b4e8022f1328fb83ab2e2c583fffae8faef5->enter($__internal_ed2263e212774d81011e1c214009b4e8022f1328fb83ab2e2c583fffae8faef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

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
        // line 231
        echo "
    ";
        // line 232
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 233
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 234
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 235
                echo "            <div class=\"table-scroll\" style=\"overflow: visible;\">
            <form action=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 237
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
        ";
            }
            // line 239
            echo "        <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
            ";
            // line 240
            $this->displayBlock('table_header', $context, $blocks);
            // line 276
            echo "
            ";
            // line 277
            $this->displayBlock('table_body', $context, $blocks);
            // line 413
            echo "        </table>
        ";
            // line 414
            $this->displayBlock('table_footer', $context, $blocks);
            // line 473
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 474
                echo "            </form>
            </div>
        ";
            }
            // line 477
            echo "    ";
        } else {
            // line 478
            echo "        <div class=\"callout callout-info\">
            ";
            // line 479
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 482
        echo "
    ";
        // line 483
        $this->displayBlock('list_footer', $context, $blocks);
        // line 484
        echo "
    ";
        // line 485
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


    </div>
    </div>
";
        
        $__internal_ed2263e212774d81011e1c214009b4e8022f1328fb83ab2e2c583fffae8faef5->leave($__internal_ed2263e212774d81011e1c214009b4e8022f1328fb83ab2e2c583fffae8faef5_prof);

    }

    // line 24
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_b1c599a08b478d50947fb3d42ef7377b803a38197c2be208512778d988287258 = $this->env->getExtension("native_profiler");
        $__internal_b1c599a08b478d50947fb3d42ef7377b803a38197c2be208512778d988287258->enter($__internal_b1c599a08b478d50947fb3d42ef7377b803a38197c2be208512778d988287258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        // line 25
        echo "        ";
        if (array_key_exists("pageTitle", $context)) {
            // line 26
            echo "            <script>
                \$(function() {
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
        echo "
        ";
        // line 36
        if (array_key_exists("activityName", $context)) {
            // line 37
            echo "            <script>
                \$(function() {
                    activity_name = \"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["activityName"]) ? $context["activityName"] : $this->getContext($context, "activityName")), "html", null, true);
            echo "\";
                    if(activity_name.length > 0){
                        \$('li.active span').text(activity_name);
                    }
                });
            </script>
        ";
        }
        // line 46
        echo "        <script>
            (function() {

                var _init = function () {

                    // bulk operations checkboxes
                    var allCkeckboxes = \$('input[type=\"checkbox\"]');
                    allCkeckboxes.attr('checked', false);

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

                                        var m_names = new Array(\"Jan\", \"Feb\", \"Mar\",
                                                \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\",
                                                \"Oct\", \"Nov\", \"Dec\");
                                        var dateString = m_names[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();

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
        
        $__internal_b1c599a08b478d50947fb3d42ef7377b803a38197c2be208512778d988287258->leave($__internal_b1c599a08b478d50947fb3d42ef7377b803a38197c2be208512778d988287258_prof);

    }

    // line 240
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_de68ab8912c887bcee825615c2dd23a5dd2ede32b77badcb0923caccf4b51ebe = $this->env->getExtension("native_profiler");
        $__internal_de68ab8912c887bcee825615c2dd23a5dd2ede32b77badcb0923caccf4b51ebe->enter($__internal_de68ab8912c887bcee825615c2dd23a5dd2ede32b77badcb0923caccf4b51ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 241
        echo "                <thead class=\"title-head\">
                <tr>
                    ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 244
            echo "                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 245
                echo "                            <th>
                                <input type=\"checkbox\" id=\"list_batch_checkbox\">
                            </th>
                        ";
            } elseif (($this->getAttribute(            // line 248
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 249
                echo "                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                        ";
            } elseif ((($this->getAttribute(            // line 250
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 251
                echo "                            ";
                // line 252
                echo "                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 253
                echo "                            ";
                // line 254
                echo "                        ";
            } else {
                // line 255
                echo "                            ";
                $context["sortable"] = false;
                // line 256
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 257
                    echo "                                ";
                    $context["sortable"] = true;
                    // line 258
                    echo "                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 259
                    echo "                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 260
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 261
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 262
                    echo "                            ";
                }
                // line 263
                echo "
                            ";
                // line 264
                ob_start();
                // line 265
                echo "                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo "\" class=\"sonata-list-field-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\" data-fieldname=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\">
                                    <span>";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "</span>
                                    ";
                // line 267
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a class=\"filter-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 268
                echo "                                        ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 269
                echo "                                </th>
                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 271
                echo "                        ";
            }
            // line 272
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                </tr>
                </thead>
            ";
        
        $__internal_de68ab8912c887bcee825615c2dd23a5dd2ede32b77badcb0923caccf4b51ebe->leave($__internal_de68ab8912c887bcee825615c2dd23a5dd2ede32b77badcb0923caccf4b51ebe_prof);

    }

    // line 277
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_daf1bb7435ef4bd44db0674f8ece0d38ccf3279c9a81b5bb9df655b8ab3950fe = $this->env->getExtension("native_profiler");
        $__internal_daf1bb7435ef4bd44db0674f8ece0d38ccf3279c9a81b5bb9df655b8ab3950fe->enter($__internal_daf1bb7435ef4bd44db0674f8ece0d38ccf3279c9a81b5bb9df655b8ab3950fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 278
        echo "                <tbody>
                <script>
                    \$(function() {
                        var popupEmailSend = \$(\".popup-window-email\");

                        popupEmailSend.dialog({
                            resizable: false,
                            height: 600,
                            width: 500,
                            autoOpen: false,
                            dialogClass: \"custom-block\",
                            buttons: {
                                \"Send\": function(e) {
                                    block = '.display-block-persistent';
                                    var controller = \$(block).data('controller');
                                    if (!controller) {
                                        console.log('no controller defined');
                                        return;
                                    }
                                    var action = \$(block).data('action');
                                    if (!action) {
                                        console.log('no action defined');
                                        return;
                                    }

                                    //var operation = \$(this).data(''); // in the future

                                    var values = {};

                                    \$(block).find('input, select, textarea, button').each(function () {
                                        var key = \$(this).attr('name');
                                        if (!key) {
                                            key = \$(this).attr('id');
                                        }
                                        if (!key) {
                                            return;
                                        }
                                        if (this.getAttribute('type') == 'radio') {
                                            if (this.hasAttribute('checked')) {
                                                values[key] = \$(this).val();
                                            }
                                        } else if (key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox') {

                                            if (!values[key]) {
                                                values[key] = [];
                                            }

                                            if (\$(this).prop('checked')) {

                                                values[key].push(\$(this).val());
                                            }
                                        } else {
                                            if (\$(this).hasClass('btn-green-border')) {
                                                if (\$(this).hasClass('checkButton')) {
                                                    values[key] = \$(this).val();
                                                }
                                            } else {
                                                values[key] = \$(this).val();
                                            }
                                        }
                                    });

                                    // allow validation
                                    var params = {values: values, isValid: true};
                                    \$(this).trigger('block-data-validate', [params]);
                                    if (!params.isValid) {
                                        console.log('validation error');
                                        return;
                                    }

                                    var ajaxUrl = \"";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/\" + controller + \"/\" + action;
                                    var routList = \"";
        // line 349
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\";

                                    console.log('sending ajax to ' + ajaxUrl);
                                    console.log(values);

                                    \$.ajax(ajaxUrl, {
                                        'data': values,
                                        'type': 'POST',
                                        'success': function (response) {
                                            console.log('ajax success');

                                            if (response.redirect) {
                                                window.location.href = routList;
                                            } else {
                                                if (\"";
        // line 363
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" != \"admin_zesharcrm_core_lead_create\") {
                                                    \$(block).trigger('block-ajax-return', [response]);
                                                }
                                            }
                                            \$(block).find('input[type=\"text\"]').val('');
                                            \$(block).find('textarea').val('');
                                            \$('div[id ^= \"ui-id-\"]').dialog(\"close\");
                                        },
                                        'error': function (error) {
                                            console.log('ajax error');
                                            console.log(error);
                                            //alert('A error occured while AJAX request.');
                                        }
                                    });

                                    e.preventDefault();
                                },
                                \"Cancel\": function () {
                                    \$(this).dialog(\"close\");
                                }
                            },
                            create: function() {
                                console.log('create action');
                                \$('.ui-dialog-titlebar-close').remove();
                                \$(this).closest(\".ui-dialog\")
                                        .find(\".ui-dialog-buttonset button\").each(function() {
                                            \$(this).addClass(\"btn-save-block btn btn-green\");
                                        }); // the first button

                            }
                        });

                        \$('.email-tab').on('click', 'a.send-email', function() {
                            var objectId = \$(this).parent().parent().attr('objectid');
                            \$('.popup-window-email').find('#lead_id').val(objectId);
                            \$('.popup-window-email').find('#email_to').val(\$(this).html());
                            popupEmailSend.dialog('open');
                            return false;
                        });

                    });
                </script>
                ";
        // line 405
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_email.html.twig");
        echo "
                ";
        // line 406
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
            // line 407
            echo "                    <tr>
                        ";
            // line 408
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle:CRUD:lead_opportunity_list.html.twig", 408)->display($context);
            // line 409
            echo "                    </tr>
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
        // line 411
        echo "                </tbody>
            ";
        
        $__internal_daf1bb7435ef4bd44db0674f8ece0d38ccf3279c9a81b5bb9df655b8ab3950fe->leave($__internal_daf1bb7435ef4bd44db0674f8ece0d38ccf3279c9a81b5bb9df655b8ab3950fe_prof);

    }

    // line 414
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_994c2fc52479cd8c6f89947cfc92f35d230c693cab76fb1e2a8a69a49df265ac = $this->env->getExtension("native_profiler");
        $__internal_994c2fc52479cd8c6f89947cfc92f35d230c693cab76fb1e2a8a69a49df265ac->enter($__internal_994c2fc52479cd8c6f89947cfc92f35d230c693cab76fb1e2a8a69a49df265ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 415
        echo "            <div class=\"table-filter clearfix\">
                <div class=\"pull-left batch-wrap\">
                    <span class=\"selected-items-count\" style=\"display: inline-block; min-width: 110px;\">No items selected</span>
                    ";
        // line 419
        echo "                    ";
        // line 420
        echo "                    <input type=\"submit\" data-ajax-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_list/leadDelete\" value=\"Delete\" data-batch=\"delete\" class=\"btn btn-small btn-primary btn-list-delete btn-batch\">
                    <div class=\"reassign-block\">
                        ";
        // line 422
        $this->displayBlock('reassign', $context, $blocks);
        // line 428
        echo "                    </div>
                </div>

                <div class=\"pull-right\">
                    ";
        // line 432
        $this->displayBlock('pager_results', $context, $blocks);
        // line 443
        echo "
                    ";
        // line 444
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
            // line 445
            echo "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-export\"></i>
                                ";
            // line 448
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" style=\"margin-left: 50px;\">
                                ";
            // line 452
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 453
                echo "                                <li>
                                    <a href=\"";
                // line 454
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-download\"></i>
                                        ";
                // line 456
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                echo "
                                    </a>
                                <li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 460
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 463
        echo "                </div>
            </div>

            ";
        // line 466
        $this->displayBlock('pager_links', $context, $blocks);
        // line 471
        echo "
        ";
        
        $__internal_994c2fc52479cd8c6f89947cfc92f35d230c693cab76fb1e2a8a69a49df265ac->leave($__internal_994c2fc52479cd8c6f89947cfc92f35d230c693cab76fb1e2a8a69a49df265ac_prof);

    }

    // line 422
    public function block_reassign($context, array $blocks = array())
    {
        $__internal_1813f779c661db9edd97b0550ea725ae64b1b94a45181fcef2645a26858b522b = $this->env->getExtension("native_profiler");
        $__internal_1813f779c661db9edd97b0550ea725ae64b1b94a45181fcef2645a26858b522b->enter($__internal_1813f779c661db9edd97b0550ea725ae64b1b94a45181fcef2645a26858b522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reassign"));

        // line 423
        echo "                            Reassign to:
                            ";
        // line 424
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect"));
        echo "
                            ";
        // line 425
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadCampaignSelect", array("emptyOptionTitle" => "- Select Activity -")));
        echo "
                            <input type=\"submit\" data-ajax-url=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_list/leadReassign\" value=\"Reassign\" data-batch=\"reassign\" class=\"btn btn-small btn-primary btn-list-reassign btn-batch\">
                        ";
        
        $__internal_1813f779c661db9edd97b0550ea725ae64b1b94a45181fcef2645a26858b522b->leave($__internal_1813f779c661db9edd97b0550ea725ae64b1b94a45181fcef2645a26858b522b_prof);

    }

    // line 432
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_904ec4cd8aa44d9cffb33834deea9863a6acc7d9ed1c83d7af61eb3265a59149 = $this->env->getExtension("native_profiler");
        $__internal_904ec4cd8aa44d9cffb33834deea9863a6acc7d9ed1c83d7af61eb3265a59149->enter($__internal_904ec4cd8aa44d9cffb33834deea9863a6acc7d9ed1c83d7af61eb3265a59149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 433
        echo "                        Show
                        <select class=\"custom-select-to-init light per-page small\" id=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">
                            ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 436
            echo "                                <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                                    ";
            // line 437
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "                        </select>
                        per page
                    ";
        
        $__internal_904ec4cd8aa44d9cffb33834deea9863a6acc7d9ed1c83d7af61eb3265a59149->leave($__internal_904ec4cd8aa44d9cffb33834deea9863a6acc7d9ed1c83d7af61eb3265a59149_prof);

    }

    // line 466
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_a1bc0e23a2841ca0db4553b432e3bbbe59474ba81fab2fc79969053d8b44addf = $this->env->getExtension("native_profiler");
        $__internal_a1bc0e23a2841ca0db4553b432e3bbbe59474ba81fab2fc79969053d8b44addf->enter($__internal_a1bc0e23a2841ca0db4553b432e3bbbe59474ba81fab2fc79969053d8b44addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 467
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 468
            echo "                    ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:lead_opportunity_list.html.twig", 468)->display($context);
            // line 469
            echo "                ";
        }
        // line 470
        echo "            ";
        
        $__internal_a1bc0e23a2841ca0db4553b432e3bbbe59474ba81fab2fc79969053d8b44addf->leave($__internal_a1bc0e23a2841ca0db4553b432e3bbbe59474ba81fab2fc79969053d8b44addf_prof);

    }

    // line 483
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_b4dd6d9bf639a7f820ba7c99312ea5486559ae5ce858694e85231b2ca68ce2de = $this->env->getExtension("native_profiler");
        $__internal_b4dd6d9bf639a7f820ba7c99312ea5486559ae5ce858694e85231b2ca68ce2de->enter($__internal_b4dd6d9bf639a7f820ba7c99312ea5486559ae5ce858694e85231b2ca68ce2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_b4dd6d9bf639a7f820ba7c99312ea5486559ae5ce858694e85231b2ca68ce2de->leave($__internal_b4dd6d9bf639a7f820ba7c99312ea5486559ae5ce858694e85231b2ca68ce2de_prof);

    }

    // line 492
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        $__internal_1c68948017589f5690aebd48ad3e0e746a4ea21c64c5eb0746461dbcae90c8db = $this->env->getExtension("native_profiler");
        $__internal_1c68948017589f5690aebd48ad3e0e746a4ea21c64c5eb0746461dbcae90c8db->enter($__internal_1c68948017589f5690aebd48ad3e0e746a4ea21c64c5eb0746461dbcae90c8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_right_column"));

        // line 493
        echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
";
        
        $__internal_1c68948017589f5690aebd48ad3e0e746a4ea21c64c5eb0746461dbcae90c8db->leave($__internal_1c68948017589f5690aebd48ad3e0e746a4ea21c64c5eb0746461dbcae90c8db_prof);

    }

    // line 498
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        $__internal_970c6027b6b542d6d131cac247a4023e759c38e6ff84f7253afe5bc1524a8096 = $this->env->getExtension("native_profiler");
        $__internal_970c6027b6b542d6d131cac247a4023e759c38e6ff84f7253afe5bc1524a8096->enter($__internal_970c6027b6b542d6d131cac247a4023e759c38e6ff84f7253afe5bc1524a8096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_right_column"));

        // line 499
        echo "    <div id=\"collapse-block\" class=\"right-column\">
        <div class=\"widget-wrap\">
            ";
        // line 501
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
        echo "
        </div>
    </div>
";
        
        $__internal_970c6027b6b542d6d131cac247a4023e759c38e6ff84f7253afe5bc1524a8096->leave($__internal_970c6027b6b542d6d131cac247a4023e759c38e6ff84f7253afe5bc1524a8096_prof);

    }

    // line 506
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        $__internal_f034c83d4356402365626f55b875d1f63484379f4ddd22b38b1a52385cb739aa = $this->env->getExtension("native_profiler");
        $__internal_f034c83d4356402365626f55b875d1f63484379f4ddd22b38b1a52385cb739aa->enter($__internal_f034c83d4356402365626f55b875d1f63484379f4ddd22b38b1a52385cb739aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_left_column"));

        // line 507
        echo "    <div class=\"pull-left\">
        <a href=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo "</button></a>
    </div>
    <div class=\"pull-right filter-controls\">
        ";
        // line 511
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 512
            echo "            <input type=\"button\" class=\"btn btn-green btn-list-search\" value=\"Search\">
        ";
        }
        // line 514
        echo "        <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
    </div>
";
        
        $__internal_f034c83d4356402365626f55b875d1f63484379f4ddd22b38b1a52385cb739aa->leave($__internal_f034c83d4356402365626f55b875d1f63484379f4ddd22b38b1a52385cb739aa_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:lead_opportunity_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 514,  949 => 512,  947 => 511,  939 => 508,  936 => 507,  930 => 506,  919 => 501,  915 => 499,  909 => 498,  899 => 493,  893 => 492,  882 => 483,  875 => 470,  872 => 469,  869 => 468,  866 => 467,  860 => 466,  851 => 440,  842 => 437,  833 => 436,  829 => 435,  825 => 434,  822 => 433,  816 => 432,  807 => 426,  803 => 425,  799 => 424,  796 => 423,  790 => 422,  782 => 471,  780 => 466,  775 => 463,  770 => 460,  760 => 456,  755 => 454,  752 => 453,  748 => 452,  741 => 448,  736 => 445,  734 => 444,  731 => 443,  729 => 432,  723 => 428,  721 => 422,  715 => 420,  713 => 419,  708 => 415,  702 => 414,  694 => 411,  679 => 409,  677 => 408,  674 => 407,  657 => 406,  653 => 405,  608 => 363,  591 => 349,  587 => 348,  515 => 278,  509 => 277,  500 => 273,  494 => 272,  491 => 271,  487 => 269,  482 => 268,  476 => 267,  472 => 266,  463 => 265,  461 => 264,  458 => 263,  455 => 262,  452 => 261,  449 => 260,  446 => 259,  443 => 258,  440 => 257,  437 => 256,  434 => 255,  431 => 254,  429 => 253,  426 => 252,  424 => 251,  422 => 250,  419 => 249,  417 => 248,  412 => 245,  409 => 244,  405 => 243,  401 => 241,  395 => 240,  204 => 46,  194 => 39,  190 => 37,  188 => 36,  185 => 35,  175 => 28,  171 => 26,  168 => 25,  162 => 24,  149 => 485,  146 => 484,  144 => 483,  141 => 482,  135 => 479,  132 => 478,  129 => 477,  124 => 474,  121 => 473,  119 => 414,  116 => 413,  114 => 277,  111 => 276,  109 => 240,  106 => 239,  101 => 237,  97 => 236,  94 => 235,  91 => 234,  88 => 233,  86 => 232,  83 => 231,  81 => 24,  76 => 22,  72 => 20,  66 => 19,  57 => 16,  52 => 15,  46 => 14,  11 => 12,);
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
/*             <script>*/
/*                 $(function() {*/
/*                     page_title = "{{ pageTitle }}";*/
/*                     if(page_title.length > 0){*/
/*                         document.title = page_title;*/
/*                     }*/
/*                 });*/
/*             </script>*/
/*         {% endif %}*/
/* */
/*         {% if activityName is defined %}*/
/*             <script>*/
/*                 $(function() {*/
/*                     activity_name = "{{ activityName }}";*/
/*                     if(activity_name.length > 0){*/
/*                         $('li.active span').text(activity_name);*/
/*                     }*/
/*                 });*/
/*             </script>*/
/*         {% endif %}*/
/*         <script>*/
/*             (function() {*/
/* */
/*                 var _init = function () {*/
/* */
/*                     // bulk operations checkboxes*/
/*                     var allCkeckboxes = $('input[type="checkbox"]');*/
/*                     allCkeckboxes.attr('checked', false);*/
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
/*                                         var m_names = new Array("Jan", "Feb", "Mar",*/
/*                                                 "Apr", "May", "Jun", "Jul", "Aug", "Sep",*/
/*                                                 "Oct", "Nov", "Dec");*/
/*                                         var dateString = m_names[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();*/
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
/*                 <script>*/
/*                     $(function() {*/
/*                         var popupEmailSend = $(".popup-window-email");*/
/* */
/*                         popupEmailSend.dialog({*/
/*                             resizable: false,*/
/*                             height: 600,*/
/*                             width: 500,*/
/*                             autoOpen: false,*/
/*                             dialogClass: "custom-block",*/
/*                             buttons: {*/
/*                                 "Send": function(e) {*/
/*                                     block = '.display-block-persistent';*/
/*                                     var controller = $(block).data('controller');*/
/*                                     if (!controller) {*/
/*                                         console.log('no controller defined');*/
/*                                         return;*/
/*                                     }*/
/*                                     var action = $(block).data('action');*/
/*                                     if (!action) {*/
/*                                         console.log('no action defined');*/
/*                                         return;*/
/*                                     }*/
/* */
/*                                     //var operation = $(this).data(''); // in the future*/
/* */
/*                                     var values = {};*/
/* */
/*                                     $(block).find('input, select, textarea, button').each(function () {*/
/*                                         var key = $(this).attr('name');*/
/*                                         if (!key) {*/
/*                                             key = $(this).attr('id');*/
/*                                         }*/
/*                                         if (!key) {*/
/*                                             return;*/
/*                                         }*/
/*                                         if (this.getAttribute('type') == 'radio') {*/
/*                                             if (this.hasAttribute('checked')) {*/
/*                                                 values[key] = $(this).val();*/
/*                                             }*/
/*                                         } else if (key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox') {*/
/* */
/*                                             if (!values[key]) {*/
/*                                                 values[key] = [];*/
/*                                             }*/
/* */
/*                                             if ($(this).prop('checked')) {*/
/* */
/*                                                 values[key].push($(this).val());*/
/*                                             }*/
/*                                         } else {*/
/*                                             if ($(this).hasClass('btn-green-border')) {*/
/*                                                 if ($(this).hasClass('checkButton')) {*/
/*                                                     values[key] = $(this).val();*/
/*                                                 }*/
/*                                             } else {*/
/*                                                 values[key] = $(this).val();*/
/*                                             }*/
/*                                         }*/
/*                                     });*/
/* */
/*                                     // allow validation*/
/*                                     var params = {values: values, isValid: true};*/
/*                                     $(this).trigger('block-data-validate', [params]);*/
/*                                     if (!params.isValid) {*/
/*                                         console.log('validation error');*/
/*                                         return;*/
/*                                     }*/
/* */
/*                                     var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/" + controller + "/" + action;*/
/*                                     var routList = "{{ admin.generateUrl('list') }}";*/
/* */
/*                                     console.log('sending ajax to ' + ajaxUrl);*/
/*                                     console.log(values);*/
/* */
/*                                     $.ajax(ajaxUrl, {*/
/*                                         'data': values,*/
/*                                         'type': 'POST',*/
/*                                         'success': function (response) {*/
/*                                             console.log('ajax success');*/
/* */
/*                                             if (response.redirect) {*/
/*                                                 window.location.href = routList;*/
/*                                             } else {*/
/*                                                 if ("{{ app.request.attributes.get('_route') }}" != "admin_zesharcrm_core_lead_create") {*/
/*                                                     $(block).trigger('block-ajax-return', [response]);*/
/*                                                 }*/
/*                                             }*/
/*                                             $(block).find('input[type="text"]').val('');*/
/*                                             $(block).find('textarea').val('');*/
/*                                             $('div[id ^= "ui-id-"]').dialog("close");*/
/*                                         },*/
/*                                         'error': function (error) {*/
/*                                             console.log('ajax error');*/
/*                                             console.log(error);*/
/*                                             //alert('A error occured while AJAX request.');*/
/*                                         }*/
/*                                     });*/
/* */
/*                                     e.preventDefault();*/
/*                                 },*/
/*                                 "Cancel": function () {*/
/*                                     $(this).dialog("close");*/
/*                                 }*/
/*                             },*/
/*                             create: function() {*/
/*                                 console.log('create action');*/
/*                                 $('.ui-dialog-titlebar-close').remove();*/
/*                                 $(this).closest(".ui-dialog")*/
/*                                         .find(".ui-dialog-buttonset button").each(function() {*/
/*                                             $(this).addClass("btn-save-block btn btn-green");*/
/*                                         }); // the first button*/
/* */
/*                             }*/
/*                         });*/
/* */
/*                         $('.email-tab').on('click', 'a.send-email', function() {*/
/*                             var objectId = $(this).parent().parent().attr('objectid');*/
/*                             $('.popup-window-email').find('#lead_id').val(objectId);*/
/*                             $('.popup-window-email').find('#email_to').val($(this).html());*/
/*                             popupEmailSend.dialog('open');*/
/*                             return false;*/
/*                         });*/
/* */
/*                     });*/
/*                 </script>*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_email.html.twig') }}*/
/*                 {% for object in admin.datagrid.results %}*/
/*                     <tr>*/
/*                         {% include admin.getTemplate('inner_list_row') %}*/
/*                     </tr>*/
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
/*                     <input type="submit" data-ajax-url="{{ app.request.getBaseURL() }}/ajax/leads_list/leadDelete" value="Delete" data-batch="delete" class="btn btn-small btn-primary btn-list-delete btn-batch">*/
/*                     <div class="reassign-block">*/
/*                         {% block reassign %}*/
/*                             Reassign to:*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:assigneeSelect')) }}*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:leadCampaignSelect', { 'emptyOptionTitle': '- Select Activity -' })) }}*/
/*                             <input type="submit" data-ajax-url="{{ app.request.getBaseURL() }}/ajax/leads_list/leadReassign" value="Reassign" data-batch="reassign" class="btn btn-small btn-primary btn-list-reassign btn-batch">*/
/*                         {% endblock %}*/
/*                     </div>*/
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
