<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_edit.html.twig */
class __TwigTemplate_4179d4ea32ee66fd303952ae7ae67b16943887ee0ec1a8cb88096eeb7253bde9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

    ";
        // line 5
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : null)), "method")) {
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
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 102
            echo "              role=\"form\"
              action=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 105
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 106
            echo "              class=\"contact_card_edit_form\"
              >
            ";
            // line 108
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                // line 109
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 110
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

";
    }

    // line 114
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 115
        echo "                <div class=\"row\">
            ";
    }

    // line 118
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 119
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups", array()));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
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
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["field_name"], array(), "array"), 'row');
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
    }

    // line 147
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 148
        echo "                </div>
            ";
    }

    // line 153
    public function block_formactions($context, array $blocks = array())
    {
        // line 154
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 155
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isxmlhttprequest", array())) {
            // line 156
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
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
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode", array())) {
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
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                // line 169
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 171
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
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
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 176
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 179
                echo "
                            ";
                // line 180
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 181
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
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
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "edit"), "method")) {
                    // line 185
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 187
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
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
        return array (  426 => 193,  423 => 192,  417 => 190,  411 => 188,  408 => 187,  402 => 185,  399 => 184,  396 => 183,  388 => 181,  386 => 180,  383 => 179,  376 => 177,  371 => 176,  369 => 175,  366 => 174,  360 => 172,  358 => 171,  352 => 169,  349 => 168,  343 => 165,  339 => 163,  336 => 162,  333 => 161,  327 => 159,  321 => 157,  318 => 156,  316 => 155,  313 => 154,  310 => 153,  305 => 148,  302 => 147,  298 => 145,  290 => 142,  286 => 139,  280 => 138,  274 => 136,  271 => 135,  267 => 134,  264 => 133,  258 => 131,  256 => 130,  252 => 128,  246 => 124,  238 => 120,  233 => 119,  230 => 118,  225 => 115,  222 => 114,  215 => 198,  212 => 197,  208 => 195,  206 => 153,  201 => 151,  198 => 150,  196 => 147,  193 => 146,  191 => 118,  188 => 117,  186 => 114,  183 => 113,  177 => 110,  174 => 109,  172 => 108,  168 => 106,  164 => 105,  157 => 103,  154 => 102,  150 => 101,  147 => 100,  59 => 13,  57 => 12,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  41 => 5,  35 => 3,  32 => 2,  11 => 1,);
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
