<?php

/* ZesharCRMCoreBundle:FormItems:driverTicketsField.html.twig */
class __TwigTemplate_4b9bd1e106e036a5c23c6503279d93d525e58c2234c5c7031ce81bfcc6c647cb extends Twig_Template
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
        $__internal_fbb4ec3277e7bf6fc6939b3b17563f1657dd93a96142a617c46be2481dcfd207 = $this->env->getExtension("native_profiler");
        $__internal_fbb4ec3277e7bf6fc6939b3b17563f1657dd93a96142a617c46be2481dcfd207->enter($__internal_fbb4ec3277e7bf6fc6939b3b17563f1657dd93a96142a617c46be2481dcfd207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:driverTicketsField.html.twig"));

        // line 1
        echo "<div class=\"form-group plus row ";
        echo ((((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == true)) ? ("first") : (""));
        echo "\">

    <div class=\"col-md-10 \">
        ";
        // line 4
        if (((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == true)) {
            // line 5
            echo "            <label for=\"tickets\">At Fault / Tickets</label>
        ";
        }
        // line 7
        echo "        <select id=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : $this->getContext($context, "formItemId")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["formItemId"]) ? $context["formItemId"] : $this->getContext($context, "formItemId")), "html", null, true);
        echo "[\$\$name\$\$][\$\$ticketName\$\$][type]\" class=\"custom-select light\"";
        if ( !twig_test_empty((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
            ";
        // line 8
        if ( !twig_test_empty((isset($context["emptyOption"]) ? $context["emptyOption"] : $this->getContext($context, "emptyOption")))) {
            // line 9
            echo "                <option value=\"\">";
            echo twig_escape_filter($this->env, (isset($context["emptyOptionTitle"]) ? $context["emptyOptionTitle"] : $this->getContext($context, "emptyOptionTitle")), "html", null, true);
            echo "</option>
            ";
        }
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["dataElem"]) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $context["dataElem"], "html", null, true);
            echo "
                <option value=\"";
            // line 13
            echo twig_escape_filter($this->env, ((array_key_exists("fromEnum", $context)) ? ($context["key"]) : ($context["dataElem"])), "html", null, true);
            echo "\" ";
            if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ($this->getAttribute((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")), "getType", array(), "method") == $context["key"]))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["dataElem"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['dataElem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>

    </div>

    <div class=\"col-md-2 add-group\">
        <a href=\"#\"><span class=\"glyphicon glyphicon-plus add-ticket-field\"></span></a>
        ";
        // line 21
        if (((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == false)) {
            // line 22
            echo "            <a href=\"#\"><span class=\"glyphicon glyphicon-minus remove-ticket-field\"></span></a>
        ";
        }
        // line 24
        echo "    </div>

    <input type=\"hidden\" class=\"driverTicketId\" name=\"driver_tickets[\$\$name\$\$][\$\$ticketName\$\$][id]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")))) ? ($this->getAttribute((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")), "getId", array(), "method")) : ("")), "html", null, true);
        echo "\" />
</div>
";
        
        $__internal_fbb4ec3277e7bf6fc6939b3b17563f1657dd93a96142a617c46be2481dcfd207->leave($__internal_fbb4ec3277e7bf6fc6939b3b17563f1657dd93a96142a617c46be2481dcfd207_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:driverTicketsField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  92 => 24,  88 => 22,  86 => 21,  78 => 15,  64 => 13,  59 => 12,  54 => 11,  48 => 9,  46 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 1,);
    }
}
/* <div class="form-group plus row {{ first == true ? 'first' : '' }}">*/
/* */
/*     <div class="col-md-10 ">*/
/*         {% if first == true %}*/
/*             <label for="tickets">At Fault / Tickets</label>*/
/*         {% endif %}*/
/*         <select id="{{ formItemId }}" name="{{ formItemId }}[$$name$$][$$ticketName$$][type]" class="custom-select light"{% if disabled is not empty %} disabled="disabled"{% endif %}>*/
/*             {% if emptyOption is not empty %}*/
/*                 <option value="">{{ emptyOptionTitle }}</option>*/
/*             {% endif %}*/
/*             {% for key, dataElem in data %}*/
/*                 {{ dataElem }}*/
/*                 <option value="{{ fromEnum is defined ? key : dataElem }}" {% if activeValue is not empty and activeValue.getType() == key %} selected="selected"{% endif %}>{{ dataElem }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/* */
/*     </div>*/
/* */
/*     <div class="col-md-2 add-group">*/
/*         <a href="#"><span class="glyphicon glyphicon-plus add-ticket-field"></span></a>*/
/*         {% if first == false %}*/
/*             <a href="#"><span class="glyphicon glyphicon-minus remove-ticket-field"></span></a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <input type="hidden" class="driverTicketId" name="driver_tickets[$$name$$][$$ticketName$$][id]" value="{{ activeValue is not empty ?  activeValue.getId() : '' }}" />*/
/* </div>*/
/* */
