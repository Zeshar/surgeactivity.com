<?php

/* ZesharCRMCoreBundle:FormItems:existingLeadEvents.html.twig */
class __TwigTemplate_1c275cc5292bf6987b6f9725e53429b40191e4c36ec2854f15e319d19c38d9cf extends Twig_Template
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
        $__internal_ac7bb567e74a0d57041ae61ebc34770c34eee57fc54a2fac573b03a853986d79 = $this->env->getExtension("native_profiler");
        $__internal_ac7bb567e74a0d57041ae61ebc34770c34eee57fc54a2fac573b03a853986d79->enter($__internal_ac7bb567e74a0d57041ae61ebc34770c34eee57fc54a2fac573b03a853986d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:existingLeadEvents.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadEvents", array(), "method"))) {
            // line 3
            echo "        <div id=\"table-scroll\">
            <table class=\"tabletable editable-table\" style=\"width:100%;\">
                <tbody>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadEvents", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["leadEvent"]) {
                // line 7
                echo "                    <tr class=\"existing-event-line\" data-event-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leadEvent"], "getId", array(), "method"), "html", null, true);
                echo "\">
                        <td data-event-field=\"happensAt\" data-event-field-val=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["leadEvent"], "getHappensAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["leadEvent"], "getHappensAt", array(), "method"), "M d, Y H:i"), "html", null, true);
                echo "</td>
                        <td data-event-field=\"location\" data-event-field-val=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["leadEvent"], "getLocation", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leadEvent"], "getLocation", array(), "method"), "html", null, true);
                echo "</td>
                        <td data-event-field=\"leadEventType\" data-event-field-val=\"";
                // line 10
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["leadEvent"], "getType", array(), "method"))) ? ("") : ($this->getAttribute($this->getAttribute($context["leadEvent"], "getType", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">
                            ";
                // line 11
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["leadEvent"], "getType", array(), "method"))) ? ("") : ($this->getAttribute($this->getAttribute($context["leadEvent"], "getType", array(), "method"), "getTitle", array(), "method"))), "html", null, true);
                echo "
                        </td>
                        <td data-event-field=\"goal\" data-event-field-val=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["leadEvent"], "getGoal", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leadEvent"], "getGoalString", array(), "method"), "html", null, true);
                echo "</td>
                        <td data-event-field=\"delete\" style=\"width: auto;\"><a class=\"delete-event\"><i class=\"fa fa-times\"></i></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leadEvent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 21
            echo "        <div>No events were still appointed.</div>
    ";
        }
        // line 23
        echo "</div>
";
        
        $__internal_ac7bb567e74a0d57041ae61ebc34770c34eee57fc54a2fac573b03a853986d79->leave($__internal_ac7bb567e74a0d57041ae61ebc34770c34eee57fc54a2fac573b03a853986d79_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:existingLeadEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  80 => 21,  74 => 17,  62 => 13,  57 => 11,  53 => 10,  47 => 9,  41 => 8,  36 => 7,  32 => 6,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div>*/
/*     {% if object.getLeadEvents() is not empty %}*/
/*         <div id="table-scroll">*/
/*             <table class="tabletable editable-table" style="width:100%;">*/
/*                 <tbody>*/
/*                 {% for leadEvent in object.getLeadEvents() %}*/
/*                     <tr class="existing-event-line" data-event-id="{{ leadEvent.getId() }}">*/
/*                         <td data-event-field="happensAt" data-event-field-val="{{ leadEvent.getHappensAt()|date('Y-m-d H:i:s') }}">{{ leadEvent.getHappensAt()|date('M d, Y H:i') }}</td>*/
/*                         <td data-event-field="location" data-event-field-val="{{ leadEvent.getLocation() }}">{{ leadEvent.getLocation() }}</td>*/
/*                         <td data-event-field="leadEventType" data-event-field-val="{{ leadEvent.getType() is null ? '' : leadEvent.getType().getId()}}">*/
/*                             {{ leadEvent.getType() is null ? '' : leadEvent.getType().getTitle() }}*/
/*                         </td>*/
/*                         <td data-event-field="goal" data-event-field-val="{{ leadEvent.getGoal() }}">{{ leadEvent.getGoalString() }}</td>*/
/*                         <td data-event-field="delete" style="width: auto;"><a class="delete-event"><i class="fa fa-times"></i></a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% else %}*/
/*         <div>No events were still appointed.</div>*/
/*     {% endif %}*/
/* </div>*/
/* */
