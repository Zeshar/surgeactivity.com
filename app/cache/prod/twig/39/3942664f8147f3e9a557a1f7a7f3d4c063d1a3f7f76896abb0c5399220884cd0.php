<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list_activity.html.twig */
class __TwigTemplate_9201a26dade911144a272de1aa546ee19be7f2b3cb8046a979207313f9caa11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig", "ZesharCRMCoreBundle:ActivityCRUD:list_activity.html.twig", 12);
        $this->blocks = array(
            'custom_data' => array($this, 'block_custom_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_custom_data($context, array $blocks = array())
    {
        // line 15
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", array());
        // line 16
        echo "<div class=\"box box-primary\">
    <div class=\"box-body table-responsive no-padding\">
    <table class=\"table table-bordered table-striped\">
        <thead>
        <tr class=\"sonata-ba-list-field-header\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 22
            echo "                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 23
                echo "                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                        <input type=\"checkbox\" id=\"list_batch_checkbox\">
                    </th>
                ";
            } elseif (($this->getAttribute(            // line 26
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 27
                echo "                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                ";
            } else {
                // line 29
                echo "                    ";
                $context["sortable"] = false;
                // line 30
                echo "
                        <th class=\"sonata-ba-list-field-header-";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo "\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                        </th>

                ";
            }
            // line 36
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
            // line 41
            echo "            <tr>
                ";
            // line 42
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"), "ZesharCRMCoreBundle:ActivityCRUD:list_activity.html.twig", 42)->display($context);
            // line 43
            echo "            </tr>
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
        // line 45
        echo "        </tbody>
    </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ActivityCRUD:list_activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  108 => 43,  106 => 42,  103 => 41,  86 => 40,  81 => 37,  75 => 36,  68 => 32,  64 => 31,  61 => 30,  58 => 29,  54 => 27,  52 => 26,  47 => 23,  44 => 22,  40 => 21,  33 => 16,  31 => 15,  28 => 14,  11 => 12,);
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
/* {% extends "ZesharCRMCoreBundle:CRUD:base_list_for_activity.html.twig" %}*/
/* */
/* {% block custom_data %}*/
/* {% set batchactions = admin.batchactions %}*/
/* <div class="box box-primary">*/
/*     <div class="box-body table-responsive no-padding">*/
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*         <tr class="sonata-ba-list-field-header">*/
/*             {% for field_description in admin.list.elements %}*/
/*                 {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                     <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                         <input type="checkbox" id="list_batch_checkbox">*/
/*                     </th>*/
/*                 {% elseif field_description.getOption('code') == '_select' %}*/
/*                     <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                 {% else %}*/
/*                     {% set sortable = false %}*/
/* */
/*                         <th class="sonata-ba-list-field-header-{{ field_description.type}}">*/
/*                             {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                         </th>*/
/* */
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for object in entities %}*/
/*             <tr>*/
/*                 {% include admin.getTemplate('inner_list_row') %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
