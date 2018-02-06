<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history_content.html.twig */
class __TwigTemplate_06d1d2707c04f589afb7250b11474d9dad6ed5a784d953fb1d3b1d7c7771c623 extends Twig_Template
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
        $__internal_0b5daf8ba62cb9f773befde65c618f90fba5d875441e27662b3a517225640331 = $this->env->getExtension("native_profiler");
        $__internal_0b5daf8ba62cb9f773befde65c618f90fba5d875441e27662b3a517225640331->enter($__internal_0b5daf8ba62cb9f773befde65c618f90fba5d875441e27662b3a517225640331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history_content.html.twig"));

        // line 1
        echo "<div id=\"lead_contact_history_table\">
    ";
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getCallReport", array(), "method"))) {
            // line 3
            echo "        <div>
            <table class=\"tabletable editable-table\">
                <tr>
                    <td>Date</td>
                    <td>Type</td>
                    <td>Direction</td>
                    <td>Status</td>
                </tr>
                <tbody>
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getCallReport", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["contactAttempt"]) {
                // line 13
                echo "                    <tr class=\"existing-event-line\">
                        <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contactAttempt"], "getStartsAt", array(), "method"), "m/d/y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["contactAttempt"], "getEventsTypeString", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["contactAttempt"], "getTypeString", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["contactAttempt"], "getStatusString", array(), "method"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactAttempt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 24
            echo "        <div>There are no contact attempt.</div>
    ";
        }
        // line 26
        echo "</div>";
        
        $__internal_0b5daf8ba62cb9f773befde65c618f90fba5d875441e27662b3a517225640331->leave($__internal_0b5daf8ba62cb9f773befde65c618f90fba5d875441e27662b3a517225640331_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 24,  66 => 20,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  42 => 13,  38 => 12,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div id="lead_contact_history_table">*/
/*     {% if object.getCallReport() is not empty %}*/
/*         <div>*/
/*             <table class="tabletable editable-table">*/
/*                 <tr>*/
/*                     <td>Date</td>*/
/*                     <td>Type</td>*/
/*                     <td>Direction</td>*/
/*                     <td>Status</td>*/
/*                 </tr>*/
/*                 <tbody>*/
/*                 {% for contactAttempt in object.getCallReport() %}*/
/*                     <tr class="existing-event-line">*/
/*                         <td>{{ contactAttempt.getStartsAt()|date('m/d/y') }}</td>*/
/*                         <td>{{ contactAttempt.getEventsTypeString() }}</td>*/
/*                         <td>{{ contactAttempt.getTypeString() }}</td>*/
/*                         <td>{{ contactAttempt.getStatusString() }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% else %}*/
/*         <div>There are no contact attempt.</div>*/
/*     {% endif %}*/
/* </div>*/
