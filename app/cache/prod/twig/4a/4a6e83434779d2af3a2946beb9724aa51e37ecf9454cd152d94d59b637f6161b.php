<?php

/* ZesharCRMLeadScoringBundle:ScoringCRUD:custom_edit_form.html.twig */
class __TwigTemplate_6a9dae189cc6c93095bce8f59186835236e260c95cd9cf4909d02eb0ed0cbd83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "ZesharCRMLeadScoringBundle:ScoringCRUD:custom_edit_form.html.twig", 1);
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
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
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
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))) ? ("scoring") : ("create"));
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
            echo "        <form
              ";
            // line 13
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"

                ";
            // line 16
            if ((isset($context["lead"]) ? $context["lead"] : null)) {
                // line 17
                echo "                    action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "lead" => $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "lead", array()), "id", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
                echo "
                ";
            } elseif (            // line 18
(isset($context["opportunity"]) ? $context["opportunity"] : null)) {
                // line 19
                echo "                    action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "opportunity" => $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "opportunity", array()), "id", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
                echo "
                ";
            }
            // line 21
            echo "              method=\"POST\"
              ";
            // line 22
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 23
            echo "              >
            ";
            // line 24
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                // line 25
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 26
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                </div>
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 33
            echo "
            ";
            // line 34
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 80
            echo "
            ";
            // line 81
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 84
            echo "


            ";
            // line 87
            $this->displayBlock('formactions', $context, $blocks);
            // line 125
            echo "        </form>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

";
    }

    // line 30
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 31
        echo "                <div class=\"row\">
            ";
    }

    // line 34
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 35
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 36
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["form_group"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["form_group"], "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 44
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 63
            echo "
                                        ";
            // line 64
            if ((isset($context["firstCriteria"]) ? $context["firstCriteria"] : null)) {
                // line 65
                echo "                                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "criteria", array()), 'label');
                echo "
                                            <ul style=\"margin-left:20px\">
                                                ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["firstCriteria"]) ? $context["firstCriteria"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    echo "                                                    ";
                    echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["item"], 1 => (isset($context["form"]) ? $context["form"] : null)), "method");
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                                            </ul>
                                        ";
            }
            // line 72
            echo "                                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
                                    </div>
                                </div>
                            ";
            // line 76
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            ";
    }

    // line 81
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 82
        echo "                </div>
            ";
    }

    // line 87
    public function block_formactions($context, array $blocks = array())
    {
        // line 88
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 89
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isxmlhttprequest", array())) {
            // line 90
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                // line 91
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 93
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 95
            echo "                    ";
        } else {
            // line 96
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode", array())) {
                // line 97
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 102
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                // line 103
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 105
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 106
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 109
                echo "
                            ";
                // line 110
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 111
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 113
                echo "                        ";
            } else {
                // line 114
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "edit"), "method")) {
                    // line 115
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 117
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
                    // line 118
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 120
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 122
            echo "                    ";
        }
        // line 123
        echo "                </div>
            ";
    }

    // line 46
    public function getrecursiveCriteria($__criteria__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "criteria" => $__criteria__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "                                            <li>
                                                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "criteria", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 49
                echo "                                                    ";
                if (($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "id", array()) == $this->getAttribute($this->getAttribute($context["value"], "vars", array()), "value", array()))) {
                    // line 50
                    echo "                                                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["value"], 'widget');
                    echo "
                                                    ";
                }
                // line 52
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "name", array()), "html", null, true);
            echo "
                                                ";
            // line 54
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "children", array()))) {
                // line 55
                echo "                                                    <ul style=\"margin-left:20px\">
                                                        ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 57
                    echo "                                                            ";
                    echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["child"], 1 => (isset($context["form"]) ? $context["form"] : null)), "method");
                    echo "
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                                                    </ul>
                                                ";
            }
            // line 61
            echo "                                            </li>
                                        ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ZesharCRMLeadScoringBundle:ScoringCRUD:custom_edit_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 61,  401 => 59,  392 => 57,  388 => 56,  385 => 55,  383 => 54,  378 => 53,  372 => 52,  366 => 50,  363 => 49,  359 => 48,  356 => 47,  343 => 46,  338 => 123,  335 => 122,  329 => 120,  323 => 118,  320 => 117,  314 => 115,  311 => 114,  308 => 113,  300 => 111,  298 => 110,  295 => 109,  288 => 107,  283 => 106,  281 => 105,  275 => 103,  272 => 102,  266 => 99,  262 => 97,  259 => 96,  256 => 95,  250 => 93,  244 => 91,  241 => 90,  239 => 89,  236 => 88,  233 => 87,  228 => 82,  225 => 81,  221 => 79,  213 => 76,  206 => 72,  202 => 70,  193 => 68,  189 => 67,  183 => 65,  181 => 64,  178 => 63,  174 => 44,  168 => 40,  160 => 36,  155 => 35,  152 => 34,  147 => 31,  144 => 30,  137 => 128,  134 => 127,  130 => 125,  128 => 87,  123 => 84,  121 => 81,  118 => 80,  116 => 34,  113 => 33,  111 => 30,  108 => 29,  102 => 26,  99 => 25,  97 => 24,  94 => 23,  90 => 22,  87 => 21,  79 => 19,  77 => 18,  70 => 17,  68 => 16,  64 => 14,  60 => 13,  57 => 12,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  41 => 5,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* {% block form %}*/
/*     {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*     {% set url = admin.id(object) is not null ? 'scoring' : 'create' %}*/
/* */
/*     {% if not admin.hasRoute(url)%}*/
/*         <div>*/
/*             {{ "form_not_available"|trans({}, "SonataAdminBundle") }}*/
/*         </div>*/
/*     {% else %}*/
/*         <form*/
/*               {% if admin_pool.getOption('form_type') == 'horizontal' %}class="form-horizontal"{% endif %}*/
/*               role="form"*/
/* */
/*                 {% if lead %}*/
/*                     action="{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'lead' : object.lead.id, 'subclass': app.request.get('subclass')}) }}" {{ form_enctype(form) }}*/
/*                 {% elseif opportunity %}*/
/*                     action="{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'opportunity' : object.opportunity.id, 'subclass': app.request.get('subclass')}) }}" {{ form_enctype(form) }}*/
/*                 {% endif %}*/
/*               method="POST"*/
/*               {% if not admin_pool.getOption('html5_validate') %}novalidate="novalidate"{% endif %}*/
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
/*                                         {% macro recursiveCriteria(criteria,form) %}*/
/*                                             <li>*/
/*                                                 {% for value in form.criteria %}*/
/*                                                     {% if criteria.id == value.vars.value%}*/
/*                                                         {{ form_widget(value) }}*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                                 {{ criteria.name }}*/
/*                                                 {% if criteria.children|length %}*/
/*                                                     <ul style="margin-left:20px">*/
/*                                                         {% for child in criteria.children %}*/
/*                                                             {{ _self.recursiveCriteria(child,form) }}*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 {% endif %}*/
/*                                             </li>*/
/*                                         {% endmacro %}*/
/* */
/*                                         {% if firstCriteria %}*/
/*                                             {{ form_label(form.criteria) }}*/
/*                                             <ul style="margin-left:20px">*/
/*                                                 {% for item in firstCriteria %}*/
/*                                                     {{ _self.recursiveCriteria(item,form) }}*/
/*                                                 {% endfor %}*/
/*                                             </ul>*/
/*                                         {% endif %}*/
/*                                         {{ form_rest(form) }}*/
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
/* */
/* */
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
/* */
