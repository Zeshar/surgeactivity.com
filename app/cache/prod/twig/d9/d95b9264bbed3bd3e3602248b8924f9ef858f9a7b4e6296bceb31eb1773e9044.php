<?php

/* ZesharCRMCoreBundle:CRUD:activity_list.html.twig */
class __TwigTemplate_4c5c3b9930af24e424a532788732bebbc2247b5dc692f3487e070934f38fd510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list.html.twig", "ZesharCRMCoreBundle:CRUD:activity_list.html.twig", 12);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/activity_list.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"box box-primary\">
    <div class=\"box-body table-responsive no-padding\">
    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

    ";
        // line 24
        $this->displayBlock('list_header', $context, $blocks);
        // line 209
        echo "

    ";
        // line 211
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", array());
        // line 212
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            // line 213
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 214
                echo "            <div class=\"table-scroll\" style=\"overflow: visible;\">
            <form action=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\">
        ";
            }
            // line 218
            echo "        <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
            ";
            // line 219
            $this->displayBlock('table_header', $context, $blocks);
            // line 261
            echo "
            ";
            // line 262
            $this->displayBlock('table_body', $context, $blocks);
            // line 272
            echo "        </table>

            ";
            // line 274
            $this->displayBlock('table_footer', $context, $blocks);
            // line 334
            echo "

        ";
            // line 336
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 337
                echo "            </form>
            </div>
        ";
            }
            // line 340
            echo "    ";
        } else {
            // line 341
            echo "        <div class=\"callout callout-info\">
            ";
            // line 342
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 345
        echo "
    ";
        // line 346
        $this->displayBlock('list_footer', $context, $blocks);
        // line 347
        echo "
    ";
        // line 348
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
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
    }

    // line 219
    public function block_table_header($context, array $blocks = array())
    {
        // line 220
        echo "                <thead class=\"title-head\">
                <tr>
                    ";
        // line 222
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "baseRoutePattern", array()) == "expiredactivity")) {
            // line 223
            echo "                        <th>
                            <input type=\"checkbox\" id=\"list_batch_checkbox\">
                        </th>
                    ";
        }
        // line 227
        echo "
                    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 229
            echo "                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 230
                echo "                            <th>
                                <input type=\"checkbox\" id=\"list_batch_checkbox\">
                            </th>
                        ";
            } elseif (($this->getAttribute(            // line 233
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 234
                echo "                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                        ";
            } elseif ((($this->getAttribute(            // line 235
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 236
                echo "                            ";
                // line 237
                echo "                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 238
                echo "                            ";
                // line 239
                echo "                        ";
            } else {
                // line 240
                echo "                            ";
                $context["sortable"] = false;
                // line 241
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 242
                    echo "                                ";
                    $context["sortable"] = true;
                    // line 243
                    echo "                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array())), "method");
                    // line 244
                    echo "                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter", array()), "_sort_by", array())));
                    // line 245
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 246
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 247
                    echo "                            ";
                }
                // line 248
                echo "
                            ";
                // line 249
                ob_start();
                // line 250
                echo "                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo "\" class=\"sonata-list-field-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\" data-fieldname=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\">
                                    <span>";
                // line 251
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "</span>
                                    ";
                // line 252
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a class=\"filter-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 253
                echo "                                        ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 254
                echo "                                </th>
                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 256
                echo "                        ";
            }
            // line 257
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                </tr>
                </thead>
            ";
    }

    // line 262
    public function block_table_body($context, array $blocks = array())
    {
        // line 263
        echo "                <tbody>
                ";
        // line 264
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
            // line 265
            echo "                    <tr>
                        ";
            // line 267
            echo "                        ";
            $this->loadTemplate("ZesharCRMCoreBundle:ActivityCRUD:list_inner_row.html.twig", "ZesharCRMCoreBundle:CRUD:activity_list.html.twig", 267)->display($context);
            // line 268
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
        // line 270
        echo "                </tbody>
            ";
    }

    // line 274
    public function block_table_footer($context, array $blocks = array())
    {
        // line 275
        echo "                <div class=\"table-filter clearfix\">
                    <div class=\"pull-left batch-wrap\">
                        <span class=\"selected-items-count\" style=\"display: inline-block; min-width: 110px;\">No items selected</span>
                        ";
        // line 279
        echo "                        ";
        // line 280
        echo "                        <input type=\"submit\" value=\"Delete\" data-batch=\"delete\" data-ajax-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/activity_list/activitiesDelete\" class=\"btn btn-small btn-primary btn-list-delete btn-batch\">
                        ";
        // line 281
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "baseRoutePattern", array()) != "expiredactivity")) {
            // line 282
            echo "                            <div class=\"reassign-block\">
                                ";
            // line 283
            $this->displayBlock('reassign', $context, $blocks);
            // line 288
            echo "                            </div>
                        ";
        }
        // line 290
        echo "                    </div>

                    <div class=\"pull-right\">
                        ";
        // line 293
        $this->displayBlock('pager_results', $context, $blocks);
        // line 304
        echo "
                        ";
        // line 306
        echo "                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"glyphicon glyphicon-export\"></i>
                                    ";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                    <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\" style=\"margin-left: 50px;\">
                                    ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 314
            echo "                                    <li>
                                        <a href=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_expiredactivity_export", array("format" => $context["format"], "" => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => 0), "method"))), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-download\"></i>
                                            ";
            // line 317
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
            echo "
                                        </a>
                                    <li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                                </ul>
                            </div>
                        ";
        // line 324
        echo "                    </div>
                </div>

                ";
        // line 327
        $this->displayBlock('pager_links', $context, $blocks);
        // line 332
        echo "
            ";
    }

    // line 283
    public function block_reassign($context, array $blocks = array())
    {
        // line 284
        echo "                                    Reassign to:
                                    ";
        // line 285
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect"));
        echo "
                                    <input type=\"submit\" data-ajax-url=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/activity_list/activityReassign\" value=\"Reassign\" data-batch=\"reassign\" class=\"btn btn-small btn-primary btn-list-reassign btn-batch\">
                                ";
    }

    // line 293
    public function block_pager_results($context, array $blocks = array())
    {
        // line 294
        echo "                            Show
                            <select class=\"custom-select-to-init light per-page small\" id=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
        echo "_per_page\">
                                ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 297
            echo "                                    <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 298
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                            </select>
                            per page
                        ";
    }

    // line 327
    public function block_pager_links($context, array $blocks = array())
    {
        // line 328
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 329
            echo "                        ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:activity_list.html.twig", 329)->display($context);
            // line 330
            echo "                    ";
        }
        // line 331
        echo "                ";
    }

    // line 346
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 355
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        // line 356
        echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
";
    }

    // line 361
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        // line 362
        echo "    <div id=\"collapse-block\" class=\"right-column\">
        <div class=\"widget-wrap\">
            ";
        // line 364
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
        echo "
        </div>
    </div>
";
    }

    // line 369
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        // line 370
        echo "    <div class=\"pull-left\">
        ";
        // line 371
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method")) {
            // line 372
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method"), "html", null, true);
            echo "</button></a>
        ";
        }
        // line 374
        echo "    </div>
    <div class=\"pull-right filter-controls\">
        ";
        // line 376
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            // line 377
            echo "            <input type=\"button\" class=\"btn btn-green btn-list-search\" value=\"Search\">
        ";
        }
        // line 379
        echo "        <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:activity_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 379,  715 => 377,  713 => 376,  709 => 374,  701 => 372,  699 => 371,  696 => 370,  693 => 369,  685 => 364,  681 => 362,  678 => 361,  671 => 356,  668 => 355,  663 => 346,  659 => 331,  656 => 330,  653 => 329,  650 => 328,  647 => 327,  641 => 301,  632 => 298,  623 => 297,  619 => 296,  615 => 295,  612 => 294,  609 => 293,  603 => 286,  599 => 285,  596 => 284,  593 => 283,  588 => 332,  586 => 327,  581 => 324,  577 => 321,  567 => 317,  562 => 315,  559 => 314,  555 => 313,  548 => 309,  543 => 306,  540 => 304,  538 => 293,  533 => 290,  529 => 288,  527 => 283,  524 => 282,  522 => 281,  517 => 280,  515 => 279,  510 => 275,  507 => 274,  502 => 270,  487 => 268,  484 => 267,  481 => 265,  464 => 264,  461 => 263,  458 => 262,  452 => 258,  446 => 257,  443 => 256,  439 => 254,  434 => 253,  428 => 252,  424 => 251,  415 => 250,  413 => 249,  410 => 248,  407 => 247,  404 => 246,  401 => 245,  398 => 244,  395 => 243,  392 => 242,  389 => 241,  386 => 240,  383 => 239,  381 => 238,  378 => 237,  376 => 236,  374 => 235,  371 => 234,  369 => 233,  364 => 230,  361 => 229,  357 => 228,  354 => 227,  348 => 223,  346 => 222,  342 => 220,  339 => 219,  152 => 25,  149 => 24,  139 => 348,  136 => 347,  134 => 346,  131 => 345,  125 => 342,  122 => 341,  119 => 340,  114 => 337,  112 => 336,  108 => 334,  106 => 274,  102 => 272,  100 => 262,  97 => 261,  95 => 219,  92 => 218,  87 => 216,  83 => 215,  80 => 214,  77 => 213,  74 => 212,  72 => 211,  68 => 209,  66 => 24,  61 => 22,  57 => 20,  54 => 19,  48 => 16,  43 => 15,  40 => 14,  11 => 12,);
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
/*     <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/activity_list.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="box box-primary">*/
/*     <div class="box-body table-responsive no-padding">*/
/*     {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*     {% block list_header %}*/
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
/*                     {%  if admin.baseRoutePattern == 'expiredactivity' %}*/
/*                         <th>*/
/*                             <input type="checkbox" id="list_batch_checkbox">*/
/*                         </th>*/
/*                     {% endif %}*/
/* */
/*                     {% for field_description in admin.list.elements %}*/
/*                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0%}*/
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
/*                     <tr>*/
/*                         {#{% include admin.getTemplate('inner_list_row') %}#}*/
/*                         {% include 'ZesharCRMCoreBundle:ActivityCRUD:list_inner_row.html.twig' %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endblock %}*/
/*         </table>*/
/* */
/*             {% block table_footer %}*/
/*                 <div class="table-filter clearfix">*/
/*                     <div class="pull-left batch-wrap">*/
/*                         <span class="selected-items-count" style="display: inline-block; min-width: 110px;">No items selected</span>*/
/*                         {#<input name="action" type="hidden" value="delete" />#}*/
/*                         {#<input name="action" type="hidden" value="reassign" />#}*/
/*                         <input type="submit" value="Delete" data-batch="delete" data-ajax-url="{{ app.request.getBaseURL() }}/ajax/activity_list/activitiesDelete" class="btn btn-small btn-primary btn-list-delete btn-batch">*/
/*                         {% if admin.baseRoutePattern != 'expiredactivity' %}*/
/*                             <div class="reassign-block">*/
/*                                 {% block reassign %}*/
/*                                     Reassign to:*/
/*                                     {{ render(controller('ZesharCRMCoreBundle:FormItems:assigneeSelect')) }}*/
/*                                     <input type="submit" data-ajax-url="{{ app.request.getBaseURL() }}/ajax/activity_list/activityReassign" value="Reassign" data-batch="reassign" class="btn btn-small btn-primary btn-list-reassign btn-batch">*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <div class="pull-right">*/
/*                         {% block pager_results %}*/
/*                             Show*/
/*                             <select class="custom-select-to-init light per-page small" id="{{ admin.uniqid }}_per_page">*/
/*                                 {% for per_page in admin.getperpageoptions %}*/
/*                                     <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values | merge({'_page': 1, '_per_page': per_page})}) }}">*/
/*                                         {{ per_page }}*/
/*                                     </option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                             per page*/
/*                         {% endblock %}*/
/* */
/*                         {#{% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}#}*/
/*                             <div class="btn-group">*/
/*                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="glyphicon glyphicon-export"></i>*/
/*                                     {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                     <span class="caret"></span>*/
/*                                 </button>*/
/*                                 <ul class="dropdown-menu" style="margin-left: 50px;">*/
/*                                     {% for format in admin.getExportFormats() %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('admin_expiredactivity_export', {'format': format, '':admin.modelmanager.paginationparameters(admin.datagrid, 0)}) }}">*/
/*                                             <i class="glyphicon glyphicon-download"></i>*/
/*                                             {{ format|upper }}*/
/*                                         </a>*/
/*                                     <li>*/
/*                                         {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {#{% endif %}#}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {% block pager_links %}*/
/*                     {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                         {% include admin.getTemplate('pager_links') %}*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/* */
/*             {% endblock %}*/
/* */
/* */
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
/*         {% if admin.hasRoute('create') %}*/
/*             <a href="{{ admin.generateUrl('create') }}"><button type="button" class="btn btn-green"><i class="fa fa-plus"></i>Add New {{ admin.getLabel() }}</button></a>*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="pull-right filter-controls">*/
/*         {% if admin.datagrid.results|length > 0 %}*/
/*             <input type="button" class="btn btn-green btn-list-search" value="Search">*/
/*         {% endif %}*/
/*         <input type="button" class="btn btn-white btn-list-reset" value="Reset Filters">*/
/*     </div>*/
/* {% endblock %}*/
/* */
