<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:payment_history_tab.html.twig */
class __TwigTemplate_0d6597416e653bf03ef5d05f66417c5740ec2e1bc5f749c731ab7ae7d0c2cd61 extends Twig_Template
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
        echo "<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Payment History</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <div class=\"small-table\">
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
                                <td width=\"20%\"><b>Actor</b></td>
                                <td width=\"40%\"><b>Description</b></td>
                                <td width=\"20%\"><b>Amount</b></td>
                            </tr>
                        </table>
                        <div style=\"height: 500px; overflow: auto; width:97%;\">
                            <hr />
                            <table class=\"payments\">
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "payments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 31
            echo "                                    <tr>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["payment"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>?</td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:payment_history_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 38,  66 => 35,  62 => 34,  57 => 32,  54 => 31,  50 => 30,  19 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Payment History</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th width="65%">Payment History</th>*/
/*                             <th width="35%"></th>*/
/*                         </tr>*/
/*                     </table>*/
/*                     <div>*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <td width="20%"><b>Date</b></td>*/
/*                                 <td width="20%"><b>Actor</b></td>*/
/*                                 <td width="40%"><b>Description</b></td>*/
/*                                 <td width="20%"><b>Amount</b></td>*/
/*                             </tr>*/
/*                         </table>*/
/*                         <div style="height: 500px; overflow: auto; width:97%;">*/
/*                             <hr />*/
/*                             <table class="payments">*/
/*                                 {% for payment in object.creator.payments %}*/
/*                                     <tr>*/
/*                                         <td>{{ payment.date|date('d/m/Y') }}</td>*/
/*                                         <td>?</td>*/
/*                                         <td>{{ payment.description }}</td>*/
/*                                         <td>{{ payment.amount }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
