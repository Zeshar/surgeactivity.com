<?php

/* ZesharCRMCoreBundle:FormItems:existingLeadEvents.html.twig */
class __TwigTemplate_8c078cdaba90a30c84be9647b750eb217d98722c633404ede1145eeba42306ba extends Twig_Template
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
        echo "<div>
    ";
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLeadEvents", array(), "method"))) {
            // line 3
            echo "        <div id=\"table-scroll\">
            <table class=\"tabletable editable-table\" style=\"width:100%;\">
                <tbody>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLeadEvents", array(), "method"));
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
        return array (  81 => 23,  77 => 21,  71 => 17,  59 => 13,  54 => 11,  50 => 10,  44 => 9,  38 => 8,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
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
