<?php

/* ZesharCRMCoreBundle::sonata_list.html.twig */
class __TwigTemplate_c8bbe8aa493ea3ed56beb6cc832fa65f2fa7e3bd4471a6605f1a97119f903059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list.html.twig", "ZesharCRMCoreBundle::sonata_list.html.twig", 12);
        $this->blocks = array(
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list_table($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

            ";
        // line 19
        $this->displayBlock('list_header', $context, $blocks);
        // line 205
        echo "
            ";
        // line 206
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", array());
        // line 207
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            // line 208
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 209
                echo "                <div class=\"table-scroll\" style=\"overflow: visible;\">
                    <form action=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                        <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 211
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\">
                    ";
            }
            // line 213
            echo "                        <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
                            ";
            // line 214
            $this->displayBlock('table_header', $context, $blocks);
            // line 250
            echo "
                            ";
            // line 251
            $this->displayBlock('table_body', $context, $blocks);
            // line 260
            echo "                        </table>
                        ";
            // line 261
            $this->displayBlock('table_footer', $context, $blocks);
            // line 316
            echo "                    ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 317
                echo "                    </form>
                </div>
                ";
            }
            // line 320
            echo "            ";
        } else {
            // line 321
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 322
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 325
        echo "
            ";
        // line 326
        $this->displayBlock('list_footer', $context, $blocks);
        // line 327
        echo "
            ";
        // line 328
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "


        </div>
    </div>
";
    }

    // line 19
    public function block_list_header($context, array $blocks = array())
    {
        // line 20
        echo "                <script>
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

                        \$('.datepicker').datepicker();

                    };
                    \$(document).ready(setTimeout(_init, 30));
                    })();
                </script>
            ";
    }

    // line 214
    public function block_table_header($context, array $blocks = array())
    {
        // line 215
        echo "                                <thead class=\"title-head\">
                                    <tr>
                                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 218
            echo "                                            ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 219
                echo "                                                <th>
                                                  <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                                </th>
                                            ";
            } elseif (($this->getAttribute(            // line 222
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 223
                echo "                                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                            ";
            } elseif ((($this->getAttribute(            // line 224
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 225
                echo "                                                ";
                // line 226
                echo "                                            ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 227
                echo "                                                ";
                // line 228
                echo "                                            ";
            } else {
                // line 229
                echo "                                                ";
                $context["sortable"] = false;
                // line 230
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 231
                    echo "                                                    ";
                    $context["sortable"] = true;
                    // line 232
                    echo "                                                    ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array())), "method");
                    // line 233
                    echo "                                                    ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter", array()), "_sort_by", array())));
                    // line 234
                    echo "                                                    ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 235
                    echo "                                                    ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 236
                    echo "                                                ";
                }
                // line 237
                echo "
                                                ";
                // line 238
                ob_start();
                // line 239
                echo "                                                    <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo "\" class=\"sonata-list-field-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\" data-fieldname=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\">
                                                        <span>";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "</span>
                                                        ";
                // line 241
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a class=\"filter-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 242
                echo "                                                        ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 243
                echo "                                                    </th>
                                                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 245
                echo "                                            ";
            }
            // line 246
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                                    </tr>
                                </thead>
                            ";
    }

    // line 251
    public function block_table_body($context, array $blocks = array())
    {
        // line 252
        echo "                                <tbody>
                                    ";
        // line 253
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
            // line 254
            echo "                                        <tr>
                                            ";
            // line 255
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle::sonata_list.html.twig", 255)->display($context);
            // line 256
            echo "                                        </tr>
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
        // line 258
        echo "                                </tbody>
                            ";
    }

    // line 261
    public function block_table_footer($context, array $blocks = array())
    {
        // line 262
        echo "                            <div class=\"table-filter clearfix\">
                                ";
        // line 263
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", array());
        // line 264
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 265
            echo "                                    ";
            if (($context["action"] == "delete")) {
                // line 266
                echo "                                        <div class=\"pull-left\">
                                            <span class=\"selected-items-count\" style=\"display: inline-block; min-width: 110px;\">No items selected</span>
                                            <input name=\"action\" type=\"hidden\" value=\"delete\" />
                                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-small btn-primary\">
                                        </div>
                                    ";
            }
            // line 272
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "
                                <div class=\"pull-right\">
                                    ";
        // line 275
        $this->displayBlock('pager_results', $context, $blocks);
        // line 286
        echo "
                                    ";
        // line 287
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
            // line 288
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"glyphicon glyphicon-export\"></i>
                                                ";
            // line 291
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" style=\"margin-left: 50px;\">
                                                ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 296
                echo "                                                    <li>
                                                        <a href=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                echo "\">
                                                            <i class=\"glyphicon glyphicon-download\"></i>
                                                            ";
                // line 299
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                echo "
                                                        </a>
                                                    <li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 306
        echo "                                </div>
                            </div>

                            ";
        // line 309
        $this->displayBlock('pager_links', $context, $blocks);
        // line 314
        echo "
                        ";
    }

    // line 275
    public function block_pager_results($context, array $blocks = array())
    {
        // line 276
        echo "                                        Show
                                        <select class=\"custom-select-to-init light per-page small\" id=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
        echo "_per_page\">
                                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 279
            echo "                                                <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                                                    ";
            // line 280
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "                                        </select>
                                        per page
                                    ";
    }

    // line 309
    public function block_pager_links($context, array $blocks = array())
    {
        // line 310
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 311
            echo "                                    ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle::sonata_list.html.twig", 311)->display($context);
            // line 312
            echo "                                ";
        }
        // line 313
        echo "                            ";
    }

    // line 326
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 335
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        // line 336
        echo "    ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 337
            echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
    ";
        }
    }

    // line 343
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        // line 344
        echo "    ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 345
            echo "        <div id=\"collapse-block\" class=\"right-column\">
            <div class=\"widget-wrap\">
                ";
            // line 347
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 353
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        // line 354
        echo "    <div class=\"pull-left\">
        ";
        // line 355
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method")) {
            // line 356
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method"), "html", null, true);
            echo "</button></a>
        ";
        }
        // line 358
        echo "    </div>
    ";
        // line 360
        echo "        ";
        // line 361
        echo "    ";
        // line 362
        echo "    <div class=\"pull-right filter-controls\">
        ";
        // line 363
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_zesharcrm_core_operation_list") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_zesharcrm_core_log_list"))) {
            // line 364
            echo "            ";
            $this->loadTemplate("ZesharCRMCoreBundle:ListField:operation_filter_form.html.twig", "ZesharCRMCoreBundle::sonata_list.html.twig", 364)->display($context);
            // line 365
            echo "        ";
        }
        // line 366
        echo "        ";
        // line 367
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle::sonata_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 367,  693 => 366,  690 => 365,  687 => 364,  685 => 363,  682 => 362,  680 => 361,  678 => 360,  675 => 358,  667 => 356,  665 => 355,  662 => 354,  659 => 353,  650 => 347,  646 => 345,  643 => 344,  640 => 343,  632 => 337,  629 => 336,  626 => 335,  621 => 326,  617 => 313,  614 => 312,  611 => 311,  608 => 310,  605 => 309,  599 => 283,  590 => 280,  581 => 279,  577 => 278,  573 => 277,  570 => 276,  567 => 275,  562 => 314,  560 => 309,  555 => 306,  550 => 303,  540 => 299,  535 => 297,  532 => 296,  528 => 295,  521 => 291,  516 => 288,  514 => 287,  511 => 286,  509 => 275,  505 => 273,  499 => 272,  491 => 266,  488 => 265,  483 => 264,  481 => 263,  478 => 262,  475 => 261,  470 => 258,  455 => 256,  453 => 255,  450 => 254,  433 => 253,  430 => 252,  427 => 251,  421 => 247,  415 => 246,  412 => 245,  408 => 243,  403 => 242,  397 => 241,  393 => 240,  384 => 239,  382 => 238,  379 => 237,  376 => 236,  373 => 235,  370 => 234,  367 => 233,  364 => 232,  361 => 231,  358 => 230,  355 => 229,  352 => 228,  350 => 227,  347 => 226,  345 => 225,  343 => 224,  340 => 223,  338 => 222,  333 => 219,  330 => 218,  326 => 217,  322 => 215,  319 => 214,  131 => 20,  128 => 19,  118 => 328,  115 => 327,  113 => 326,  110 => 325,  104 => 322,  101 => 321,  98 => 320,  93 => 317,  90 => 316,  88 => 261,  85 => 260,  83 => 251,  80 => 250,  78 => 214,  75 => 213,  70 => 211,  66 => 210,  63 => 209,  60 => 208,  57 => 207,  55 => 206,  52 => 205,  50 => 19,  45 => 17,  41 => 15,  38 => 14,  11 => 12,);
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
/*     */
/* {% block list_table %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-body table-responsive no-padding">*/
/*             {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*             {% block list_header %}*/
/*                 <script>*/
/*                     (function() {*/
/* */
/* */
/*                     var _init = function () {*/
/* */
/*                         // bulk operations checkboxes*/
/* */
/*                         var listBatchCheckbox = $('#list_batch_checkbox');*/
/*                         var otherCheckboxes = listBatchCheckbox*/
/*                                         .closest('table')*/
/*                                         .find('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                         .not(listBatchCheckbox)*/
/*                                 ;*/
/*                         listBatchCheckbox.on('change', function () {*/
/*                             if ($(this).is(':checked')) {*/
/*                                 otherCheckboxes*/
/*                                         .prop('checked', true)*/
/*                                         .trigger('change')*/
/*                                 ;*/
/*                             } else {*/
/*                                 otherCheckboxes*/
/*                                         .prop('checked', false)*/
/*                                         .trigger('change')*/
/*                                 ;*/
/*                             }*/
/*                         });*/
/* */
/*                         otherCheckboxes*/
/*                                 .on('change', function () {*/
/*                                     $(this)*/
/*                                             .closest('tr')*/
/*                                             .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                     ;*/
/*                                     var selectedCheckboxesCount = otherCheckboxes.filter(':checked').size();*/
/*                                     var selectedCheckboxesCountText = '';*/
/*                                     if (selectedCheckboxesCount == 0) {*/
/*                                         selectedCheckboxesCountText = 'No items selected';*/
/*                                     } else {*/
/*                                         if (selectedCheckboxesCount == 1) {*/
/*                                             selectedCheckboxesCountText = '1 Item Selected';*/
/*                                         } else {*/
/*                                             selectedCheckboxesCountText = selectedCheckboxesCount + ' Items Selected';*/
/*                                         }*/
/*                                     }*/
/*                                     $('.selected-items-count').text(selectedCheckboxesCountText);*/
/*                                 })*/
/*                                 .trigger('ifChanged')*/
/*                         ;*/
/* */
/* */
/*                         // top list filters*/
/* */
/*                         $('.table-sonata-list').each(function() {*/
/*                             var filtersThead = $('<thead></thead>');*/
/*                             var filtersTheadTr = $('<tr></tr>');*/
/*                             var titlesThead = $(this).children('thead.title-head');*/
/*                             titlesThead.find('th').each(function() {*/
/*                                 var th = $('<th></th>');*/
/*                                 if ($(this).is('[data-fieldname]')) {*/
/*                                     th.addClass('sonata-list-field-' + $(this).data('fieldname'));*/
/*                                     var realFilterInputId = 'filter_' + ($(this).data('fieldname').replace('.', '__')) + '_value';*/
/*                                     var realFilterInput = $('#' + realFilterInputId).not('div');*/
/*                                     if (realFilterInput.size()) { // else - filter for this field exist*/
/*                                         var newFilterInput = realFilterInput.clone();*/
/*                                         newFilterInput*/
/*                                                 .addClass('fake-filter-input')*/
/*                                                 .css('margin', '0')*/
/*                                                 .appendTo(th)*/
/*                                         ;*/
/*                                         if (newFilterInput.prop("tagName") == 'select' || newFilterInput.prop("tagName") == 'SELECT') { // init select2*/
/*                                             newFilterInput.addClass('light');*/
/*                                             newFilterInput.select2();*/
/*                                         }*/
/*                                     } else {*/
/*                                         // check for date filters*/
/*                                         var yearFilter = $('#' + realFilterInputId + '_year');*/
/*                                         var monthFilter = $('#' + realFilterInputId + '_month');*/
/*                                         var dayFilter = $('#' + realFilterInputId + '_day');*/
/*                                         if (yearFilter.size() || monthFilter.size() || dayFilter.size()) {*/
/*                                             var date = new Date();*/
/*                                             var dateNotEmpty = false;*/
/*                                             if (yearFilter.size()) {*/
/*                                                 if (yearFilter.val()) {*/
/*                                                     date.setYear(yearFilter.val());*/
/*                                                     dateNotEmpty = true;*/
/*                                                 }*/
/*                                             }*/
/*                                             if (monthFilter.size()) {*/
/*                                                 if (monthFilter.val()) {*/
/*                                                     date.setMonth(monthFilter.val() - 1);*/
/*                                                     dateNotEmpty = true;*/
/*                                                 }*/
/*                                             }*/
/*                                             if (dayFilter.size()) {*/
/*                                                 if (dayFilter.val()) {*/
/*                                                     date.setDate(dayFilter.val());*/
/*                                                     dateNotEmpty = true;*/
/*                                                 }*/
/*                                             }*/
/*                                             var dateInput = $('<input type="text" class="datepicker"/>');*/
/* */
/*                                             var m_names = new Array("january", "february", "march",*/
/*                                                     "april", "may", "june", "july", "august", "september",*/
/*                                                     "october", "november", "december");*/
/*                                             var dateString = date.getDate() + ' ' + m_names[date.getMonth()] + ', ' + date.getFullYear();*/
/* */
/*                                             // hack for datepicker (smth overrides it)*/
/*                                             setTimeout(function() {*/
/*                                                 if (dateNotEmpty) {*/
/*                                                     dateInput.val(dateString);*/
/*                                                 }*/
/*                                             }, 1000);*/
/* */
/*                                             dateInput*/
/*                                                 //.val(dateString)*/
/*                                                 //.trigger('change')*/
/*                                                     .datepicker( "option", "dateFormat", "M d, yy" )*/
/*                                                     .datepicker('setDate', date)*/
/*                                                     .addClass('fake-filter-input')*/
/*                                                     .css('margin', '0')*/
/*                                                     .data('real-inpit-id', realFilterInputId)*/
/*                                                     .appendTo(th)*/
/*                                             ;*/
/*                                         }*/
/*                                     }*/
/*                                 }*/
/*                                 th.appendTo(filtersTheadTr);*/
/*                             });*/
/*                             filtersTheadTr.appendTo(filtersThead);*/
/*                             filtersThead.addClass('fake-filters').insertAfter(titlesThead);*/
/* */
/*                             $('.fake-filter-input').on('keypress', function(e) {*/
/*                                 if (13 == e.keyCode) { // catch Enter key*/
/*                                     e.preventDefault();*/
/*                                 }*/
/*                             });*/
/*                         });*/
/* */
/*                         // search button*/
/* */
/*                         $('.btn-list-search').on('click', function(e) {*/
/*                             var sonataFilterForm = $('form.sonata-filter-form');*/
/* */
/*                             $('.fake-filters').find('input.fake-filter-input, select.fake-filter-input').each(function() {*/
/*                                 var fakeFilterName = $(this).attr('name');*/
/*                                 var realFilterInput = sonataFilterForm.find('[name="' + fakeFilterName + '"]');*/
/*                                 if (realFilterInput.size()) {*/
/*                                     realFilterInput.val($(this).val()).trigger('change');*/
/*                                 } else { // try to handle date*/
/*                                     var realInputId = $(this).data('real-inpit-id');*/
/*                                     if (realInputId) {*/
/*                                         if ($(this).val()) {*/
/*                                             var date = $(this).datepicker( "getDate" );*/
/*                                             $('#' + realInputId + '_year').val(date.getFullYear()).trigger('change');*/
/*                                             $('#' + realInputId + '_month').val(date.getMonth() + 1).trigger('change');*/
/*                                             $('#' + realInputId + '_day').val(date.getDate()).trigger('change');*/
/*                                         }*/
/*                                     }*/
/*                                 }*/
/*                             });*/
/* */
/*                             sonataFilterForm.trigger('submit');*/
/* */
/*                             e.preventDefault();*/
/*                         });*/
/* */
/*                         // "reset filters" button*/
/* */
/*                         $('.btn-list-reset').on('click', function(e) {*/
/*                             var resetUrl = $('form.sonata-filter-form button[type="submit"]').next().attr('href');*/
/*                             if (resetUrl) {*/
/*                                 window.location = resetUrl;*/
/*                             }*/
/* */
/*                             e.preventDefault();*/
/*                         });*/
/* */
/*                         $('.datepicker').datepicker();*/
/* */
/*                     };*/
/*                     $(document).ready(setTimeout(_init, 30));*/
/*                     })();*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             {% set batchactions = admin.batchactions %}*/
/*             {% if admin.datagrid.results|length > 0 %}*/
/*                 {% if admin.hasRoute('batch') %}*/
/*                 <div class="table-scroll" style="overflow: visible;">*/
/*                     <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*                         <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*                     {% endif %}*/
/*                         <table class="table table-sonata-list table-bordered table-striped custom-table-2">*/
/*                             {% block table_header %}*/
/*                                 <thead class="title-head">*/
/*                                     <tr>*/
/*                                         {% for field_description in admin.list.elements %}*/
/*                                             {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                                 <th>*/
/*                                                   <input type="checkbox" id="list_batch_checkbox">*/
/*                                                 </th>*/
/*                                             {% elseif field_description.getOption('code') == '_select' %}*/
/*                                                 <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                             {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                                 {# Action buttons disabled in ajax view! #}*/
/*                                             {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                                 {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                             {% else %}*/
/*                                                 {% set sortable = false %}*/
/*                                                 {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                                     {% set sortable             = true %}*/
/*                                                     {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                                     {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                     {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                     {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% spaceless %}*/
/*                                                     <th class="sonata-ba-list-field-header-{{ field_description.type}}" class="sonata-list-field-{{ field_description.name }}" data-fieldname="{{ field_description.name }}">*/
/*                                                         <span>{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}</span>*/
/*                                                         {% if sortable %}<a class="filter-link" href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                         {% if sortable %}</a>{% endif %}*/
/*                                                     </th>*/
/*                                                 {% endspaceless %}*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                             {% endblock %}*/
/* */
/*                             {% block table_body %}*/
/*                                 <tbody>*/
/*                                     {% for object in admin.datagrid.results %}*/
/*                                         <tr>*/
/*                                             {% include admin.getTemplate('inner_list_row') %}*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             {% endblock %}*/
/*                         </table>*/
/*                         {% block table_footer %}*/
/*                             <div class="table-filter clearfix">*/
/*                                 {% set batchactions = admin.batchactions %}*/
/*                                 {% for action, options in batchactions %}*/
/*                                     {% if action == 'delete' %}*/
/*                                         <div class="pull-left">*/
/*                                             <span class="selected-items-count" style="display: inline-block; min-width: 110px;">No items selected</span>*/
/*                                             <input name="action" type="hidden" value="delete" />*/
/*                                             <input type="submit" value="Delete" class="btn btn-small btn-primary">*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/* */
/*                                 <div class="pull-right">*/
/*                                     {% block pager_results %}*/
/*                                         Show*/
/*                                         <select class="custom-select-to-init light per-page small" id="{{ admin.uniqid }}_per_page">*/
/*                                             {% for per_page in admin.getperpageoptions %}*/
/*                                                 <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values | merge({'_page': 1, '_per_page': per_page})}) }}">*/
/*                                                     {{ per_page }}*/
/*                                                 </option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                         per page*/
/*                                     {% endblock %}*/
/* */
/*                                     {% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                 <i class="glyphicon glyphicon-export"></i>*/
/*                                                 {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                 <span class="caret"></span>*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu" style="margin-left: 50px;">*/
/*                                                 {% for format in admin.getExportFormats() %}*/
/*                                                     <li>*/
/*                                                         <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                             <i class="glyphicon glyphicon-download"></i>*/
/*                                                             {{ format|upper }}*/
/*                                                         </a>*/
/*                                                     <li>*/
/*                                                 {% endfor %}*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             {% block pager_links %}*/
/*                                 {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                     {% include admin.getTemplate('pager_links') %}*/
/*                                 {% endif %}*/
/*                             {% endblock %}*/
/* */
/*                         {% endblock %}*/
/*                     {% if admin.hasRoute('batch') %}*/
/*                     </form>*/
/*                 </div>*/
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
/* {% block sonata_admin_filter_right_column %}*/
/*     {% if not is_granted('ROLE_ULTRA_ADMIN') %}*/
/*     <div class="pull-right">*/
/*         <button class="btn filter-widget hidden-widget" data-target="collapse-block">Hide widgets</button>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_right_column %}*/
/*     {% if not is_granted('ROLE_ULTRA_ADMIN') %}*/
/*         <div id="collapse-block" class="right-column">*/
/*             <div class="widget-wrap">*/
/*                 {{ render(controller('ZesharCRMCoreBundle:Dashboard:showBlockWidget')) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_filter_left_column %}*/
/*     <div class="pull-left">*/
/*         {% if admin.hasRoute('create') %}*/
/*             <a href="{{ admin.generateUrl('create') }}"><button type="button" class="btn btn-green"><i class="fa fa-plus"></i>Add New {{ admin.getLabel() }}</button></a>*/
/*         {% endif %}*/
/*     </div>*/
/*     {#{% if admin.datagrid.results|length > 0 %}#}*/
/*         {#<input type="button" class="btn btn-green btn-list-search" value="Search"  {% if app.request.attributes.get('_route') == 'admin_zesharcrm_core_operation_list' %} style="margin-left: 840px; margin-top: 13px;" {% endif %}>#}*/
/*     {#{% endif %}#}*/
/*     <div class="pull-right filter-controls">*/
/*         {% if (app.request.attributes.get('_route') == 'admin_zesharcrm_core_operation_list') or (app.request.attributes.get('_route') == 'admin_zesharcrm_core_log_list') %}*/
/*             {% include 'ZesharCRMCoreBundle:ListField:operation_filter_form.html.twig' %}*/
/*         {% endif %}*/
/*         {#<input type="button" class="btn btn-white btn-list-reset" value="Reset Filters">#}*/
/*     </div>*/
/* {% endblock %}*/
/* */
