<?php

/* ZesharCRMCoreBundle:FormItems:customDataSelect.html.twig */
class __TwigTemplate_24957beb469178af2cb2b8a6b11360111cf0ce03e2138acb92442473b9ea49d9 extends Twig_Template
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
        $__internal_09ff7af9b8f3ae61598401e6116fd1609a59a5a6ebfb362b5fd99e97be2a8111 = $this->env->getExtension("native_profiler");
        $__internal_09ff7af9b8f3ae61598401e6116fd1609a59a5a6ebfb362b5fd99e97be2a8111->enter($__internal_09ff7af9b8f3ae61598401e6116fd1609a59a5a6ebfb362b5fd99e97be2a8111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:customDataSelect.html.twig"));

        // line 1
        echo "<select id=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : $this->getContext($context, "formItemId")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : $this->getContext($context, "formItemId")), "html", null, true);
        echo ((array_key_exists("notArray", $context)) ? ("") : ("[\$\$name\$\$]"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["dataElem"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $context["dataElem"], "html", null, true);
            echo "
        <option value=\"";
            // line 7
            echo twig_escape_filter($this->env, ((array_key_exists("fromEnum", $context)) ? ($context["key"]) : ($context["dataElem"])), "html", null, true);
            echo "\" ";
            if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && (((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == $context["dataElem"]) || ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == $context["key"])))) {
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
        
        $__internal_09ff7af9b8f3ae61598401e6116fd1609a59a5a6ebfb362b5fd99e97be2a8111->leave($__internal_09ff7af9b8f3ae61598401e6116fd1609a59a5a6ebfb362b5fd99e97be2a8111_prof);

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
        return array (  66 => 9,  52 => 7,  47 => 6,  42 => 5,  36 => 3,  34 => 2,  22 => 1,);
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
