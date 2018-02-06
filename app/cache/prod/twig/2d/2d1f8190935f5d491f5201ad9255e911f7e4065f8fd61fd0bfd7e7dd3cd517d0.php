<?php

/* ZesharCRMLeadScoringBundle:ScoringCRUD:scoring.html.twig */
class __TwigTemplate_339495576c6312a4e8252954244425feb6190b3b89a8f66919ac49bf4dbcb58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMLeadScoringBundle:ScoringCRUD:scoring.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle::sonata_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</a></li>
    <li class=\"active\">Scoring Page for ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</li>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    <table class=\"table table-bordered\">
        <thead>
        <tr class=\"sonata-ba-view-title\">
            <th colspan=\"2\">
                Scoring Criteria:
            </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "criteria", array()), 'label');
        echo "</td>
                <td>
                    ";
        // line 39
        echo "
                    ";
        // line 40
        if ((isset($context["firstCriteria"]) ? $context["firstCriteria"] : null)) {
            // line 41
            echo "                        <ul style=\"margin-left:20px\">
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["firstCriteria"]) ? $context["firstCriteria"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "                                ";
                echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["item"], 1 => (isset($context["form"]) ? $context["form"] : null)), "method");
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        </ul>
                    ";
        }
        // line 47
        echo "                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leadScoring"]) ? $context["leadScoring"] : null), "total", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget');
        echo "
    ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    // line 22
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
            // line 23
            echo "                        <li>
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "criteria", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 25
                echo "                                ";
                if (($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "id", array()) == $this->getAttribute($this->getAttribute($context["value"], "vars", array()), "value", array()))) {
                    // line 26
                    echo "                                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["value"], 'widget');
                    echo "
                                ";
                }
                // line 28
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "name", array()), "html", null, true);
            echo "
                            ";
            // line 30
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "children", array()))) {
                // line 31
                echo "                                <ul style=\"margin-left:20px\">
                                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 33
                    echo "                                        ";
                    echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["child"], 1 => (isset($context["form"]) ? $context["form"] : null)), "method");
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                                </ul>
                            ";
            }
            // line 37
            echo "                        </li>
                    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ZesharCRMLeadScoringBundle:ScoringCRUD:scoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 37,  174 => 35,  165 => 33,  161 => 32,  158 => 31,  156 => 30,  151 => 29,  145 => 28,  139 => 26,  136 => 25,  132 => 24,  129 => 23,  116 => 22,  110 => 56,  106 => 55,  99 => 51,  93 => 47,  89 => 45,  80 => 43,  76 => 42,  73 => 41,  71 => 40,  68 => 39,  63 => 20,  48 => 9,  45 => 8,  39 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ url('sonata_admin_dashboard') }}">{% trans %}Dashboard{% endtrans %}</a></li>*/
/*     <li class="active">Scoring Page for {{ entity.name }}</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ form_start(form) }}*/
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr class="sonata-ba-view-title">*/
/*             <th colspan="2">*/
/*                 Scoring Criteria:*/
/*             </th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{{ form_label(form.criteria)}}</td>*/
/*                 <td>*/
/*                     {% macro recursiveCriteria(criteria,form) %}*/
/*                         <li>*/
/*                             {% for value in form.criteria %}*/
/*                                 {% if criteria.id == value.vars.value%}*/
/*                                     {{ form_widget(value) }}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             {{ criteria.name }}*/
/*                             {% if criteria.children|length %}*/
/*                                 <ul style="margin-left:20px">*/
/*                                     {% for child in criteria.children %}*/
/*                                         {{ _self.recursiveCriteria(child,form) }}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             {% endif %}*/
/*                         </li>*/
/*                     {% endmacro %}*/
/* */
/*                     {% if firstCriteria %}*/
/*                         <ul style="margin-left:20px">*/
/*                             {% for item in firstCriteria %}*/
/*                                 {{ _self.recursiveCriteria(item,form) }}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Total</td>*/
/*                 <td>{{ leadScoring.total }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     {{ form_widget(form.save) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
