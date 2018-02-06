<?php

/* ZesharCRMCallsBundle:Default:calltoken.html.twig */
class __TwigTemplate_0fa0bcfff38569eb38163bff6d945f4217d63d46deaf5380d23557884de449b1 extends Twig_Template
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
        echo "<div id=\"call_status\" data-token=\"";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" style=\"display: none; padding: 15px;\"></div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCallsBundle:Default:calltoken.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div id="call_status" data-token="{{ token }}" style="display: none; padding: 15px;"></div>*/
