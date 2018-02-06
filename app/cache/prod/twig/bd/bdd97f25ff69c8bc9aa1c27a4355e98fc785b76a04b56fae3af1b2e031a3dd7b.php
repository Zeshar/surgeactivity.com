<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_5389bb38f0e82e674ac49cb54e26ea3b894b04b6c23797029ce36df6a0d86e7e extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-lock icon-white glyphicon glyphicon-lock\"></i>&nbsp;";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  19 => 1,);
    }
}
/* <form action="{{ path('sonata_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password form-horizontal">*/
/*     {{ form_widget(form) }}*/
/*     <button type="submit" class="btn btn-danger pull-right"><i class="icon-lock icon-white glyphicon glyphicon-lock"></i>&nbsp;{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/* </form>*/
/* */
