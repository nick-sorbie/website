<?php

/* /var/www/cms/themes/goeroe-semantic-october/layouts/default.htm */
class __TwigTemplate_9a48d1938d6fead76b65fa9066489971242e2d8303e8cad958be6a8507553fbd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/semantic-october.png");
        echo "\" />
        <link href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/dist/semantic.min.css"));
        // line 13
        echo "\" rel=\"stylesheet\">
        ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 18
        echo "        
        <!-- SCRIPTS -->
        <script src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/jquery.min.js", 1 => "assets/dist/semantic.min.js", 2 => "assets/js/app.js"));
        // line 24
        echo "\"></script>
        ";
        // line 25
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 26
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 27
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/cms/themes/goeroe-semantic-october/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  73 => 26,  66 => 25,  63 => 24,  61 => 20,  57 => 18,  55 => 17,  51 => 15,  48 => 14,  45 => 13,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/semantic-october.png'|theme }}" />*/
/*         <link href="{{ [*/
/*             'assets/dist/semantic.min.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*         {% styles %}*/
/*     </head>*/
/*     <body>*/
/*         {% page %}*/
/*         */
/*         <!-- SCRIPTS -->*/
/*         <script src="{{ [*/
/*             'assets/js/vendor/jquery.min.js',*/
/*             'assets/dist/semantic.min.js',*/
/*             'assets/js/app.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*     </body>*/
/* </html>*/
