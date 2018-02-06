<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_fd45d9320a45170bb10940a10d4e08bcbe754bdc49780b4d04b1ac4b4de58fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "SonataUserBundle:Admin/Security:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc login-page\"";
    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-box-body\">
            ";
        // line 18
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 48
        echo "        </div>
    </div>
    
";
    }

    // line 18
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 24
        echo "                <div class=\"header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</div>
                <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"body bg-gray\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>

                        <div class=\"form-group has-feedback\">
                            <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        </div>

                        <div class=\"form-group has-feedback\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        </div>

                        <div class=\"form-group \">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"footer\">
                        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn bg-olive btn-block\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        ";
        // line 45
        echo "                    </div>
                </form>
            ";
    }

    // line 19
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 20
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 21
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 23
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 23,  133 => 21,  130 => 20,  127 => 19,  121 => 45,  117 => 43,  110 => 39,  102 => 34,  93 => 30,  87 => 27,  82 => 25,  77 => 24,  74 => 19,  71 => 18,  64 => 48,  62 => 18,  57 => 15,  54 => 14,  48 => 12,  43 => 9,  38 => 6,  33 => 3,  24 => 1,);
    }
}
/* {% extends base_template %}*/
/* */
/* {% block sonata_nav %}*/
/* {% endblock sonata_nav %}*/
/* */
/* {% block logo %}*/
/* {% endblock logo %}*/
/* */
/* {% block sonata_left_side %}*/
/* {% endblock sonata_left_side %}*/
/* */
/* {% block body_attributes %}class="sonata-bc login-page"{% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-box-body">*/
/*             {% block sonata_user_login_form %}*/
/*                 {% block sonata_user_login_error %}*/
/*                     {% if error %}*/
/*                         <div class="alert alert-danger">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 <div class="header">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</div>*/
/*                 <form action="{{ path("sonata_user_admin_security_check") }}" method="post" role="form">*/
/*                     <div class="body bg-gray">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                         <div class="form-group has-feedback">*/
/*                             <input type="text" class="form-control" id="username"  name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}"/>*/
/*                         </div>*/
/* */
/*                         <div class="form-group has-feedback">*/
/*                             <input type="password" class="form-control" id="password" name="_password" required="required" placeholder="{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}"/>*/
/*                         </div>*/
/* */
/*                         <div class="form-group ">*/
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                             {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="footer">*/
/*                         <button type="submit" id="_submit" name="_submit" class="btn bg-olive btn-block">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         {#<p><a href="{{ reset_route }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a></p>#}*/
/*                     </div>*/
/*                 </form>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     */
/* {% endblock sonata_wrapper %}*/
/* */
