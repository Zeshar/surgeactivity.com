<?php

/* ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig */
class __TwigTemplate_eee80e08d817351224d604bb74bed637da1837073dcf1060a7e91d7bb814e156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'custom_data' => array($this, 'block_custom_data'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_710783a8c6d298492f7de9bc8d294dd2d768d34d7e17b22eacae1c1d3032b788 = $this->env->getExtension("native_profiler");
        $__internal_710783a8c6d298492f7de9bc8d294dd2d768d34d7e17b22eacae1c1d3032b788->enter($__internal_710783a8c6d298492f7de9bc8d294dd2d768d34d7e17b22eacae1c1d3032b788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_710783a8c6d298492f7de9bc8d294dd2d768d34d7e17b22eacae1c1d3032b788->leave($__internal_710783a8c6d298492f7de9bc8d294dd2d768d34d7e17b22eacae1c1d3032b788_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cfa464093ba1ae56178e368f127bddc6cc1e9dc4e550491e653b548f0350df6e = $this->env->getExtension("native_profiler");
        $__internal_cfa464093ba1ae56178e368f127bddc6cc1e9dc4e550491e653b548f0350df6e->enter($__internal_cfa464093ba1ae56178e368f127bddc6cc1e9dc4e550491e653b548f0350df6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig", 15)->display($context);
        echo "</li>
";
        
        $__internal_cfa464093ba1ae56178e368f127bddc6cc1e9dc4e550491e653b548f0350df6e->leave($__internal_cfa464093ba1ae56178e368f127bddc6cc1e9dc4e550491e653b548f0350df6e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3185331fa6589025baa302f38d84f8186a245e196fa42c8c9a79ff15ca69315d = $this->env->getExtension("native_profiler");
        $__internal_3185331fa6589025baa302f38d84f8186a245e196fa42c8c9a79ff15ca69315d->enter($__internal_3185331fa6589025baa302f38d84f8186a245e196fa42c8c9a79ff15ca69315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        
        $__internal_3185331fa6589025baa302f38d84f8186a245e196fa42c8c9a79ff15ca69315d->leave($__internal_3185331fa6589025baa302f38d84f8186a245e196fa42c8c9a79ff15ca69315d_prof);

    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_6b01f7cd911c82f501f2abe96e7e45a4d99c9ca9abdf1f11ee79a21858f9c144 = $this->env->getExtension("native_profiler");
        $__internal_6b01f7cd911c82f501f2abe96e7e45a4d99c9ca9abdf1f11ee79a21858f9c144->enter($__internal_6b01f7cd911c82f501f2abe96e7e45a4d99c9ca9abdf1f11ee79a21858f9c144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 21
        echo "    ";
        $this->displayBlock('custom_data', $context, $blocks);
        
        $__internal_6b01f7cd911c82f501f2abe96e7e45a4d99c9ca9abdf1f11ee79a21858f9c144->leave($__internal_6b01f7cd911c82f501f2abe96e7e45a4d99c9ca9abdf1f11ee79a21858f9c144_prof);

    }

    public function block_custom_data($context, array $blocks = array())
    {
        $__internal_37880a13b1386ca67bc368ec38745b17cf9f45234842fffec007e064dcc4c32e = $this->env->getExtension("native_profiler");
        $__internal_37880a13b1386ca67bc368ec38745b17cf9f45234842fffec007e064dcc4c32e->enter($__internal_37880a13b1386ca67bc368ec38745b17cf9f45234842fffec007e064dcc4c32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_data"));

        // line 22
        echo "    ";
        
        $__internal_37880a13b1386ca67bc368ec38745b17cf9f45234842fffec007e064dcc4c32e->leave($__internal_37880a13b1386ca67bc368ec38745b17cf9f45234842fffec007e064dcc4c32e_prof);

    }

    // line 25
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_6bb83797c9168b756fd53be7783ed3c9c9dcbc8d70026f95b47eb835eacc3afc = $this->env->getExtension("native_profiler");
        $__internal_6bb83797c9168b756fd53be7783ed3c9c9dcbc8d70026f95b47eb835eacc3afc->enter($__internal_6bb83797c9168b756fd53be7783ed3c9c9dcbc8d70026f95b47eb835eacc3afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 26
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 27
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 28
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 30
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 34
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 36
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 38
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 40
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 41
                echo "                                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " sonata-filter-option"))));
                // line 42
                echo "
                                    ";
                // line 43
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "

                                    ";
                // line 45
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 51
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 52
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 60
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
            // line 62
            echo "                </form>
            </div>
        </div>

    ";
        }
        
        $__internal_6bb83797c9168b756fd53be7783ed3c9c9dcbc8d70026f95b47eb835eacc3afc->leave($__internal_6bb83797c9168b756fd53be7783ed3c9c9dcbc8d70026f95b47eb835eacc3afc_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 62,  195 => 60,  191 => 59,  183 => 56,  178 => 54,  172 => 52,  170 => 51,  165 => 48,  156 => 45,  151 => 43,  148 => 42,  145 => 41,  143 => 40,  137 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  116 => 34,  107 => 30,  103 => 28,  100 => 27,  97 => 26,  91 => 25,  84 => 22,  71 => 21,  65 => 20,  53 => 18,  43 => 15,  37 => 14,  22 => 12,);
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
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}{% endblock %}*/
/* */
/* {% block list_table %}*/
/*     {% block custom_data %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form "SonataAdminBundle:Form:filter_admin_fields.html.twig" %}*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h4 class="box-title filter_legend {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">{{ 'label_filters'|trans({}, 'SonataAdminBundle') }}</h4>*/
/*             </div>*/
/* */
/*             <div class="box-body">*/
/*                 <form class="sonata-filter-form {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
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
/* */
