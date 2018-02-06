<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_payment_history.html.twig */
class __TwigTemplate_976f328f29970826f6d4f28ea8011e95ff2590a646a8371d4ca3dc6cae5b84a3 extends Twig_Template
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
        $__internal_8322b8690b4b77e64b8aa077ae470bd4e949fbdbf8d3454d4c9acbdadba99be9 = $this->env->getExtension("native_profiler");
        $__internal_8322b8690b4b77e64b8aa077ae470bd4e949fbdbf8d3454d4c9acbdadba99be9->enter($__internal_8322b8690b4b77e64b8aa077ae470bd4e949fbdbf8d3454d4c9acbdadba99be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_payment_history.html.twig"));

        // line 1
        echo "<div class=\"small-table right-couple\">
    <table>
        <tr>
            <th width=\"65%\">Payment History</th>
            <th width=\"35%\"></th>
        </tr>
    </table>
    <div>
        <table>
            <tr>
                <td width=\"20%\"><b>Date</b></td>
                <td width=\"20%\"><b>Action</b></td>
                <td width=\"40%\"><b>Description</b></td>
                <td width=\"20%\"><b>Amount</b></td>
            </tr>
        </table>
        <hr />
        <div style=\"height: 300px; overflow: auto\">
            <table class=\"payments\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "payments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["payment"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </table>
        </div>
    </div>
</div>
<br />";
        
        $__internal_8322b8690b4b77e64b8aa077ae470bd4e949fbdbf8d3454d4c9acbdadba99be9->leave($__internal_8322b8690b4b77e64b8aa077ae470bd4e949fbdbf8d3454d4c9acbdadba99be9_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_payment_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  59 => 25,  55 => 24,  50 => 22,  47 => 21,  43 => 20,  22 => 1,);
    }
}
/* <div class="small-table right-couple">*/
/*     <table>*/
/*         <tr>*/
/*             <th width="65%">Payment History</th>*/
/*             <th width="35%"></th>*/
/*         </tr>*/
/*     </table>*/
/*     <div>*/
/*         <table>*/
/*             <tr>*/
/*                 <td width="20%"><b>Date</b></td>*/
/*                 <td width="20%"><b>Action</b></td>*/
/*                 <td width="40%"><b>Description</b></td>*/
/*                 <td width="20%"><b>Amount</b></td>*/
/*             </tr>*/
/*         </table>*/
/*         <hr />*/
/*         <div style="height: 300px; overflow: auto">*/
/*             <table class="payments">*/
/*                 {% for payment in object.creator.payments %}*/
/*                     <tr>*/
/*                         <td>{{ payment.date|date('d/m/Y') }}</td>*/
/*                         <td></td>*/
/*                         <td>{{ payment.description }}</td>*/
/*                         <td>{{ payment.amount }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <br />*/
