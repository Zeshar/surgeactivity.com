<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_payment_history.html.twig */
class __TwigTemplate_ff64021450bb7f62c0efd056fe543eaab2e4327b518495d18f540204d9ada52e extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "payments", array()));
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
        return array (  65 => 28,  56 => 25,  52 => 24,  47 => 22,  44 => 21,  40 => 20,  19 => 1,);
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
