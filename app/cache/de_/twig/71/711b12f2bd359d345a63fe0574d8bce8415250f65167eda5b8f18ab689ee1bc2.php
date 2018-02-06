<?php

/* ZesharCRMCoreBundle:CRUD:activity_list.html.twig */
class __TwigTemplate_6cac5cf4f7c87bb457a08655bf903a2561b792cd19f9ba14b8b78ce6bfb1c473 extends Twig_Template
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
        $__internal_161f51756ee9af954c45241b48eb788b347529461b6e59d23b962e682995f908 = $this->env->getExtension("native_profiler");
        $__internal_161f51756ee9af954c45241b48eb788b347529461b6e59d23b962e682995f908->enter($__internal_161f51756ee9af954c45241b48eb788b347529461b6e59d23b962e682995f908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:activity_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_161f51756ee9af954c45241b48eb788b347529461b6e59d23b962e682995f908->leave($__internal_161f51756ee9af954c45241b48eb788b347529461b6e59d23b962e682995f908_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e73e663c1ff9ca45d7e2f4d000517b218cdd52fe19981737ec75a87b10912db1 = $this->env->getExtension("native_profiler");
        $__internal_e73e663c1ff9ca45d7e2f4d000517b218cdd52fe19981737ec75a87b10912db1->enter($__internal_e73e663c1ff9ca45d7e2f4d000517b218cdd52fe19981737ec75a87b10912db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/activity_list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e73e663c1ff9ca45d7e2f4d000517b218cdd52fe19981737ec75a87b10912db1->leave($__internal_e73e663c1ff9ca45d7e2f4d000517b218cdd52fe19981737ec75a87b10912db1_prof);

    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_0b3e4913a3f1e07f6a4a7b7b0699eb9ba78fa84256ae05fb3584d308b3244e5d = $this->env->getExtension("native_profiler");
        $__internal_0b3e4913a3f1e07f6a4a7b7b0699eb9ba78fa84256ae05fb3584d308b3244e5d->enter($__internal_0b3e4913a3f1e07f6a4a7b7b0699eb9ba78fa84256ae05fb3584d308b3244e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

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
        // line 209
        echo "

    ";
        // line 211
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 212
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 213
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 214
                echo "            <div class=\"table-scroll\" style=\"overflow: visible;\">
            <form action=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


    </div>
    </div>
";
        
        $__internal_0b3e4913a3f1e07f6a4a7b7b0699eb9ba78fa84256ae05fb3584d308b3244e5d->leave($__internal_0b3e4913a3f1e07f6a4a7b7b0699eb9ba78fa84256ae05fb3584d308b3244e5d_prof);

    }

    // line 24
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_faf922eae93ca4e50b7bc6156d36224336c9665093836c04b18671a76aec6ec1 = $this->env->getExtension("native_profiler");
        $__internal_faf922eae93ca4e50b7bc6156d36224336c9665093836c04b18671a76aec6ec1->enter($__internal_faf922eae93ca4e50b7bc6156d36224336c9665093836c04b18671a76aec6ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

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
        
        $__internal_faf922eae93ca4e50b7bc6156d36224336c9665093836c04b18671a76aec6ec1->leave($__internal_faf922eae93ca4e50b7bc6156d36224336c9665093836c04b18671a76aec6ec1_prof);

    }

    // line 219
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_d9876a527a78d1245f65eacede62bc76680ade58eb4de75a8f7482c40ea89060 = $this->env->getExtension("native_profiler");
        $__internal_d9876a527a78d1245f65eacede62bc76680ade58eb4de75a8f7482c40ea89060->enter($__internal_d9876a527a78d1245f65eacede62bc76680ade58eb4de75a8f7482c40ea89060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 220
        echo "                <thead class=\"title-head\">
                <tr>
                    ";
        // line 222
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "baseRoutePattern", array()) == "expiredactivity")) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 229
            echo "                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
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
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 236
                echo "                            ";
                // line 237
                echo "                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
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
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 244
                    echo "                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 245
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 246
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "</span>
                                    ";
                // line 252
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a class=\"filter-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 253
                echo "                                        ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
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
        
        $__internal_d9876a527a78d1245f65eacede62bc76680ade58eb4de75a8f7482c40ea89060->leave($__internal_d9876a527a78d1245f65eacede62bc76680ade58eb4de75a8f7482c40ea89060_prof);

    }

    // line 262
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_ab877ccb70615ef2cace5204cd1dc7891231a7e9caf07be4ea4b136348a2e4cc = $this->env->getExtension("native_profiler");
        $__internal_ab877ccb70615ef2cace5204cd1dc7891231a7e9caf07be4ea4b136348a2e4cc->enter($__internal_ab877ccb70615ef2cace5204cd1dc7891231a7e9caf07be4ea4b136348a2e4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 263
        echo "                <tbody>
                ";
        // line 264
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
        
        $__internal_ab877ccb70615ef2cace5204cd1dc7891231a7e9caf07be4ea4b136348a2e4cc->leave($__internal_ab877ccb70615ef2cace5204cd1dc7891231a7e9caf07be4ea4b136348a2e4cc_prof);

    }

    // line 274
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_e0246dbc7757a51624ae772aa40bace03887d5550ab1e0079091cfafd05806d2 = $this->env->getExtension("native_profiler");
        $__internal_e0246dbc7757a51624ae772aa40bace03887d5550ab1e0079091cfafd05806d2->enter($__internal_e0246dbc7757a51624ae772aa40bace03887d5550ab1e0079091cfafd05806d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 275
        echo "                <div class=\"table-filter clearfix\">
                    <div class=\"pull-left batch-wrap\">
                        <span class=\"selected-items-count\" style=\"display: inline-block; min-width: 110px;\">No items selected</span>
                        ";
        // line 279
        echo "                        ";
        // line 280
        echo "                        <input type=\"submit\" value=\"Delete\" data-batch=\"delete\" data-ajax-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/activity_list/activitiesDelete\" class=\"btn btn-small btn-primary btn-list-delete btn-batch\">
                        ";
        // line 281
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "baseRoutePattern", array()) != "expiredactivity")) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 314
            echo "                                    <li>
                                        <a href=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_expiredactivity_export", array("format" => $context["format"], "" => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method"))), "html", null, true);
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
        
        $__internal_e0246dbc7757a51624ae772aa40bace03887d5550ab1e0079091cfafd05806d2->leave($__internal_e0246dbc7757a51624ae772aa40bace03887d5550ab1e0079091cfafd05806d2_prof);

    }

    // line 283
    public function block_reassign($context, array $blocks = array())
    {
        $__internal_0fcca61f06610e331b9ab59f194034b795df126970607b378e263dcb0dcd7cf6 = $this->env->getExtension("native_profiler");
        $__internal_0fcca61f06610e331b9ab59f194034b795df126970607b378e263dcb0dcd7cf6->enter($__internal_0fcca61f06610e331b9ab59f194034b795df126970607b378e263dcb0dcd7cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reassign"));

        // line 284
        echo "                                    Reassign to:
                                    ";
        // line 285
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect"));
        echo "
                                    <input type=\"submit\" data-ajax-url=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/activity_list/activityReassign\" value=\"Reassign\" data-batch=\"reassign\" class=\"btn btn-small btn-primary btn-list-reassign btn-batch\">
                                ";
        
        $__internal_0fcca61f06610e331b9ab59f194034b795df126970607b378e263dcb0dcd7cf6->leave($__internal_0fcca61f06610e331b9ab59f194034b795df126970607b378e263dcb0dcd7cf6_prof);

    }

    // line 293
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_691c5d8542a1b95b41006505ba76fdba5418442b3fca8d61952e86050a5609e2 = $this->env->getExtension("native_profiler");
        $__internal_691c5d8542a1b95b41006505ba76fdba5418442b3fca8d61952e86050a5609e2->enter($__internal_691c5d8542a1b95b41006505ba76fdba5418442b3fca8d61952e86050a5609e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 294
        echo "                            Show
                            <select class=\"custom-select-to-init light per-page small\" id=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">
                                ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 297
            echo "                                    <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
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
        
        $__internal_691c5d8542a1b95b41006505ba76fdba5418442b3fca8d61952e86050a5609e2->leave($__internal_691c5d8542a1b95b41006505ba76fdba5418442b3fca8d61952e86050a5609e2_prof);

    }

    // line 327
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_52494fb2e72d8a34309721db5ca9c1f640f664aaefc47cab173b00c5c1c1c36f = $this->env->getExtension("native_profiler");
        $__internal_52494fb2e72d8a34309721db5ca9c1f640f664aaefc47cab173b00c5c1c1c36f->enter($__internal_52494fb2e72d8a34309721db5ca9c1f640f664aaefc47cab173b00c5c1c1c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 328
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 329
            echo "                        ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:activity_list.html.twig", 329)->display($context);
            // line 330
            echo "                    ";
        }
        // line 331
        echo "                ";
        
        $__internal_52494fb2e72d8a34309721db5ca9c1f640f664aaefc47cab173b00c5c1c1c36f->leave($__internal_52494fb2e72d8a34309721db5ca9c1f640f664aaefc47cab173b00c5c1c1c36f_prof);

    }

    // line 346
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_fa6ce5da778bd8a4a8d3dba253145413ed20536fc0375fa1581c8041fa4cec84 = $this->env->getExtension("native_profiler");
        $__internal_fa6ce5da778bd8a4a8d3dba253145413ed20536fc0375fa1581c8041fa4cec84->enter($__internal_fa6ce5da778bd8a4a8d3dba253145413ed20536fc0375fa1581c8041fa4cec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_fa6ce5da778bd8a4a8d3dba253145413ed20536fc0375fa1581c8041fa4cec84->leave($__internal_fa6ce5da778bd8a4a8d3dba253145413ed20536fc0375fa1581c8041fa4cec84_prof);

    }

    // line 355
    public function block_sonata_admin_filter_right_column($context, array $blocks = array())
    {
        $__internal_3273ea99d90cdf06750ed7872aa806c622cfec8738d8b0ca4a5865bf36caf360 = $this->env->getExtension("native_profiler");
        $__internal_3273ea99d90cdf06750ed7872aa806c622cfec8738d8b0ca4a5865bf36caf360->enter($__internal_3273ea99d90cdf06750ed7872aa806c622cfec8738d8b0ca4a5865bf36caf360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_right_column"));

        // line 356
        echo "    <div class=\"pull-right\">
        <button class=\"btn filter-widget hidden-widget\" data-target=\"collapse-block\">Hide widgets</button>
    </div>
";
        
        $__internal_3273ea99d90cdf06750ed7872aa806c622cfec8738d8b0ca4a5865bf36caf360->leave($__internal_3273ea99d90cdf06750ed7872aa806c622cfec8738d8b0ca4a5865bf36caf360_prof);

    }

    // line 361
    public function block_sonata_admin_right_column($context, array $blocks = array())
    {
        $__internal_4655d2014cc1c0e986629acb52eed7be29c6c1138d63b6c4dc0ef2f4128ac360 = $this->env->getExtension("native_profiler");
        $__internal_4655d2014cc1c0e986629acb52eed7be29c6c1138d63b6c4dc0ef2f4128ac360->enter($__internal_4655d2014cc1c0e986629acb52eed7be29c6c1138d63b6c4dc0ef2f4128ac360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_right_column"));

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
        
        $__internal_4655d2014cc1c0e986629acb52eed7be29c6c1138d63b6c4dc0ef2f4128ac360->leave($__internal_4655d2014cc1c0e986629acb52eed7be29c6c1138d63b6c4dc0ef2f4128ac360_prof);

    }

    // line 369
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        $__internal_eb7cdd3fad5ff6d68459d57a03e30385a346bcb12a8641f71c97e2bf8612f1a9 = $this->env->getExtension("native_profiler");
        $__internal_eb7cdd3fad5ff6d68459d57a03e30385a346bcb12a8641f71c97e2bf8612f1a9->enter($__internal_eb7cdd3fad5ff6d68459d57a03e30385a346bcb12a8641f71c97e2bf8612f1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_left_column"));

        // line 370
        echo "    <div class=\"pull-left\">
        ";
        // line 371
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
            // line 372
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
            echo "</button></a>
        ";
        }
        // line 374
        echo "    </div>
    <div class=\"pull-right filter-controls\">
        ";
        // line 376
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 377
            echo "            <input type=\"button\" class=\"btn btn-green btn-list-search\" value=\"Search\">
        ";
        }
        // line 379
        echo "        <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
    </div>
";
        
        $__internal_eb7cdd3fad5ff6d68459d57a03e30385a346bcb12a8641f71c97e2bf8612f1a9->leave($__internal_eb7cdd3fad5ff6d68459d57a03e30385a346bcb12a8641f71c97e2bf8612f1a9_prof);

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
        return array (  800 => 379,  796 => 377,  794 => 376,  790 => 374,  782 => 372,  780 => 371,  777 => 370,  771 => 369,  760 => 364,  756 => 362,  750 => 361,  740 => 356,  734 => 355,  723 => 346,  716 => 331,  713 => 330,  710 => 329,  707 => 328,  701 => 327,  692 => 301,  683 => 298,  674 => 297,  670 => 296,  666 => 295,  663 => 294,  657 => 293,  648 => 286,  644 => 285,  641 => 284,  635 => 283,  627 => 332,  625 => 327,  620 => 324,  616 => 321,  606 => 317,  601 => 315,  598 => 314,  594 => 313,  587 => 309,  582 => 306,  579 => 304,  577 => 293,  572 => 290,  568 => 288,  566 => 283,  563 => 282,  561 => 281,  556 => 280,  554 => 279,  549 => 275,  543 => 274,  535 => 270,  520 => 268,  517 => 267,  514 => 265,  497 => 264,  494 => 263,  488 => 262,  479 => 258,  473 => 257,  470 => 256,  466 => 254,  461 => 253,  455 => 252,  451 => 251,  442 => 250,  440 => 249,  437 => 248,  434 => 247,  431 => 246,  428 => 245,  425 => 244,  422 => 243,  419 => 242,  416 => 241,  413 => 240,  410 => 239,  408 => 238,  405 => 237,  403 => 236,  401 => 235,  398 => 234,  396 => 233,  391 => 230,  388 => 229,  384 => 228,  381 => 227,  375 => 223,  373 => 222,  369 => 220,  363 => 219,  173 => 25,  167 => 24,  154 => 348,  151 => 347,  149 => 346,  146 => 345,  140 => 342,  137 => 341,  134 => 340,  129 => 337,  127 => 336,  123 => 334,  121 => 274,  117 => 272,  115 => 262,  112 => 261,  110 => 219,  107 => 218,  102 => 216,  98 => 215,  95 => 214,  92 => 213,  89 => 212,  87 => 211,  83 => 209,  81 => 24,  76 => 22,  72 => 20,  66 => 19,  57 => 16,  52 => 15,  46 => 14,  11 => 12,);
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
