<?php

/* ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig */
class __TwigTemplate_bedc66ec7f3addb1c536b9af15a124c594768934faff85daca3bed3bfac11a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()), "ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        // line 4
        echo "    <table class=\"table table-bordered table-striped sonata-ba-list\">
        <thead>
        <tr>
            <th colspan=\"3\">Deleted Leads List</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                <div class=\"btn-group\" align=\"center\">
                    <a class=\"btn btn-small\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">Deleted Leads List</a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <table class="table table-bordered table-striped sonata-ba-list">*/
/*         <thead>*/
/*         <tr>*/
/*             <th colspan="3">Deleted Leads List</th>*/
/*         </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         <tr>*/
/*             <td>*/
/*                 <div class="btn-group" align="center">*/
/*                     <a class="btn btn-small" href="{{ link }}">Deleted Leads List</a>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
