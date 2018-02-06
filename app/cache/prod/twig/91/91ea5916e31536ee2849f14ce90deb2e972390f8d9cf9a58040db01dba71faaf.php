<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:personal_info_tab.html.twig */
class __TwigTemplate_f3007050320ca989df2c2a917367c2c1ae6248be07867dbd8a252d2f0bc9ff3c extends Twig_Template
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
        <h3>Contact Info</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"contact-info-edit\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <h4 class=\"company-id\">Contact ID : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "id", array()), "html", null, true);
        echo " </h4><br />
                <span class=\"error\" style=\"display: none;\"></span>
                <div class=\"small-table\">
                    <table>
                        <tbody>
                        <tr>
                            <th width=\"15%\"></th>
                            <th width=\"35%\">Contact Information</th>
                            <th width=\"15%\"></th>
                            <th width=\"35%\"></th>
                        </tr>
                        <tr>
                            <td><b>First Name</b></td>
                            <td>
                                <input id=\"contactFirstName\" class=\"form-control\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "firstName", array()), "html", null, true);
        echo "\"  />
                            </td>
                            <td><b>Last Name</b></td>
                            <td>
                                <input id=\"contactLastName\" class=\"form-control\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "lastName", array()), "html", null, true);
        echo "\"  />
                            </td>
                        </tr>
                        <tr>
                            <td><b>Username</b></td>
                            <td>
                                <input id=\"contactUsername\" class=\"form-control\" type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "username", array()), "html", null, true);
        echo "\" />
                            </td>
                            <td><b>Email Address</b></td>
                            <td>
                                <input id=\"contactEmail\" class=\"form-control\" type=\"email\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "email", array()), "html", null, true);
        echo "\" />
                            </td>
                        </tr>
                        <tr>
                            <td><b>Password</b></td>
                            <td>
                                <input id=\"contactPassword\" class=\"form-control\" type=\"password\" value=\"\" />
                            </td>
                            <td><span class=\"red\">*</span><b>Confirm Password</b></td>
                            <td>
                                <input id=\"contactPasswordConfirmation\" class=\"form-control\" type=\"password\" value=\"\" />
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br />
            </div>

            ";
        // line 58
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:personal_info_tab.html.twig", 58)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Save")));
        // line 59
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:personal_info_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 59,  93 => 58,  71 => 39,  64 => 35,  55 => 29,  48 => 25,  31 => 11,  19 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Contact Info</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="contact-info-edit" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <h4 class="company-id">Contact ID : {{ object.creator.id }} </h4><br />*/
/*                 <span class="error" style="display: none;"></span>*/
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <th width="15%"></th>*/
/*                             <th width="35%">Contact Information</th>*/
/*                             <th width="15%"></th>*/
/*                             <th width="35%"></th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>First Name</b></td>*/
/*                             <td>*/
/*                                 <input id="contactFirstName" class="form-control" type="text" value="{{ object.creator.firstName }}"  />*/
/*                             </td>*/
/*                             <td><b>Last Name</b></td>*/
/*                             <td>*/
/*                                 <input id="contactLastName" class="form-control" type="text" value="{{ object.creator.lastName }}"  />*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>Username</b></td>*/
/*                             <td>*/
/*                                 <input id="contactUsername" class="form-control" type="text" value="{{ object.creator.username }}" />*/
/*                             </td>*/
/*                             <td><b>Email Address</b></td>*/
/*                             <td>*/
/*                                 <input id="contactEmail" class="form-control" type="email" value="{{ object.creator.email }}" />*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>Password</b></td>*/
/*                             <td>*/
/*                                 <input id="contactPassword" class="form-control" type="password" value="" />*/
/*                             </td>*/
/*                             <td><span class="red">*</span><b>Confirm Password</b></td>*/
/*                             <td>*/
/*                                 <input id="contactPasswordConfirmation" class="form-control" type="password" value="" />*/
/*                             </td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <br />*/
/*             </div>*/
/* */
/*             {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Save'} %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
