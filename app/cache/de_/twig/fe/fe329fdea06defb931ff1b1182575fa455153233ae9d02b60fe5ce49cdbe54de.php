<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_edit.html.twig */
class __TwigTemplate_3eb985041c6b00726633e05cd57cbe8462f0602127660ccd3b065f92bec4e4b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_edit.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bce38f325d509cb4015afe8b7b6927411d29bbca72f5a35911a36bc30b30bfc = $this->env->getExtension("native_profiler");
        $__internal_5bce38f325d509cb4015afe8b7b6927411d29bbca72f5a35911a36bc30b30bfc->enter($__internal_5bce38f325d509cb4015afe8b7b6927411d29bbca72f5a35911a36bc30b30bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bce38f325d509cb4015afe8b7b6927411d29bbca72f5a35911a36bc30b30bfc->leave($__internal_5bce38f325d509cb4015afe8b7b6927411d29bbca72f5a35911a36bc30b30bfc_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_6192e70831552b256b61d33e88effe9d1605214acb3363fd3a3b6c5be6d41ed6 = $this->env->getExtension("native_profiler");
        $__internal_6192e70831552b256b61d33e88effe9d1605214acb3363fd3a3b6c5be6d41ed6->enter($__internal_6192e70831552b256b61d33e88effe9d1605214acb3363fd3a3b6c5be6d41ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 5
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        ";
            // line 13
            echo "        <style>
                div[id^=field_container_][id\$=_contacts] table tbody tr [class*=-donotEmail] select { display: none; }
                div[id^=field_container_][id\$=_contacts] table tbody tr [class*=-name] input { display: none; }
        </style>
        <script type=\"text/javascript\">
                (function(\$) {
                    
                    \$(document).ready(function() {
                        var typeSelectSelector = 'div[id^=field_container_][id\$=_contacts] table tbody tr [class*=_contacts-type] select';
//                        console.log(\$('div[id\$=_type] div select'));

                        var networkSelect =  \$('select[id\$=_networkType]');
                        var networkLabel =  \$('.networkTypeLabel');

                        \$(document).on('change', 'div[id\$=_type] div select', function(){
                            if (\$(this).find(\":selected\").text() == \"Network\") {
                                console.log('jaja');
                                networkSelect.show();
                                networkLabel.show();
                            } else {
                                networkSelect.prop('selectedIndex',0);
                                networkSelect.hide();
                                networkLabel.hide();
                            }
                        });
                        
                        var handleContactsRow = function() {
                            console.log(\$(this));
                            var that = this; // to access current context in helpers
                            
                            // helpers to show/hide optional fields
                            var hideContactStatus = function() {
                                \$(that).parent().siblings('[class*=-donotCall]').children('select').val('').trigger('change').hide();
                            };
                            var showContactStatus = function() {
                                \$(that).parent().siblings('[class*=-donotCall]').children('select').show();
                            };
                            var hideDNE = function() {
                                \$(that).parent().siblings('[class*=-donotEmail]').children('select').val('').trigger('change').hide();
                            };
                            var showDNE = function() {
                                \$(that).parent().siblings('[class*=-donotEmail]').children('select').show();
                            };
                            var hideDNC = function() {
                                \$(that).parent().siblings('[class*=-dnc]').children('select').val('').trigger('change').hide();
                            };
                            var showDNC = function() {
                                \$(that).parent().siblings('[class*=-dnc]').children('select').show();
                            };
                            var hideName = function() {
                                \$(that).parent().siblings('[class*=-name]').children('input').val('').trigger('change').hide();
                            };
                            var showName = function() {
                                \$(that).parent().siblings('[class*=-name]').children('input').show();
                            };
                            
                            var selectedVal = \$(this).val();
                            
                            if (selectedVal == 1 || selectedVal == 2 || selectedVal == 3) { // 1,2,3 - phone contact types
                                showContactStatus();
                                showDNC();
                            } else {
                                hideContactStatus();
                                hideDNC();
                            }
                            
                            if (selectedVal == 4) { // 4 - email contact type
                                showDNE();
                            } else {
                                hideDNE();
                            }
                            
                            if (selectedVal == 7) { // 7 - custom contact type
                                showName();
                            } else {
                                hideName();
                            }
                            
                        };
                        
                        \$(document).on('change', typeSelectSelector, handleContactsRow);
                        \$(typeSelectSelector).each(handleContactsRow);
                        
                    });
                })(jQuery);
        </script>
        ";
            // line 100
            echo "        <form
              ";
            // line 101
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 102
            echo "              role=\"form\"
              action=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 105
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 106
            echo "              class=\"contact_card_edit_form\"
              >
            ";
            // line 108
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                // line 109
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 110
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 113
            echo "
            ";
            // line 114
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 117
            echo "
            ";
            // line 118
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 146
            echo "
            ";
            // line 147
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 150
            echo "                
            ";
            // line 151
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 153
            $this->displayBlock('formactions', $context, $blocks);
            // line 195
            echo "        </form>
    ";
        }
        // line 197
        echo "
    ";
        // line 198
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_6192e70831552b256b61d33e88effe9d1605214acb3363fd3a3b6c5be6d41ed6->leave($__internal_6192e70831552b256b61d33e88effe9d1605214acb3363fd3a3b6c5be6d41ed6_prof);

    }

    // line 114
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_eb7969dead128def6ea55fc0e2856a6774fad1af262c6d07f935b78fc71c78a1 = $this->env->getExtension("native_profiler");
        $__internal_eb7969dead128def6ea55fc0e2856a6774fad1af262c6d07f935b78fc71c78a1->enter($__internal_eb7969dead128def6ea55fc0e2856a6774fad1af262c6d07f935b78fc71c78a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 115
        echo "                <div class=\"row\">
            ";
        
        $__internal_eb7969dead128def6ea55fc0e2856a6774fad1af262c6d07f935b78fc71c78a1->leave($__internal_eb7969dead128def6ea55fc0e2856a6774fad1af262c6d07f935b78fc71c78a1_prof);

    }

    // line 118
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_819af67a8b8201e341087669a6f22026b4d820c720ebd408c556720d89ea6057 = $this->env->getExtension("native_profiler");
        $__internal_819af67a8b8201e341087669a6f22026b4d820c720ebd408c556720d89ea6057->enter($__internal_819af67a8b8201e341087669a6f22026b4d820c720ebd408c556720d89ea6057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 119
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 120
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["form_group"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["form_group"], "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 128
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 130
            if (($this->getAttribute($context["form_group"], "description", array()) != false)) {
                // line 131
                echo "                                            <p>";
                echo $this->getAttribute($context["form_group"], "description", array());
                echo "</p>
                                        ";
            }
            // line 133
            echo "
                                        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 135
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 136
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                    echo "
                                            ";
                }
                // line 138
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                                    </div>
                                </div>
                            ";
            // line 142
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            ";
        
        $__internal_819af67a8b8201e341087669a6f22026b4d820c720ebd408c556720d89ea6057->leave($__internal_819af67a8b8201e341087669a6f22026b4d820c720ebd408c556720d89ea6057_prof);

    }

    // line 147
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_51b5b291c2e6278d8d9702fea4e5ff7f33f9f487fd37c4426518c432ffa4e341 = $this->env->getExtension("native_profiler");
        $__internal_51b5b291c2e6278d8d9702fea4e5ff7f33f9f487fd37c4426518c432ffa4e341->enter($__internal_51b5b291c2e6278d8d9702fea4e5ff7f33f9f487fd37c4426518c432ffa4e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 148
        echo "                </div>
            ";
        
        $__internal_51b5b291c2e6278d8d9702fea4e5ff7f33f9f487fd37c4426518c432ffa4e341->leave($__internal_51b5b291c2e6278d8d9702fea4e5ff7f33f9f487fd37c4426518c432ffa4e341_prof);

    }

    // line 153
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_5a968ecbdb331c60ba247fa61b1f530935632fb3a42bb8b41cce93d16123ada8 = $this->env->getExtension("native_profiler");
        $__internal_5a968ecbdb331c60ba247fa61b1f530935632fb3a42bb8b41cce93d16123ada8->enter($__internal_5a968ecbdb331c60ba247fa61b1f530935632fb3a42bb8b41cce93d16123ada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 154
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 155
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 156
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 157
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 159
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 161
            echo "                    ";
        } else {
            // line 162
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 163
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 168
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 169
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 171
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 172
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 174
                echo "
                            ";
                // line 175
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 176
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 179
                echo "
                            ";
                // line 180
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 181
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 183
                echo "                        ";
            } else {
                // line 184
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method")) {
                    // line 185
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 187
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 188
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 190
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 192
            echo "                    ";
        }
        // line 193
        echo "                </div>
            ";
        
        $__internal_5a968ecbdb331c60ba247fa61b1f530935632fb3a42bb8b41cce93d16123ada8->leave($__internal_5a968ecbdb331c60ba247fa61b1f530935632fb3a42bb8b41cce93d16123ada8_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 193,  456 => 192,  450 => 190,  444 => 188,  441 => 187,  435 => 185,  432 => 184,  429 => 183,  421 => 181,  419 => 180,  416 => 179,  409 => 177,  404 => 176,  402 => 175,  399 => 174,  393 => 172,  391 => 171,  385 => 169,  382 => 168,  376 => 165,  372 => 163,  369 => 162,  366 => 161,  360 => 159,  354 => 157,  351 => 156,  349 => 155,  346 => 154,  340 => 153,  332 => 148,  326 => 147,  319 => 145,  311 => 142,  307 => 139,  301 => 138,  295 => 136,  292 => 135,  288 => 134,  285 => 133,  279 => 131,  277 => 130,  273 => 128,  267 => 124,  259 => 120,  254 => 119,  248 => 118,  240 => 115,  234 => 114,  224 => 198,  221 => 197,  217 => 195,  215 => 153,  210 => 151,  207 => 150,  205 => 147,  202 => 146,  200 => 118,  197 => 117,  195 => 114,  192 => 113,  186 => 110,  183 => 109,  181 => 108,  177 => 106,  173 => 105,  166 => 103,  163 => 102,  159 => 101,  156 => 100,  68 => 13,  66 => 12,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* {% block form %}*/
/*     {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*     {% set url = admin.id(object) is not null ? 'edit' : 'create' %}*/
/* */
/*     {% if not admin.hasRoute(url)%}*/
/*         <div>*/
/*             {{ "form_not_available"|trans({}, "SonataAdminBundle") }}*/
/*         </div>*/
/*     {% else %}*/
/*         {# some styles and javascript for dynamic fields #}*/
/*         <style>*/
/*                 div[id^=field_container_][id$=_contacts] table tbody tr [class*=-donotEmail] select { display: none; }*/
/*                 div[id^=field_container_][id$=_contacts] table tbody tr [class*=-name] input { display: none; }*/
/*         </style>*/
/*         <script type="text/javascript">*/
/*                 (function($) {*/
/*                     */
/*                     $(document).ready(function() {*/
/*                         var typeSelectSelector = 'div[id^=field_container_][id$=_contacts] table tbody tr [class*=_contacts-type] select';*/
/* //                        console.log($('div[id$=_type] div select'));*/
/* */
/*                         var networkSelect =  $('select[id$=_networkType]');*/
/*                         var networkLabel =  $('.networkTypeLabel');*/
/* */
/*                         $(document).on('change', 'div[id$=_type] div select', function(){*/
/*                             if ($(this).find(":selected").text() == "Network") {*/
/*                                 console.log('jaja');*/
/*                                 networkSelect.show();*/
/*                                 networkLabel.show();*/
/*                             } else {*/
/*                                 networkSelect.prop('selectedIndex',0);*/
/*                                 networkSelect.hide();*/
/*                                 networkLabel.hide();*/
/*                             }*/
/*                         });*/
/*                         */
/*                         var handleContactsRow = function() {*/
/*                             console.log($(this));*/
/*                             var that = this; // to access current context in helpers*/
/*                             */
/*                             // helpers to show/hide optional fields*/
/*                             var hideContactStatus = function() {*/
/*                                 $(that).parent().siblings('[class*=-donotCall]').children('select').val('').trigger('change').hide();*/
/*                             };*/
/*                             var showContactStatus = function() {*/
/*                                 $(that).parent().siblings('[class*=-donotCall]').children('select').show();*/
/*                             };*/
/*                             var hideDNE = function() {*/
/*                                 $(that).parent().siblings('[class*=-donotEmail]').children('select').val('').trigger('change').hide();*/
/*                             };*/
/*                             var showDNE = function() {*/
/*                                 $(that).parent().siblings('[class*=-donotEmail]').children('select').show();*/
/*                             };*/
/*                             var hideDNC = function() {*/
/*                                 $(that).parent().siblings('[class*=-dnc]').children('select').val('').trigger('change').hide();*/
/*                             };*/
/*                             var showDNC = function() {*/
/*                                 $(that).parent().siblings('[class*=-dnc]').children('select').show();*/
/*                             };*/
/*                             var hideName = function() {*/
/*                                 $(that).parent().siblings('[class*=-name]').children('input').val('').trigger('change').hide();*/
/*                             };*/
/*                             var showName = function() {*/
/*                                 $(that).parent().siblings('[class*=-name]').children('input').show();*/
/*                             };*/
/*                             */
/*                             var selectedVal = $(this).val();*/
/*                             */
/*                             if (selectedVal == 1 || selectedVal == 2 || selectedVal == 3) { // 1,2,3 - phone contact types*/
/*                                 showContactStatus();*/
/*                                 showDNC();*/
/*                             } else {*/
/*                                 hideContactStatus();*/
/*                                 hideDNC();*/
/*                             }*/
/*                             */
/*                             if (selectedVal == 4) { // 4 - email contact type*/
/*                                 showDNE();*/
/*                             } else {*/
/*                                 hideDNE();*/
/*                             }*/
/*                             */
/*                             if (selectedVal == 7) { // 7 - custom contact type*/
/*                                 showName();*/
/*                             } else {*/
/*                                 hideName();*/
/*                             }*/
/*                             */
/*                         };*/
/*                         */
/*                         $(document).on('change', typeSelectSelector, handleContactsRow);*/
/*                         $(typeSelectSelector).each(handleContactsRow);*/
/*                         */
/*                     });*/
/*                 })(jQuery);*/
/*         </script>*/
/*         {# end js #}*/
/*         <form*/
/*               {% if admin_pool.getOption('form_type') == 'horizontal' %}class="form-horizontal"{% endif %}*/
/*               role="form"*/
/*               action="{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}" {{ form_enctype(form) }}*/
/*               method="POST"*/
/*               {% if not admin_pool.getOption('html5_validate') %}novalidate="novalidate"{% endif %}*/
/*               class="contact_card_edit_form"*/
/*               >*/
/*             {% if form.vars.errors|length > 0 %}*/
/*                 <div class="sonata-ba-form-error">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% block sonata_pre_fieldsets %}*/
/*                 <div class="row">*/
/*             {% endblock %}*/
/* */
/*             {% block sonata_tab_content %}*/
/*                 {% for name, form_group in admin.formgroups %}*/
/*                     <div class="{{ form_group.class|default('col-md-12') }}">*/
/*                         <div class="box box-success">*/
/*                             <div class="box-header">*/
/*                                 <h4 class="box-title">*/
/*                                     {{ admin.trans(name, {}, form_group.translation_domain) }}*/
/*                                 </h4>*/
/*                             </div>*/
/*                             {#<div class="box{% if loop.first %} in{% endif %}" id="{{ admin.uniqid }}_{{ loop.index }}">#}*/
/*                                 <div class="box-body">*/
/*                                     <div class="sonata-ba-collapsed-fields">*/
/*                                         {% if form_group.description != false %}*/
/*                                             <p>{{ form_group.description|raw }}</p>*/
/*                                         {% endif %}*/
/* */
/*                                         {% for field_name in form_group.fields %}*/
/*                                             {% if admin.formfielddescriptions[field_name] is defined %}*/
/*                                                 {{ form_row(form[field_name])}}*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {#</div>#}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endblock %}*/
/* */
/*             {% block sonata_post_fieldsets %}*/
/*                 </div>*/
/*             {% endblock %}*/
/*                 */
/*             {{ form_rest(form) }}*/
/* */
/*             {% block formactions %}*/
/*                 <div class="well well-small form-actions">*/
/*                     {% if app.request.isxmlhttprequest %}*/
/*                         {% if admin.id(object) is not null %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_update"><i class="fa fa-save"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% else %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_create"><i class="fa fa-plus-circle"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {% if admin.supportsPreviewMode %}*/
/*                             <button class="btn btn-info persist-preview" name="btn_preview" type="submit">*/
/*                                 <i class="fa fa-eye"></i>*/
/*                                 {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}*/
/*                             </button>*/
/*                         {% endif %}*/
/*                         {% if admin.id(object) is not null %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_update_and_edit"><i class="fa fa-save"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                             {% if admin.hasroute('list') %}*/
/*                                 <button type="submit" class="btn btn-success" name="btn_update_and_list"><i class="fa fa-save"></i> <i class="fa fa-list"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/* */
/*                             {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}*/
/*                                 {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/*                                 <a class="btn btn-danger" href="{{ admin.generateObjectUrl('delete', object) }}"><i class="fa fa-minus-circle"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                             {% endif %}*/
/* */
/*                             {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}*/
/*                                 <a class="btn btn-info" href="{{ admin.generateObjectUrl('acl', object) }}"><i class="fa fa-users"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if admin.hasroute('edit') %}*/
/*                                 <button class="btn btn-success" type="submit" name="btn_create_and_edit"><i class="fa fa-save"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/*                             {% if admin.hasroute('list') %}*/
/*                                 <button type="submit" class="btn btn-success" name="btn_create_and_list"><i class="fa fa-save"></i> <i class="fa fa-list"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/*                             <button class="btn btn-success" type="submit" name="btn_create_and_create"><i class="fa fa-plus-circle"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endblock formactions %}*/
/*         </form>*/
/*     {% endif%}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}*/
/* */
/* {% endblock %}*/
