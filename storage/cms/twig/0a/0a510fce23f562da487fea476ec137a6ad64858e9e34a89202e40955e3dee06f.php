<?php

/* /var/www/cms/themes/jtherczeg-cyrus studio v2/partials/footer.htm */
class __TwigTemplate_7d8e774e881b1830e077edb1cbfdda166718ed91946003a962eb37662a1a76e1 extends Twig_Template
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
        echo "<!-- Footer Starts -->
<p class=\"wowload flipInX\"><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a> <a href=\"#\"><i class=\"fa fa-instagram fa-2x\"></i></a> <a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a> <a href=\"#\"><i class=\"fa fa-flickr fa-2x\"></i></a> </p>
<p class=\"power\">Copyright &copy; ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". All Rights Reserved. &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;</p>
<!-- # Footer Ends -->";
    }

    public function getTemplateName()
    {
        return "/var/www/cms/themes/jtherczeg-cyrus studio v2/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <!-- Footer Starts -->*/
/* <p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>*/
/* <p class="power">Copyright &copy; {{ "now"|date("Y") }} {{ this.theme.site_name }}. All Rights Reserved. &#123;&#123; Powered by <a href="http://octobercms.com/">OctoberCMS</a> &#125;&#125;</p>*/
/* <!-- # Footer Ends -->*/
