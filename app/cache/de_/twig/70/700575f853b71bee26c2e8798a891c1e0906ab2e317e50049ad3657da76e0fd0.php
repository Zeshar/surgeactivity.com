<?php

/* ZesharCRMCoreBundle:FormItems:entitySelect.html.twig */
class __TwigTemplate_a59b49aeed22461d3db93bfd01cc18c56be504fb3fb5a4957842e290d20c7241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8048af395bea9bb4841375af37e3964f6d3c4fccbe54fbe2ba87a98c1a8978d0 = $this->env->getExtension("native_profiler");
        $__internal_8048af395bea9bb4841375af37e3964f6d3c4fccbe54fbe2ba87a98c1a8978d0->enter($__internal_8048af395bea9bb4841375af37e3964f6d3c4fccbe54fbe2ba87a98c1a8978d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:entitySelect.html.twig"));

        // line 1
        echo "<select id=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : $this->getContext($context, "formItemId")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : $this->getContext($context, "formItemId")), "html", null, true);
        echo "\" class=\"custom-select light\"";
        if ( !twig_test_empty((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
    ";
        // line 2
        if ( !twig_test_empty((isset($context["emptyOption"]) ? $context["emptyOption"] : $this->getContext($context, "emptyOption")))) {
            // line 3
            echo "        <option value=\"\">";
            echo twig_escape_filter($this->env, (isset($context["emptyOptionTitle"]) ? $context["emptyOptionTitle"] : $this->getContext($context, "emptyOptionTitle")), "html", null, true);
            echo "</option>
    ";
        }
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["activeId"]) ? $context["activeId"] : $this->getContext($context, "activeId")), "html", null, true);
            echo "
        <option value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getId", array(), "method"), "html", null, true);
            echo "\" ";
            if (( !twig_test_empty((isset($context["activeId"]) ? $context["activeId"] : $this->getContext($context, "activeId"))) && (twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "getId", array(), "method")) == twig_number_format_filter($this->env, (isset($context["activeId"]) ? $context["activeId"] : $this->getContext($context, "activeId")))))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], (isset($context["titleProperty"]) ? $context["titleProperty"] : $this->getContext($context, "titleProperty"))), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</select>
";
        
        $__internal_8048af395bea9bb4841375af37e3964f6d3c4fccbe54fbe2ba87a98c1a8978d0->leave($__internal_8048af395bea9bb4841375af37e3964f6d3c4fccbe54fbe2ba87a98c1a8978d0_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:entitySelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  51 => 7,  46 => 6,  41 => 5,  35 => 3,  33 => 2,  22 => 1,);
    }
}
/* <select id="{{ formItemId }}" name="{{ formItemId }}" class="custom-select light"{% if disabled is not empty %} disabled="disabled"{% endif %}>*/
/*     {% if emptyOption is not empty %}*/
/*         <option value="">{{ emptyOptionTitle }}</option>*/
/*     {% endif %}*/
/*     {% for entity in entities %}*/
/*         {{ activeId }}*/
/*         <option value="{{ entity.getId() }}" {% if activeId is not empty and entity.getId()|number_format == activeId|number_format %}selected="selected"{% endif %}>{{ attribute(entity, titleProperty) }}</option>*/
/*     {% endfor %}*/
/* </select>*/
/* */
