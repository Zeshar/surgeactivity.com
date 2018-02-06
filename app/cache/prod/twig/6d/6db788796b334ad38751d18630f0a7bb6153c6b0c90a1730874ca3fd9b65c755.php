<?php

/* ZesharCRMCoreBundle:FormItems:customDataSelect.html.twig */
class __TwigTemplate_15662701a60c5f0a4aa754b174298fcb622ecf3afec562a3b8624e9e716f2d0e extends Twig_Template
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
        echo ((array_key_exists("notArray", $context)) ? ("") : ("[\$\$name\$\$]"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["dataElem"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $context["dataElem"], "html", null, true);
            echo "
        <option value=\"";
            // line 7
            echo twig_escape_filter($this->env, ((array_key_exists("fromEnum", $context)) ? ($context["key"]) : ($context["dataElem"])), "html", null, true);
            echo "\" ";
            if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && (((isset($context["activeValue"]) ? $context["activeValue"] : null) == $context["dataElem"]) || ((isset($context["activeValue"]) ? $context["activeValue"] : null) == $context["key"])))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["dataElem"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['dataElem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:customDataSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  49 => 7,  44 => 6,  39 => 5,  33 => 3,  31 => 2,  19 => 1,);
    }
}
/* <select id="{{ formItemId }}" name="{{ formItemId }}{{ notArray is defined ? '' : '[$$name$$]'  }}" class="custom-select light"{% if disabled is not empty %} disabled="disabled"{% endif %}>*/
/*     {% if emptyOption is not empty %}*/
/*         <option value="">{{ emptyOptionTitle }}</option>*/
/*     {% endif %}*/
/*     {% for key, dataElem in data %}*/
/*         {{ dataElem }}*/
/*         <option value="{{ fromEnum is defined ? key : dataElem }}" {% if activeValue is not empty and (activeValue == dataElem or activeValue == key) %}selected="selected"{% endif %}>{{ dataElem }}</option>*/
/*     {% endfor %}*/
/* </select>*/
