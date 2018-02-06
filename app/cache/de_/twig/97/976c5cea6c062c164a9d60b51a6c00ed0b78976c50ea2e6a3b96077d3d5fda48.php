<?php

/* ZesharCRMCoreBundle::sonata_list.html.twig */
class __TwigTemplate_5978a0bff8614fe05a1ba220b04b1d7333d8d973b50afefb915bc180da1cec6e extends Twig_Template
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
        $__internal_d57c2934399d23493879a655d9f711218ae0375adc70ef265100afcff162c94a = $this->env->getExtension("native_profiler");
        $__internal_d57c2934399d23493879a655d9f711218ae0375adc70ef265100afcff162c94a->enter($__internal_d57c2934399d23493879a655d9f711218ae0375adc70ef265100afcff162c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle::sonata_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d57c2934399d23493879a655d9f711218ae0375adc70ef265100afcff162c94a->leave($__internal_d57c2934399d23493879a655d9f711218ae0375adc70ef265100afcff162c94a_prof);

    }

    // line 14
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_a60d9799219dc7ab43b421c2ab805fa5767be87f010b6d71065582f61d2c07d9 = $this->env->getExtension("native_profiler");
        $__internal_a60d9799219dc7ab43b421c2ab805fa5767be87f010b6d71065582f61d2c07d9->enter($__internal_a60d9799219dc7ab43b421c2ab805fa5767be87f010b6d71065582f61d2c07d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 15
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

            ";
        // line 19
        $this->displayBlock('list_header', $context, $blocks);
        // line 205
        echo "
            ";
        // line 206
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 207
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 208
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 209
                echo "                <div class=\"table-scroll\" style=\"overflow: visible;\">
                    <form action=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                        <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 211
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


        </div>
    </div>
";
        
        $__internal_a60d9799219dc7ab43b421c2ab805fa5767be87f010b6d71065582f61d2c07d9->leave($__internal_a60d9799219dc7ab43b421c2ab805fa5767be87f010b6d71065582f61d2c07d9_prof);

    }

    // line 19
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_d0a6b41b23436d1e4247ef015002d303a7f8f923571d143002f8e36e5cf18bfc = $this->env->getExtension("native_profiler");
        $__internal_d0a6b41b23436d1e4247ef015002d303a7f8f923571d143002f8e36e5cf18bfc->enter($__internal_d0a6b41b23436d1e4247ef015002d303a7f8f923571d143002f8e36e5cf18bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

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
        
        $__internal_d0a6b41b23436d1e4247ef015002d303a7f8f923571d143002f8e36e5cf18bfc->leave($__internal_d0a6b41b23436d1e4247ef015002d303a7f8f923571d143002f8e36e5cf18bfc_prof);

    }

    // line 214
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_0c5b99da225f2080347408ed95c1f4a9c52edc7e42b9b7f4ade6452c0da1fa5d = $this->env->getExtension("native_profiler");
        $__internal_0c5b99da225f2080347408ed95c1f4a9c52edc7e42b9b7f4ade6452c0da1fa5d->enter($__internal_0c5b99da225f2080347408ed95c1f4a9c52edc7e42b9b7f4ade6452c0da1fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 215
        echo "                                <thead class=\"title-head\">
                                    <tr>
                                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 218
            echo "                                            ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
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
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 225
                echo "                                                ";
                // line 226
                echo "                                            ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
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
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 233
                    echo "                                                    ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 234
                    echo "                                                    ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 235
                    echo "                                                    ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "</span>
                                                        ";
                // line 241
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a class=\"filter-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 242
                echo "                                                        ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
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
        
        $__internal_0c5b99da225f2080347408ed95c1f4a9c52edc7e42b9b7f4ade6452c0da1fa5d->leave($__internal_0c5b99da225f2080347408ed95c1f4a9c52edc7e42b9b7f4ade6452c0da1fa5d_prof);

    }

    // line 251
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_8eedd34a33c1219bb0a64e754f317a1331367f6b128e5e932ff4e622b57fb065 = $this->env->getExtension("native_profiler");
        $__internal_8eedd34a33c1219bb0a64e754f317a1331367f6b128e5e932ff4e622b57fb065->enter($__internal_8eedd34a33c1219bb0a64e754f317a1331367f6b128e5e932ff4e622b57fb065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 252
        echo "                                <tbody>
                                    ";
        // line 253
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
            // line 254
            echo "                                        <tr>
                                            ";
            // line 255
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle::sonata_list.html.twig", 255)->display($context);
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
        
        $__internal_8eedd34a33c1219bb0a64e754f317a1331367f6b128e5e932ff4e622b57fb065->leave($__internal_8eedd34a33c1219bb0a64e754f317a1331367f6b128e5e932ff4e622b57fb065_prof);

    }

    // line 261
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_750d7ef09931854a38883111605d4deaa3c3d2380388a5b001e7a9bbd6725ade = $this->env->getExtension("native_profiler");
        $__internal_750d7ef09931854a38883111605d4deaa3c3d2380388a5b001e7a9bbd6725ade->enter($__internal_750d7ef09931854a38883111605d4deaa3c3d2380388a5b001e7a9bbd6725ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 262
        echo "                            <div class=\"table-filter clearfix\">
                                ";
        // line 263
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 264
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
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
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 296
                echo "                                                    <li>
                                                        <a href=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
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
        
        $__internal_750d7ef09931854a38883111605d4deaa3c3d2380388a5b001e7a9bbd6725ade->leave($__internal_750d7ef09931854a38883111605d4deaa3c3d2380388a5b001e7a9bbd6725ade_prof);

    }

    // line 275
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_de979a40e3ccb8f4d2296958c5bb2f072fa7c330ec4d6222682b170c7ba3791f = $this->env->getExtension("native_profiler");
        $__internal_de979a40e3ccb8f4d2296958c5bb2f072fa7c330ec4d6222682b170c7ba3791f->enter($__internal_de979a40e3ccb8f4d2296958c5bb2f072fa7c330ec4d6222682b170c7ba3791f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 276
        echo "                                        Show
                                        <select class=\"custom-select-to-init light per-page small\" id=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">
                                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 279
            echo "                                                <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
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
        
        $__internal_de979a40e3ccb8f4d2296958c5bb2f072fa7c330ec4d6222682b170c7ba3791f->leave($__internal_de979a40e3ccb8f4d2296958c5bb2f072fa7c330ec4d6222682b170c7ba3791f_prof);

    }

    // line 309
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_1322dcfbeec4b84d1f064809624fa44f3cab6dcec959dcffcb6a36f19e5a3899 = $this->env->getExtension("native_profiler");
        $__internal_1322dcfbeec4b84d1f064809624fa44f3cab6dcec959dcffcb6a36f19e5a3899->enter($__internal_1322dcfbeec4b84d1f064809624fa44f3cab6dcec959dcffcb6a36f19e5a3899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 310
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 311
            echo "                                    ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle::sonata_list.html.twig", 311)->display($context);
            // line 312
            echo "                                ";
        }
        // line 313
        echo "                            ";
        
        $__internal_1322dcfbeec4b84d1f064809624fa44f3cab6dcec959dcffcb6a36f19e5a3899->leave($__internal_1322dcfbeec4b84d1f064809624fa44f3cab6dcec959dcffcb6a36f19e5a3899_prof);

    }

    // line 326
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_b58bfa23740899cb5ce63c767e13f2e809f954c374c98103679bce9ab42e0d07 = $this->env->getExtension("native_profiler");
        $__internal_b58bfa23740899cb5ce63c767e13f2e809f954c374c98103679bce9ab42e0d07->enter($__internal_b58bfa23740899cb5ce63c767e13f2e809f954c374c98103679bce9ab42e0d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_b58bfa23740899cb5ce63c767e13f2e809f954c374c98103679bce9ab42e0d07->leave($__internal_b58bfa23740899cb5ce63c767e13f2e809f954c374c98103679bce9ab42e0d07_prof);

    }

    // line 335
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        $__internal_65bc25f0a53597b9ba14e841041c0a52e00ff2d5f696d1560c82114c63f34a34 = $this->env->getExtension("native_profiler");
        $__internal_65bc25f0a53597b9ba14e841041c0a52e00ff2d5f696d1560c82114c63f34a34->enter($__internal_65bc25f0a53597b9ba14e841041c0a52e00ff2d5f696d1560c82114c63f34a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_right_column"));

        // line 336
        echo "    ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 337
            echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
    ";
        }
        
        $__internal_65bc25f0a53597b9ba14e841041c0a52e00ff2d5f696d1560c82114c63f34a34->leave($__internal_65bc25f0a53597b9ba14e841041c0a52e00ff2d5f696d1560c82114c63f34a34_prof);

    }

    // line 343
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        $__internal_861179cd028b97d4460fb9e067b1c7e6fead6c73df260e6d1b2972467ad7c86f = $this->env->getExtension("native_profiler");
        $__internal_861179cd028b97d4460fb9e067b1c7e6fead6c73df260e6d1b2972467ad7c86f->enter($__internal_861179cd028b97d4460fb9e067b1c7e6fead6c73df260e6d1b2972467ad7c86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_right_column"));

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
        
        $__internal_861179cd028b97d4460fb9e067b1c7e6fead6c73df260e6d1b2972467ad7c86f->leave($__internal_861179cd028b97d4460fb9e067b1c7e6fead6c73df260e6d1b2972467ad7c86f_prof);

    }

    // line 353
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        $__internal_e8a3767df1bfc1700f86149dc995d8cf8eab26bfa35cc7281a5d9f972d9bef5a = $this->env->getExtension("native_profiler");
        $__internal_e8a3767df1bfc1700f86149dc995d8cf8eab26bfa35cc7281a5d9f972d9bef5a->enter($__internal_e8a3767df1bfc1700f86149dc995d8cf8eab26bfa35cc7281a5d9f972d9bef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_left_column"));

        // line 354
        echo "    <div class=\"pull-left\">
        ";
        // line 355
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
            // line 356
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
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
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_zesharcrm_core_operation_list") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_zesharcrm_core_log_list"))) {
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
        
        $__internal_e8a3767df1bfc1700f86149dc995d8cf8eab26bfa35cc7281a5d9f972d9bef5a->leave($__internal_e8a3767df1bfc1700f86149dc995d8cf8eab26bfa35cc7281a5d9f972d9bef5a_prof);

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
        return array (  764 => 367,  762 => 366,  759 => 365,  756 => 364,  754 => 363,  751 => 362,  749 => 361,  747 => 360,  744 => 358,  736 => 356,  734 => 355,  731 => 354,  725 => 353,  713 => 347,  709 => 345,  706 => 344,  700 => 343,  689 => 337,  686 => 336,  680 => 335,  669 => 326,  662 => 313,  659 => 312,  656 => 311,  653 => 310,  647 => 309,  638 => 283,  629 => 280,  620 => 279,  616 => 278,  612 => 277,  609 => 276,  603 => 275,  595 => 314,  593 => 309,  588 => 306,  583 => 303,  573 => 299,  568 => 297,  565 => 296,  561 => 295,  554 => 291,  549 => 288,  547 => 287,  544 => 286,  542 => 275,  538 => 273,  532 => 272,  524 => 266,  521 => 265,  516 => 264,  514 => 263,  511 => 262,  505 => 261,  497 => 258,  482 => 256,  480 => 255,  477 => 254,  460 => 253,  457 => 252,  451 => 251,  442 => 247,  436 => 246,  433 => 245,  429 => 243,  424 => 242,  418 => 241,  414 => 240,  405 => 239,  403 => 238,  400 => 237,  397 => 236,  394 => 235,  391 => 234,  388 => 233,  385 => 232,  382 => 231,  379 => 230,  376 => 229,  373 => 228,  371 => 227,  368 => 226,  366 => 225,  364 => 224,  361 => 223,  359 => 222,  354 => 219,  351 => 218,  347 => 217,  343 => 215,  337 => 214,  146 => 20,  140 => 19,  127 => 328,  124 => 327,  122 => 326,  119 => 325,  113 => 322,  110 => 321,  107 => 320,  102 => 317,  99 => 316,  97 => 261,  94 => 260,  92 => 251,  89 => 250,  87 => 214,  84 => 213,  79 => 211,  75 => 210,  72 => 209,  69 => 208,  66 => 207,  64 => 206,  61 => 205,  59 => 19,  54 => 17,  50 => 15,  44 => 14,  11 => 12,);
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
