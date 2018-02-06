<?php

/* ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig */
class __TwigTemplate_0e14fe8668f9998220888165cc0a2dc159caf533b1c4d987067081f76d816893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'spinner' => array($this, 'block_spinner'),
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
            'sonata_admin_filter_left_column' => array($this, 'block_sonata_admin_filter_left_column'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f41e55e2281b141bf5c39d3972c4d1b71c23c424d9bb278539437e6a4b28cec = $this->env->getExtension("native_profiler");
        $__internal_7f41e55e2281b141bf5c39d3972c4d1b71c23c424d9bb278539437e6a4b28cec->enter($__internal_7f41e55e2281b141bf5c39d3972c4d1b71c23c424d9bb278539437e6a4b28cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f41e55e2281b141bf5c39d3972c4d1b71c23c424d9bb278539437e6a4b28cec->leave($__internal_7f41e55e2281b141bf5c39d3972c4d1b71c23c424d9bb278539437e6a4b28cec_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_aaf2dd59695a35a1afbe6a23981b459cf5b4426a07238bba71b7ea0a755c6080 = $this->env->getExtension("native_profiler");
        $__internal_aaf2dd59695a35a1afbe6a23981b459cf5b4426a07238bba71b7ea0a755c6080->enter($__internal_aaf2dd59695a35a1afbe6a23981b459cf5b4426a07238bba71b7ea0a755c6080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig", 15)->display($context);
        echo "</li>

";
        
        $__internal_aaf2dd59695a35a1afbe6a23981b459cf5b4426a07238bba71b7ea0a755c6080->leave($__internal_aaf2dd59695a35a1afbe6a23981b459cf5b4426a07238bba71b7ea0a755c6080_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_4eee2f089abf75764d74f1e8c2e3cb530f11a111a71e85de55c4e370a294515e = $this->env->getExtension("native_profiler");
        $__internal_4eee2f089abf75764d74f1e8c2e3cb530f11a111a71e85de55c4e370a294515e->enter($__internal_4eee2f089abf75764d74f1e8c2e3cb530f11a111a71e85de55c4e370a294515e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        
        $__internal_4eee2f089abf75764d74f1e8c2e3cb530f11a111a71e85de55c4e370a294515e->leave($__internal_4eee2f089abf75764d74f1e8c2e3cb530f11a111a71e85de55c4e370a294515e_prof);

    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_f3e8a623e1c35fa0411892036f06bfedc15218715c3a521444a8afce88234739 = $this->env->getExtension("native_profiler");
        $__internal_f3e8a623e1c35fa0411892036f06bfedc15218715c3a521444a8afce88234739->enter($__internal_f3e8a623e1c35fa0411892036f06bfedc15218715c3a521444a8afce88234739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 23
        echo "    ";
        $this->displayBlock('spinner', $context, $blocks);
        // line 26
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\" id=\"table_id\">

            <input type=\"hidden\" class=\"visible-on-popup btn btn-green btn-list-search\" value=\"Search\">
            <input type=\"hidden\" class=\"visible-on-popup btn btn-white btn-list-reset\" value=\"Reset filters\">
            ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

            ";
        // line 33
        $this->displayBlock('list_header', $context, $blocks);
        // line 197
        echo "
            ";
        // line 198
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 199
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 200
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 201
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 202
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
                ";
            }
            // line 204
            echo "                    <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
                        ";
            // line 205
            $this->displayBlock('table_header', $context, $blocks);
            // line 241
            echo "
                        ";
            // line 242
            $this->displayBlock('table_body', $context, $blocks);
            // line 251
            echo "
                        ";
            // line 252
            $this->displayBlock('table_footer', $context, $blocks);
            // line 340
            echo "                    </table>
                ";
            // line 341
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 342
                echo "                </form>
                ";
            }
            // line 344
            echo "            ";
        } else {
            // line 345
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 346
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 349
        echo "
            ";
        // line 350
        $this->displayBlock('list_footer', $context, $blocks);
        // line 351
        echo "
            ";
        // line 352
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "


        </div>
    </div>
";
        
        $__internal_f3e8a623e1c35fa0411892036f06bfedc15218715c3a521444a8afce88234739->leave($__internal_f3e8a623e1c35fa0411892036f06bfedc15218715c3a521444a8afce88234739_prof);

    }

    // line 23
    public function block_spinner($context, array $blocks = array())
    {
        $__internal_7bcf4eff3c4bc8832f3582eee3369975d2c401070545a492fe77779451ef44bc = $this->env->getExtension("native_profiler");
        $__internal_7bcf4eff3c4bc8832f3582eee3369975d2c401070545a492fe77779451ef44bc->enter($__internal_7bcf4eff3c4bc8832f3582eee3369975d2c401070545a492fe77779451ef44bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spinner"));

        // line 24
        echo "        ";
        $this->loadTemplate("loading_spinner.html.twig", "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig", 24)->display($context);
        // line 25
        echo "    ";
        
        $__internal_7bcf4eff3c4bc8832f3582eee3369975d2c401070545a492fe77779451ef44bc->leave($__internal_7bcf4eff3c4bc8832f3582eee3369975d2c401070545a492fe77779451ef44bc_prof);

    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_8439f8a9617a26bfd911f4ee506985503f9ec425120d4cc7b3995da3e2321891 = $this->env->getExtension("native_profiler");
        $__internal_8439f8a9617a26bfd911f4ee506985503f9ec425120d4cc7b3995da3e2321891->enter($__internal_8439f8a9617a26bfd911f4ee506985503f9ec425120d4cc7b3995da3e2321891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        // line 34
        echo "                <script>
                    (function() {


                        var _init = function () {
                            var spinner = new Spinner('table_id');
                            spinner.create();
                            spinner.hide();

                            if (\$('.modal-title').length !== 0) {
                                var popUpButtons = \$('.visible-on-popup');
                                \$.each(popUpButtons, function () {
                                    this.type=\"button\";
                                });
                            }

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

                            function searchButtonAction() {
                                var sonataFilterForm = \$('form.sonata-filter-form');
                                spinner.show();

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
                                sonataFilterForm.submit();/*
                                sonataFilterForm.off('submit');
                                sonataFilterForm.trigger('submit');*/
                            }

                            function resetFiltersAction() {
                                spinner.show();
                                var sonataFilterForm = \$('form.sonata-filter-form');
                                console.log(sonataFilterForm);
                                \$( \"[id^='filter_']\" ).val( \"\" );
                                sonataFilterForm.submit();
                            }

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
                                        //console.log(realFilterInputId);
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
                                        }
                                    }
                                    th.appendTo(filtersTheadTr);
                                });
                                filtersTheadTr.appendTo(filtersThead);
                                filtersThead.addClass('fake-filters').insertAfter(titlesThead);

                                \$('.fake-filter-input').on('keypress', function(e) {
                                    if (13 == e.keyCode) { // catch Enter key
                                        searchButtonAction();
                                        e.preventDefault();
                                    }
                                });
                            });



                            // search button

                            \$('.btn-list-search').on('click', function(e) {

                                searchButtonAction();

                                e.preventDefault();
                            });

                            // \"reset filters\" button

                            \$('.btn-list-reset').on('click', function(e) {

                                /*var resetUrl = \$('form.sonata-filter-form button[type=\"submit\"]').next().attr('href');
                                if (resetUrl) {
                                    window.location = resetUrl;
                                }*/
                                resetFiltersAction();

                                e.preventDefault();
                            });


                        };
                        \$(document).ready(setTimeout(_init, 30));
                    })();
                </script>
            ";
        
        $__internal_8439f8a9617a26bfd911f4ee506985503f9ec425120d4cc7b3995da3e2321891->leave($__internal_8439f8a9617a26bfd911f4ee506985503f9ec425120d4cc7b3995da3e2321891_prof);

    }

    // line 205
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_6feb4d02f1eb3fbad9201d4ebbee05cf3cafc8ca7e8d9ab6926c79db122dd81f = $this->env->getExtension("native_profiler");
        $__internal_6feb4d02f1eb3fbad9201d4ebbee05cf3cafc8ca7e8d9ab6926c79db122dd81f->enter($__internal_6feb4d02f1eb3fbad9201d4ebbee05cf3cafc8ca7e8d9ab6926c79db122dd81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 206
        echo "                            <thead class=\"title-head\">
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 209
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 210
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 213
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 214
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 215
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 216
                echo "                                            ";
                // line 217
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 218
                echo "                                            ";
                // line 219
                echo "                                        ";
            } else {
                // line 220
                echo "                                            ";
                $context["sortable"] = false;
                // line 221
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 222
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 223
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 224
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 225
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 226
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 227
                    echo "                                            ";
                }
                // line 228
                echo "
                                            ";
                // line 229
                ob_start();
                // line 230
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\" data-fieldname=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "name", array()), "html", null, true);
                echo "\">
                                                    ";
                // line 231
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 232
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                    ";
                // line 233
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 234
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 236
                echo "                                        ";
            }
            // line 237
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_6feb4d02f1eb3fbad9201d4ebbee05cf3cafc8ca7e8d9ab6926c79db122dd81f->leave($__internal_6feb4d02f1eb3fbad9201d4ebbee05cf3cafc8ca7e8d9ab6926c79db122dd81f_prof);

    }

    // line 242
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_e7466d264f9869ef5f2822217b6c93ed9da6e8795ef2537cdff0da044d26ed8f = $this->env->getExtension("native_profiler");
        $__internal_e7466d264f9869ef5f2822217b6c93ed9da6e8795ef2537cdff0da044d26ed8f->enter($__internal_e7466d264f9869ef5f2822217b6c93ed9da6e8795ef2537cdff0da044d26ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 243
        echo "                            <tbody>
                                ";
        // line 244
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
            // line 245
            echo "                                    <tr>
                                        ";
            // line 246
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig", 246)->display($context);
            // line 247
            echo "                                    </tr>
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
        // line 249
        echo "                            </tbody>
                        ";
        
        $__internal_e7466d264f9869ef5f2822217b6c93ed9da6e8795ef2537cdff0da044d26ed8f->leave($__internal_e7466d264f9869ef5f2822217b6c93ed9da6e8795ef2537cdff0da044d26ed8f_prof);

    }

    // line 252
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_3008771ce53629c9b4b29d50cda2052a01b32a3e4631293ea056ee4716f540ce = $this->env->getExtension("native_profiler");
        $__internal_3008771ce53629c9b4b29d50cda2052a01b32a3e4631293ea056ee4716f540ce->enter($__internal_3008771ce53629c9b4b29d50cda2052a01b32a3e4631293ea056ee4716f540ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 253
        echo "                            <tr>
                                <th colspan=\"";
        // line 254
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                    <div class=\"form-inline\">
                                        ";
        // line 256
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
            // line 257
            echo "                                            ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 258
                echo "                                                ";
                $this->displayBlock('batch', $context, $blocks);
                // line 299
                echo "                                            ";
            }
            // line 300
            echo "
                                            <div class=\"pull-right\">
                                                ";
            // line 302
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                // line 303
                echo "                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                            <i class=\"glyphicon glyphicon-export\"></i>
                                                            ";
                // line 306
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                            <span class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            ";
                // line 310
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 311
                    echo "                                                                <li>
                                                                    <a href=\"";
                    // line 312
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                    echo "\">
                                                                        <i class=\"glyphicon glyphicon-download\"></i>
                                                                        ";
                    // line 314
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                    echo "
                                                                    </a>
                                                                <li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "                                                        </ul>
                                                    </div>

                                                    &nbsp;-&nbsp;
                                                ";
            }
            // line 323
            echo "
                                                ";
            // line 324
            $this->displayBlock('pager_results', $context, $blocks);
            // line 327
            echo "                                            </div>
                                        ";
        }
        // line 329
        echo "                                    </div>
                                </th>
                            </tr>

                            ";
        // line 333
        $this->displayBlock('pager_links', $context, $blocks);
        // line 338
        echo "
                        ";
        
        $__internal_3008771ce53629c9b4b29d50cda2052a01b32a3e4631293ea056ee4716f540ce->leave($__internal_3008771ce53629c9b4b29d50cda2052a01b32a3e4631293ea056ee4716f540ce_prof);

    }

    // line 258
    public function block_batch($context, array $blocks = array())
    {
        $__internal_68c35eefb485006bdad83e2899f0d231fd44c967a52c726b203f3af987dea18e = $this->env->getExtension("native_profiler");
        $__internal_68c35eefb485006bdad83e2899f0d231fd44c967a52c726b203f3af987dea18e->enter($__internal_68c35eefb485006bdad83e2899f0d231fd44c967a52c726b203f3af987dea18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 259
        echo "                                                    <script>
                                                        ";
        // line 260
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 281
        echo "                                                    </script>

                                                    ";
        // line 283
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 296
        echo "
                                                    <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                ";
        
        $__internal_68c35eefb485006bdad83e2899f0d231fd44c967a52c726b203f3af987dea18e->leave($__internal_68c35eefb485006bdad83e2899f0d231fd44c967a52c726b203f3af987dea18e_prof);

    }

    // line 260
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_d2dd93e8e98415d1709c8df4e3ef7b8fb718e20c1c8ea030462cd838fa96c6a9 = $this->env->getExtension("native_profiler");
        $__internal_d2dd93e8e98415d1709c8df4e3ef7b8fb718e20c1c8ea030462cd838fa96c6a9->enter($__internal_d2dd93e8e98415d1709c8df4e3ef7b8fb718e20c1c8ea030462cd838fa96c6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 261
        echo "                                                            jQuery(document).ready(function (\$) {
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
        
        $__internal_d2dd93e8e98415d1709c8df4e3ef7b8fb718e20c1c8ea030462cd838fa96c6a9->leave($__internal_d2dd93e8e98415d1709c8df4e3ef7b8fb718e20c1c8ea030462cd838fa96c6a9_prof);

    }

    // line 283
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_065a8b592e882443752b899e70efb6d0bcda9f81185fabc974d6ae4b50a7f61e = $this->env->getExtension("native_profiler");
        $__internal_065a8b592e882443752b899e70efb6d0bcda9f81185fabc974d6ae4b50a7f61e->enter($__internal_065a8b592e882443752b899e70efb6d0bcda9f81185fabc974d6ae4b50a7f61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 284
        echo "                                                        <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                            <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                            ";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                             (";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                                        </label>

                                                        <select name=\"action\" style=\"width: auto; height: auto\">
                                                            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 292
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["options"], "label", array()), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "                                                        </select>
                                                    ";
        
        $__internal_065a8b592e882443752b899e70efb6d0bcda9f81185fabc974d6ae4b50a7f61e->leave($__internal_065a8b592e882443752b899e70efb6d0bcda9f81185fabc974d6ae4b50a7f61e_prof);

    }

    // line 324
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_0e0558c61fc857c729e1288bdbe652d01632cf0825d03d19204ca8cb8a9ac58e = $this->env->getExtension("native_profiler");
        $__internal_0e0558c61fc857c729e1288bdbe652d01632cf0825d03d19204ca8cb8a9ac58e->enter($__internal_0e0558c61fc857c729e1288bdbe652d01632cf0825d03d19204ca8cb8a9ac58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 325
        echo "                                                    ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig", 325)->display($context);
        // line 326
        echo "                                                ";
        
        $__internal_0e0558c61fc857c729e1288bdbe652d01632cf0825d03d19204ca8cb8a9ac58e->leave($__internal_0e0558c61fc857c729e1288bdbe652d01632cf0825d03d19204ca8cb8a9ac58e_prof);

    }

    // line 333
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_85185dd2aa31987f1db3ac1764ae5da829e83ce9196a1dd1c6b38545266184e0 = $this->env->getExtension("native_profiler");
        $__internal_85185dd2aa31987f1db3ac1764ae5da829e83ce9196a1dd1c6b38545266184e0->enter($__internal_85185dd2aa31987f1db3ac1764ae5da829e83ce9196a1dd1c6b38545266184e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 334
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 335
            echo "                                    ";
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig", 335)->display($context);
            // line 336
            echo "                                ";
        }
        // line 337
        echo "                            ";
        
        $__internal_85185dd2aa31987f1db3ac1764ae5da829e83ce9196a1dd1c6b38545266184e0->leave($__internal_85185dd2aa31987f1db3ac1764ae5da829e83ce9196a1dd1c6b38545266184e0_prof);

    }

    // line 350
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_9968174e397795dad3ed4eeca252644508a05a097262c4e5b17f094b80a33ef6 = $this->env->getExtension("native_profiler");
        $__internal_9968174e397795dad3ed4eeca252644508a05a097262c4e5b17f094b80a33ef6->enter($__internal_9968174e397795dad3ed4eeca252644508a05a097262c4e5b17f094b80a33ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        
        $__internal_9968174e397795dad3ed4eeca252644508a05a097262c4e5b17f094b80a33ef6->leave($__internal_9968174e397795dad3ed4eeca252644508a05a097262c4e5b17f094b80a33ef6_prof);

    }

    // line 359
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_d3a65cf6d7f56d8826042b5a9d8fa58ae35d2ab5a27e6bcb3e5568b90fd3e95f = $this->env->getExtension("native_profiler");
        $__internal_d3a65cf6d7f56d8826042b5a9d8fa58ae35d2ab5a27e6bcb3e5568b90fd3e95f->enter($__internal_d3a65cf6d7f56d8826042b5a9d8fa58ae35d2ab5a27e6bcb3e5568b90fd3e95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 360
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 361
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 362
            echo "        <div class=\"box box-primary\" style=\"display:none\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 364
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 368
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo " \" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 369
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 370
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 372
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 373
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 374
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 375
                echo "                                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 376
                echo "
                                    ";
                // line 377
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "

                                    ";
                // line 379
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 385
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 386
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 388
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 394
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            echo "                </form>
            </div>
        </div>

    ";
        }
        
        $__internal_d3a65cf6d7f56d8826042b5a9d8fa58ae35d2ab5a27e6bcb3e5568b90fd3e95f->leave($__internal_d3a65cf6d7f56d8826042b5a9d8fa58ae35d2ab5a27e6bcb3e5568b90fd3e95f_prof);

    }

    // line 402
    public function block_sonata_admin_filter_left_column($context, array $blocks = array())
    {
        $__internal_9166783113eff910c5c10898b0e8ff25b241ea45c1bb6004e184e6480deb46ec = $this->env->getExtension("native_profiler");
        $__internal_9166783113eff910c5c10898b0e8ff25b241ea45c1bb6004e184e6480deb46ec->enter($__internal_9166783113eff910c5c10898b0e8ff25b241ea45c1bb6004e184e6480deb46ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_filter_left_column"));

        // line 403
        echo "    <div class=\"pull-left\">
        <a href=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-green\"><i class=\"fa fa-plus\"></i>Add New ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo "</button></a>
    </div>
    <div class=\"pull-right filter-controls\">
        ";
        // line 407
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 408
            echo "            <input type=\"button\" class=\"btn btn-green btn-list-search\" value=\"Search\">
        ";
        }
        // line 410
        echo "        <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
    </div>
";
        
        $__internal_9166783113eff910c5c10898b0e8ff25b241ea45c1bb6004e184e6480deb46ec->leave($__internal_9166783113eff910c5c10898b0e8ff25b241ea45c1bb6004e184e6480deb46ec_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:base_list_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  948 => 410,  944 => 408,  942 => 407,  934 => 404,  931 => 403,  925 => 402,  913 => 396,  902 => 394,  898 => 393,  890 => 390,  885 => 388,  879 => 386,  877 => 385,  872 => 382,  863 => 379,  858 => 377,  855 => 376,  852 => 375,  850 => 374,  844 => 373,  841 => 372,  837 => 371,  833 => 370,  829 => 369,  823 => 368,  814 => 364,  810 => 362,  807 => 361,  804 => 360,  798 => 359,  787 => 350,  780 => 337,  777 => 336,  774 => 335,  771 => 334,  765 => 333,  758 => 326,  755 => 325,  749 => 324,  741 => 294,  730 => 292,  726 => 291,  719 => 287,  715 => 286,  711 => 285,  706 => 284,  700 => 283,  674 => 261,  668 => 260,  659 => 297,  656 => 296,  654 => 283,  650 => 281,  648 => 260,  645 => 259,  639 => 258,  631 => 338,  629 => 333,  623 => 329,  619 => 327,  617 => 324,  614 => 323,  607 => 318,  597 => 314,  592 => 312,  589 => 311,  585 => 310,  578 => 306,  573 => 303,  571 => 302,  567 => 300,  564 => 299,  561 => 258,  558 => 257,  556 => 256,  551 => 254,  548 => 253,  542 => 252,  534 => 249,  519 => 247,  517 => 246,  514 => 245,  497 => 244,  494 => 243,  488 => 242,  479 => 238,  473 => 237,  470 => 236,  466 => 234,  462 => 233,  457 => 232,  451 => 231,  437 => 230,  435 => 229,  432 => 228,  429 => 227,  426 => 226,  423 => 225,  420 => 224,  417 => 223,  414 => 222,  411 => 221,  408 => 220,  405 => 219,  403 => 218,  400 => 217,  398 => 216,  396 => 215,  393 => 214,  391 => 213,  386 => 210,  383 => 209,  379 => 208,  375 => 206,  369 => 205,  200 => 34,  194 => 33,  187 => 25,  184 => 24,  178 => 23,  165 => 352,  162 => 351,  160 => 350,  157 => 349,  151 => 346,  148 => 345,  145 => 344,  141 => 342,  139 => 341,  136 => 340,  134 => 252,  131 => 251,  129 => 242,  126 => 241,  124 => 205,  121 => 204,  116 => 202,  111 => 201,  108 => 200,  105 => 199,  103 => 198,  100 => 197,  98 => 33,  93 => 31,  86 => 26,  83 => 23,  77 => 22,  65 => 19,  54 => 15,  48 => 14,  33 => 12,);
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
/* */
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}{% endblock %}*/
/* */
/* */
/* {% block list_table %}*/
/*     {% block spinner %}*/
/*         {% include 'loading_spinner.html.twig' %}*/
/*     {% endblock %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-body table-responsive no-padding" id="table_id">*/
/* */
/*             <input type="hidden" class="visible-on-popup btn btn-green btn-list-search" value="Search">*/
/*             <input type="hidden" class="visible-on-popup btn btn-white btn-list-reset" value="Reset filters">*/
/*             {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*             {% block list_header %}*/
/*                 <script>*/
/*                     (function() {*/
/* */
/* */
/*                         var _init = function () {*/
/*                             var spinner = new Spinner('table_id');*/
/*                             spinner.create();*/
/*                             spinner.hide();*/
/* */
/*                             if ($('.modal-title').length !== 0) {*/
/*                                 var popUpButtons = $('.visible-on-popup');*/
/*                                 $.each(popUpButtons, function () {*/
/*                                     this.type="button";*/
/*                                 });*/
/*                             }*/
/* */
/*                             // bulk operations checkboxes*/
/* */
/*                             var listBatchCheckbox = $('#list_batch_checkbox');*/
/*                             var otherCheckboxes = listBatchCheckbox*/
/*                                             .closest('table')*/
/*                                             .find('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                             .not(listBatchCheckbox)*/
/*                                     ;*/
/*                             listBatchCheckbox.on('change', function () {*/
/*                                 if ($(this).is(':checked')) {*/
/*                                     otherCheckboxes*/
/*                                             .prop('checked', true)*/
/*                                             .trigger('change')*/
/*                                     ;*/
/*                                 } else {*/
/*                                     otherCheckboxes*/
/*                                             .prop('checked', false)*/
/*                                             .trigger('change')*/
/*                                     ;*/
/*                                 }*/
/*                             });*/
/* */
/*                             otherCheckboxes*/
/*                                     .on('change', function () {*/
/*                                         $(this)*/
/*                                                 .closest('tr')*/
/*                                                 .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                         ;*/
/*                                         var selectedCheckboxesCount = otherCheckboxes.filter(':checked').size();*/
/*                                         var selectedCheckboxesCountText = '';*/
/*                                         if (selectedCheckboxesCount == 0) {*/
/*                                             selectedCheckboxesCountText = 'No items selected';*/
/*                                         } else {*/
/*                                             if (selectedCheckboxesCount == 1) {*/
/*                                                 selectedCheckboxesCountText = '1 Item Selected';*/
/*                                             } else {*/
/*                                                 selectedCheckboxesCountText = selectedCheckboxesCount + ' Items Selected';*/
/*                                             }*/
/*                                         }*/
/*                                         $('.selected-items-count').text(selectedCheckboxesCountText);*/
/*                                     })*/
/*                                     .trigger('ifChanged')*/
/*                             ;*/
/* */
/*                             function searchButtonAction() {*/
/*                                 var sonataFilterForm = $('form.sonata-filter-form');*/
/*                                 spinner.show();*/
/* */
/*                                 $('.fake-filters').find('input.fake-filter-input, select.fake-filter-input').each(function() {*/
/*                                     var fakeFilterName = $(this).attr('name');*/
/*                                     var realFilterInput = sonataFilterForm.find('[name="' + fakeFilterName + '"]');*/
/*                                     if (realFilterInput.size()) {*/
/*                                         realFilterInput.val($(this).val()).trigger('change');*/
/*                                     } else { // try to handle date*/
/*                                         var realInputId = $(this).data('real-inpit-id');*/
/*                                         if (realInputId) {*/
/*                                             if ($(this).val()) {*/
/*                                                 var date = $(this).datepicker( "getDate" );*/
/*                                                 $('#' + realInputId + '_year').val(date.getFullYear()).trigger('change');*/
/*                                                 $('#' + realInputId + '_month').val(date.getMonth() + 1).trigger('change');*/
/*                                                 $('#' + realInputId + '_day').val(date.getDate()).trigger('change');*/
/*                                             }*/
/*                                         }*/
/*                                     }*/
/*                                 });*/
/*                                 sonataFilterForm.submit();/**/
/*                                 sonataFilterForm.off('submit');*/
/*                                 sonataFilterForm.trigger('submit');*//* */
/*                             }*/
/* */
/*                             function resetFiltersAction() {*/
/*                                 spinner.show();*/
/*                                 var sonataFilterForm = $('form.sonata-filter-form');*/
/*                                 console.log(sonataFilterForm);*/
/*                                 $( "[id^='filter_']" ).val( "" );*/
/*                                 sonataFilterForm.submit();*/
/*                             }*/
/* */
/*                             // top list filters*/
/* */
/*                             $('.table-sonata-list').each(function() {*/
/*                                 var filtersThead = $('<thead></thead>');*/
/*                                 var filtersTheadTr = $('<tr></tr>');*/
/*                                 var titlesThead = $(this).children('thead.title-head');*/
/*                                 titlesThead.find('th').each(function() {*/
/*                                     var th = $('<th></th>');*/
/*                                     if ($(this).is('[data-fieldname]')) {*/
/*                                         th.addClass('sonata-list-field-' + $(this).data('fieldname'));*/
/*                                         var realFilterInputId = 'filter_' + ($(this).data('fieldname').replace('.', '__')) + '_value';*/
/*                                         var realFilterInput = $('#' + realFilterInputId).not('div');*/
/*                                         //console.log(realFilterInputId);*/
/*                                         if (realFilterInput.size()) { // else - filter for this field exist*/
/*                                             var newFilterInput = realFilterInput.clone();*/
/*                                             newFilterInput*/
/*                                                     .addClass('fake-filter-input')*/
/*                                                     .css('margin', '0')*/
/*                                                     .appendTo(th)*/
/*                                             ;*/
/*                                             if (newFilterInput.prop("tagName") == 'select' || newFilterInput.prop("tagName") == 'SELECT') { // init select2*/
/*                                                 newFilterInput.addClass('light');*/
/*                                                 newFilterInput.select2();*/
/*                                             }*/
/*                                         }*/
/*                                     }*/
/*                                     th.appendTo(filtersTheadTr);*/
/*                                 });*/
/*                                 filtersTheadTr.appendTo(filtersThead);*/
/*                                 filtersThead.addClass('fake-filters').insertAfter(titlesThead);*/
/* */
/*                                 $('.fake-filter-input').on('keypress', function(e) {*/
/*                                     if (13 == e.keyCode) { // catch Enter key*/
/*                                         searchButtonAction();*/
/*                                         e.preventDefault();*/
/*                                     }*/
/*                                 });*/
/*                             });*/
/* */
/* */
/* */
/*                             // search button*/
/* */
/*                             $('.btn-list-search').on('click', function(e) {*/
/* */
/*                                 searchButtonAction();*/
/* */
/*                                 e.preventDefault();*/
/*                             });*/
/* */
/*                             // "reset filters" button*/
/* */
/*                             $('.btn-list-reset').on('click', function(e) {*/
/* */
/*                                 /*var resetUrl = $('form.sonata-filter-form button[type="submit"]').next().attr('href');*/
/*                                 if (resetUrl) {*/
/*                                     window.location = resetUrl;*/
/*                                 }*//* */
/*                                 resetFiltersAction();*/
/* */
/*                                 e.preventDefault();*/
/*                             });*/
/* */
/* */
/*                         };*/
/*                         $(document).ready(setTimeout(_init, 30));*/
/*                     })();*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             {% set batchactions = admin.batchactions %}*/
/*             {% if admin.datagrid.results|length > 0 %}*/
/*                 {% if admin.hasRoute('batch') %}*/
/*                     <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*                 {% endif %}*/
/*                     <table class="table table-sonata-list table-bordered table-striped custom-table-2">*/
/*                         {% block table_header %}*/
/*                             <thead class="title-head">*/
/*                                 <tr class="sonata-ba-list-field-header">*/
/*                                     {% for field_description in admin.list.elements %}*/
/*                                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                                               <input type="checkbox" id="list_batch_checkbox">*/
/*                                             </th>*/
/*                                         {% elseif field_description.getOption('code') == '_select' %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                         {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                             {# Action buttons disabled in ajax view! #}*/
/*                                         {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                             {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                         {% else %}*/
/*                                             {% set sortable = false %}*/
/*                                             {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                                 {% set sortable             = true %}*/
/*                                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% spaceless %}*/
/*                                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}" data-fieldname="{{ field_description.name }}">*/
/*                                                     {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                     {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                     {% if sortable %}</a>{% endif %}*/
/*                                                 </th>*/
/*                                             {% endspaceless %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_body %}*/
/*                             <tbody>*/
/*                                 {% for object in admin.datagrid.results %}*/
/*                                     <tr>*/
/*                                         {% include admin.getTemplate('inner_list_row') %}*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_footer %}*/
/*                             <tr>*/
/*                                 <th colspan="{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}">*/
/*                                     <div class="form-inline">*/
/*                                         {% if not app.request.isXmlHttpRequest %}*/
/*                                             {% if admin.hasRoute('batch') and batchactions|length > 0  %}*/
/*                                                 {% block batch %}*/
/*                                                     <script>*/
/*                                                         {% block batch_javascript %}*/
/*                                                             jQuery(document).ready(function ($) {*/
/*                                                                 $('#list_batch_checkbox').on('ifChanged', function () {*/
/*                                                                     $(this)*/
/*                                                                         .closest('table')*/
/*                                                                         .find('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                         .iCheck($(this).is(':checked') ? 'check' : 'uncheck')*/
/*                                                                     ;*/
/*                                                                 });*/
/* */
/*                                                                 $('td.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                     .on('ifChanged', function () {*/
/*                                                                         $(this)*/
/*                                                                             .closest('tr')*/
/*                                                                             .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                                                         ;*/
/*                                                                     })*/
/*                                                                     .trigger('ifChanged')*/
/*                                                                 ;*/
/*                                                             });*/
/*                                                         {% endblock %}*/
/*                                                     </script>*/
/* */
/*                                                     {% block batch_actions %}*/
/*                                                         <label class="checkbox" for="{{ admin.uniqid }}_all_elements">*/
/*                                                             <input type="checkbox" name="all_elements" id="{{ admin.uniqid }}_all_elements">*/
/*                                                             {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}*/
/*                                                              ({{ admin.datagrid.pager.nbresults }})*/
/*                                                         </label>*/
/* */
/*                                                         <select name="action" style="width: auto; height: auto">*/
/*                                                             {% for action, options in batchactions %}*/
/*                                                                 <option value="{{ action }}">{{ options.label }}</option>*/
/*                                                             {% endfor %}*/
/*                                                         </select>*/
/*                                                     {% endblock %}*/
/* */
/*                                                     <input type="submit" class="btn btn-small btn-primary" value="{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                 {% endblock %}*/
/*                                             {% endif %}*/
/* */
/*                                             <div class="pull-right">*/
/*                                                 {% if admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length %}*/
/*                                                     <div class="btn-group">*/
/*                                                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                             <i class="glyphicon glyphicon-export"></i>*/
/*                                                             {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                             <span class="caret"></span>*/
/*                                                         </button>*/
/*                                                         <ul class="dropdown-menu">*/
/*                                                             {% for format in admin.getExportFormats() %}*/
/*                                                                 <li>*/
/*                                                                     <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                                         <i class="glyphicon glyphicon-download"></i>*/
/*                                                                         {{ format|upper }}*/
/*                                                                     </a>*/
/*                                                                 <li>*/
/*                                                             {% endfor %}*/
/*                                                         </ul>*/
/*                                                     </div>*/
/* */
/*                                                     &nbsp;-&nbsp;*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% block pager_results %}*/
/*                                                     {% include admin.getTemplate('pager_results') %}*/
/*                                                 {% endblock %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </th>*/
/*                             </tr>*/
/* */
/*                             {% block pager_links %}*/
/*                                 {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                     {% include admin.getTemplate('pager_links') %}*/
/*                                 {% endif %}*/
/*                             {% endblock %}*/
/* */
/*                         {% endblock %}*/
/*                     </table>*/
/*                 {% if admin.hasRoute('batch') %}*/
/*                 </form>*/
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
/*     {% if admin.datagrid.filters  %}*/
/*         {% form_theme form "SonataAdminBundle:Form:filter_admin_fields.html.twig" %}*/
/*         <div class="box box-primary" style="display:none">*/
/*             <div class="box-header">*/
/*                 <h4 class="box-title filter_legend {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">{{ 'label_filters'|trans({}, 'SonataAdminBundle') }}</h4>*/
/*             </div>*/
/* */
/*             <div class="box-body">*/
/*                 <form class="sonata-filter-form {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }} " action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
/*                     {{ form_errors(form) }}*/
/*                         <div class="filter_container {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">*/
/*                             {% for filter in admin.datagrid.filters %}*/
/*                                 <div class="form-group">*/
/*                                     <label for="{{ form.children[filter.formName].children['value'].vars.id }}">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                     {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/*                                     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' sonata-filter-option')|trim}) %}*/
/* */
/*                                     {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/* */
/*                                     {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                             <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                             {% set foo = form.children['_page'].setRendered() %}*/
/*                             {{ form_rest(form) }}*/
/* */
/*                             <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                             <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">{{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                         </div>*/
/* */
/*                         {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                             <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                         {% endfor %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
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
