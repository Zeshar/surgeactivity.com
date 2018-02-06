<?php

/* ZesharCRMCoreBundle:FormItems:entitySelect.html.twig */
class __TwigTemplate_a9e902a52765148b23a5d205fc9272da729ea0784e6a8090dfd4863c51541412 extends Twig_Template
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
        // line 1
        echo "<select id=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : null), "html", null, true);
        echo "\" class=\"custom-select light\"";
        if ( !twig_test_empty((isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
    ";
        // line 2
        if ( !twig_test_empty((isset($context["emptyOption"]) ? $context["emptyOption"] : null))) {
            // line 3
            echo "        <option value=\"\">";
            echo twig_escape_filter($this->env, (isset($context["emptyOptionTitle"]) ? $context["emptyOptionTitle"] : null), "html", null, true);
            echo "</option>
    ";
        }
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["activeId"]) ? $context["activeId"] : null), "html", null, true);
            echo "
        <option value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getId", array(), "method"), "html", null, true);
            echo "\" ";
            if (( !twig_test_empty((isset($context["activeId"]) ? $context["activeId"] : null)) && (twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "getId", array(), "method")) == twig_number_format_filter($this->env, (isset($context["activeId"]) ? $context["activeId"] : null))))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], (isset($context["titleProperty"]) ? $context["titleProperty"] : null)), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</select>
";
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
        return array (  62 => 9,  48 => 7,  43 => 6,  38 => 5,  32 => 3,  30 => 2,  19 => 1,);
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
